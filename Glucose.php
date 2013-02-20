<?php
namespace Illumina\HealthTrackingBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Illumina\PhphealthvaultBundle\Validator\Constraints as Validate;

use com\microsoft\wc\thing\Thing;
use com\microsoft\wc\thing\BloodGlucose\BloodGlucose;

class Glucose extends MeasurementThing
{
    protected $name = 'Glucose Measurement';
    
    /**
     * @Assert\NotBlank()
     * @Assert\Type(type="double")
     * @var double;
     */
    protected $value;

    /**
     * @Assert\NotBlank()
     * @Validate\InHealthvaultVocabulary("glucose-measurement-type")
     * @var string
     */
    protected $glucoseMeasurementType;

    /**
     * @Assert\Type("integer")
     * @Assert\Min(1)
     * @Assert\Max(5)
     * 
     * @var integer
     */
    protected $normalcy;

    /**
     * @Validate\InHealthvaultVocabulary(vocabulary="glucose-measurement-context", required=false)
     * 
     * @var string
     */
    protected $measurementContext;

    /**
     * @return the double;
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param  $value
     */
    public function setValue($value)
    {
        $this->value = $value;

        if ($this->thing) {
            $this->setHealthvaultValue($value);
        }
        
        return $this;
    }

    /**
     * @return the string
     */
    public function getGlucoseMeasurementType()
    {
        return $this->glucoseMeasurementType;
    }

    /**
     * @param  $glucoseMeasurementType
     */
    public function setGlucoseMeasurementType($glucoseMeasurementType)
    {
        $this->glucoseMeasurementType = $glucoseMeasurementType;

        if ($this->thing) {
            $this->setHealthvaultGlucoseMeasurementType($glucoseMeasurementType);
        }
        
        return $this;
    }

    /**
     * @return the integer
     */
    public function getNormalcy()
    {
        return $this->normalcy;
    }

    /**
     * @param  $normalcy
     */
    public function setNormalcy($normalcy)
    {
        $this->normalcy = $normalcy;

        if ($this->thing) {
            $this->setHealthvaultNormalcy($normalcy);
        }
        
        return $this;
    }

    /**
     * @return the string
     */
    public function getMeasurementContext()
    {
        return $this->measurementContext;
    }

    /**
     * @param  $measurementContext
     */
    public function setMeasurementContext($measurementContext)
    {
        $this->measurementContext = $measurementContext;

        if ($this->thing) {
            $this->setHealthvaultMeasurementContext($measurementContext);
        }
        
        return $this;
    }
    
    public static function reallySupports(Thing $thing)
    {
        return ($thing->getTypeId()->getValue() == BloodGlucose::ID);
    }
    
    public function setThing(Thing $thing)
    {
        $result = parent::setThing($thing);
        
        if ( $result === FALSE ) {
            return $result;
        }
        
        $payload = $this->getThingPayload();
        
        $this->value = $payload->getValue()->getMmolPerL()->getValue();
        $type = $payload->getGlucoseMeasurementType();
        if ($type && is_object($type->getCode())) {
            $this->glucoseMeasurementType = $type->getCode()->getValue();
        }
        $this->normalcy = $payload->getNormalcy()->getValue();
        $context = $payload->getMeasurementContext();
        if ($context && is_object($context->getCode())) {
            $this->measurementContext = $context->getCode()->getValue();
        }
        
        return $this;
    }
    
    public function getThing(Thing $thing = NULL)
    {
        $thing = parent::getThing($thing);
        
        $this->setThingValue($this->value);
        $this->setThingGlucoseMeasurementType($this->glucoseMeasurementType);
        $this->setThingNormalcy($this->normalcy);
        $this->setThingMeasurementContext($this->measurementContext);
        
        return $thing;
    }
    
    protected function setThingValue($value) {
        $payload = $this->getThingPayload();
        $payload->getValue()->getMmolPerL()->setValue($value);
        
        return $this;
    }
    
    protected function setThingGlucoseMeasurementType($type) {
        $payload = $this->getThingPayload();
        
        $this->setThingCodableValue($payload->getGlucoseMeasurementType(), $this->glucoseMeasurementType, array('glucose-measurement-type'));
        
        return $this;
    }
    
    protected function setThingNormalcy($normalcy) {
        $payload = $this->getThingPayload();
        
        if ( empty($value) || ! ($value = (int) $value) ) {
            $payload->setNormalcy(NULL);
        } else {
            $payload->getNormalcy()->setValue($value);
        }
        
        return $this;
    }
    
    protected function setThingMeasurementContext($context) {
        $payload = $this->getThingPayload();
        
        $this->setThingCodableValue($payload->getMeasurementContext(), $this->measurementContext, array('glucose-measurement-context'));
        
        return $this;
    }
    
    protected function getNewDataXmlContent() {
        return new BloodGlucose();
    }
    
    public static function getDisplayFields() {
        return array(
            'when' => 'Date',
            'value' => 'Blood Glucose (mmol/L)',
            'measurementContext' => 'Measurement Context',
            'glucoseMeasurementType' => 'Type',
        );
    }
}
