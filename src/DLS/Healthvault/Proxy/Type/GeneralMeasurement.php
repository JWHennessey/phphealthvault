<?php
namespace DLS\Healthvault\Proxy\Type;

use com\microsoft\wc\thing\types\CodableValue as hvCodableValue;
use com\microsoft\wc\thing\types\StructuredMeasurement as hvStructuredMeasurement;

use DLS\Healthvault\Utilities\VocabularyInterface;
use DLS\Healthvault\Proxy\Type\StructuredMeasurement;

class GeneralMeasurement
{

    /**
     * @var string
     */
    protected $display;

    /**
     * @var \DLS\Healthvault\Proxy\Type\StructuredMeasurement
     */

    protected $structured;

    public function __construct($vocabularies = NULL)
    {
        $this->structured = new StructuredMeasurement($vocabularies);
    }

    public function setVocabularies($vocabularies){

        $this->structured->setVocabularies($vocabularies);

    }

    public function setVocabularyInterface($vocabularyInterface){

        $this->structured->setVocabularyInterface($vocabularyInterface);

    }

    public function getDisplay(){

        return $this->display;

    }

    public function setDisplay($display){

        $this->display = $display;

    }

    public function getStructured(){
        return $this->structured;
    }

    public function setStructured($structured){

        return $this->structured = $structured;

    }

    public function setFromThingElement($thingElement){

        $this->display = $thingElement->getDisplay();

        $structured_data = current($thingElement->getStructured());

        if($structured_data){

            $this->structured->setFromThingElement($structured_data);

        }

        return $thingElement;

    }

    public function updateToThingElement($thingElement){

        $structured = $this->getStructured();

        $codedValue = $structured->getUnits();

        $vocabulary = array();

        $value = '';

        if($codedValue->getCodedValue()){

            list($type, $family, $value) = explode(':', $codedValue->getCodedValue());

            $vocabulary = $codedValue->getVocabularyInterface()->get($type, $family);

        }

        $structuredThing = current($thingElement->getStructured());

        if(!$structuredThing){

            $thingElement->addStructured(new hvStructuredMeasurement());

            $structuredThing =  current($thingElement->getStructured());

            $vocabulary_code = explode(":",$codedValue->getVocabularies());

            /*
             * There appears to be a mis-match between the duplicate definitions from types and thing/types.
             * Trying to pick the correct one is tricky, so let the autoCreate code take the strain.
             * That this exists is probably a bug in the generation code
             */
            $structuredThing->setUnits($vocabulary_code[0]);

        }

        $thingElementUnits = current($structuredThing->getUnits()->getCode());

        //Setting value

        $structuredThing->setValue($structured->getValue());

        //Setting coded value

        $codedValue->updateToThingElement($structuredThing->getUnits());

        if(array_key_exists($value,$vocabulary)){

            $codedValue->setText($vocabulary[$value]);

        }else{

            $codedValue->setText('');

        }

        //Setting Display

        $thingElement->setDisplay($structuredThing->getValue()." ".$value);

    }
}