<?php
namespace com\microsoft\wc\methods\response\GetPersonInfo;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.GetPersonInfo", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\response\AnyMixed {
	/**
	 * The element of the response that contains the method specific return value(s).
	 * All response schemas contain the info element which contain the return value of the method. If the method does not define an info element, the method has no return value.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\PersonInfo", name="person-info")
	 */
	protected $personInfo;

	public function __construct($personInfo = NULL) {
		$this->personInfo = ($personInfo===NULL) ? NULL : $this->validatePersonInfo($personInfo);
	}

	public function getPersonInfo($autoCreate = TRUE) {
		if ($this->personInfo===NULL && $autoCreate && ! isset($this->_overrides['personInfo']) ) {
			$this->personInfo = $this->createPersonInfo();
		}
		return $this->personInfo;
	}
	
	protected function createPersonInfo() {
		return new \com\microsoft\wc\types\PersonInfo();
	}

	public function setPersonInfo($personInfo) {
		$this->personInfo = $this->validatePersonInfo($personInfo);
	}

	protected function validatePersonInfo($personInfo) {
		if ( ! $personInfo instanceof \com\microsoft\wc\types\PersonInfo ) {
			$personInfo = new \com\microsoft\wc\types\PersonInfo ($personInfo);
		}
	
		return $personInfo;
	}
} // end class Info
