<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="StaffParametersType")
 */
class StaffParametersType {
	/**
	 * Characteristics of the staff person identified by the district which the state uses to perform its matching logic.
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\StateProvinceIdType", name="StateProvinceId")
	 */
	protected $stateProvinceId;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\LocalIdType", name="LocalId")
	 */
	protected $localId;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\IdRefType", name="SIF_RefId")
	 */
	protected $sifRefId;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\SSNType", name="SSN")
	 */
	protected $sSN;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Names", name="Names")
	 */
	protected $names;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Addresses", name="Addresses")
	 */
	protected $addresses;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\DemographicsType", name="Demographics")
	 */
	protected $demographics;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Contacts", name="Contacts")
	 */
	protected $contacts;

	/**
	 * @XmlText	(type="string", name="EffectiveDate")
	 */
	protected $effectiveDate;

	/**
	 * @XmlText	(type="string", name="StartDate")
	 */
	protected $startDate;

	/**
	 * @XmlText	(type="string", name="EndDate")
	 */
	protected $endDate;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\OtherIdListType", name="OtherIdList")
	 */
	protected $otherIdList;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\TimeElementType", name="TimeElement")
	 */
	protected $timeElement;

	public function __construct($stateProvinceId = NULL, $localId = NULL, $sifRefId = NULL, $sSN = NULL, $names = NULL, $addresses = NULL, $demographics = NULL, $contacts = NULL, $effectiveDate = NULL, $startDate = NULL, $endDate = NULL, $otherIdList = NULL, $timeElement = NULL) {
		$this->stateProvinceId = ($stateProvinceId===NULL) ? NULL : $this->validateStateProvinceId($stateProvinceId);
		$this->localId = ($localId===NULL) ? NULL : $this->validateLocalId($localId);
		$this->sifRefId = ($sifRefId===NULL) ? NULL : $this->validateSifRefId($sifRefId);
		$this->sSN = ($sSN===NULL) ? NULL : $this->validateSSN($sSN);
		$this->names = ($names===NULL) ? NULL : $this->validateNames($names);
		$this->addresses = ($addresses===NULL) ? NULL : $this->validateAddresses($addresses);
		$this->demographics = ($demographics===NULL) ? NULL : $this->validateDemographics($demographics);
		$this->contacts = ($contacts===NULL) ? NULL : $this->validateContacts($contacts);
		$this->effectiveDate = ($effectiveDate===NULL) ? NULL : $this->validateEffectiveDate($effectiveDate);
		$this->startDate = ($startDate===NULL) ? NULL : $this->validateStartDate($startDate);
		$this->endDate = ($endDate===NULL) ? NULL : $this->validateEndDate($endDate);
		$this->otherIdList = ($otherIdList===NULL) ? NULL : $this->validateOtherIdList($otherIdList);
		$this->timeElement = ($timeElement===NULL) ? NULL : $this->validateTimeElement($timeElement);
	}

	public function getStateProvinceId() {
		if ($this->stateProvinceId===NULL) {
			$this->stateProvinceId = $this->createStateProvinceId();
		}
		return $this->stateProvinceId;
	}
	
	protected function createStateProvinceId() {
		return NULL;
	}

	public function setStateProvinceId($stateProvinceId) {
		$this->stateProvinceId = $this->validateStateProvinceId($stateProvinceId);
	}

	protected function validateStateProvinceId($stateProvinceId) {
	
		return $stateProvinceId;
	}

	public function getLocalId() {
		if ($this->localId===NULL) {
			$this->localId = $this->createLocalId();
		}
		return $this->localId;
	}
	
	protected function createLocalId() {
		return NULL;
	}

	public function setLocalId($localId) {
		$this->localId = $this->validateLocalId($localId);
	}

	protected function validateLocalId($localId) {
	
		return $localId;
	}

	public function getSifRefId() {
		if ($this->sifRefId===NULL) {
			$this->sifRefId = $this->createSifRefId();
		}
		return $this->sifRefId;
	}
	
	protected function createSifRefId() {
		return NULL;
	}

	public function setSifRefId($sifRefId) {
		$this->sifRefId = $this->validateSifRefId($sifRefId);
	}

	protected function validateSifRefId($sifRefId) {
	
		return $sifRefId;
	}

	public function getSSN() {
		if ($this->sSN===NULL) {
			$this->sSN = $this->createSSN();
		}
		return $this->sSN;
	}
	
	protected function createSSN() {
		return NULL;
	}

	public function setSSN($sSN) {
		$this->sSN = $this->validateSSN($sSN);
	}

	protected function validateSSN($sSN) {
	
		return $sSN;
	}

	public function getNames() {
		if ($this->names===NULL) {
			$this->names = $this->createNames();
		}
		return $this->names;
	}
	
	protected function createNames() {
		return new \org\sifinfo\www\infrastructure\_2_x\Names();
	}

	public function setNames($names) {
		$this->names = $this->validateNames($names);
	}

	protected function validateNames($names) {
		if ( ! $names instanceof \org\sifinfo\www\infrastructure\_2_x\Names  && ! is_null($names) ) {
			$names = new \org\sifinfo\www\infrastructure\_2_x\Names ($names);
		}
	
		return $names;
	}

	public function getAddresses() {
		if ($this->addresses===NULL) {
			$this->addresses = $this->createAddresses();
		}
		return $this->addresses;
	}
	
	protected function createAddresses() {
		return new \org\sifinfo\www\infrastructure\_2_x\Addresses();
	}

	public function setAddresses($addresses) {
		$this->addresses = $this->validateAddresses($addresses);
	}

	protected function validateAddresses($addresses) {
		if ( ! $addresses instanceof \org\sifinfo\www\infrastructure\_2_x\Addresses  && ! is_null($addresses) ) {
			$addresses = new \org\sifinfo\www\infrastructure\_2_x\Addresses ($addresses);
		}
	
		return $addresses;
	}

	public function getDemographics() {
		if ($this->demographics===NULL) {
			$this->demographics = $this->createDemographics();
		}
		return $this->demographics;
	}
	
	protected function createDemographics() {
		return new \org\sifinfo\www\infrastructure\_2_x\DemographicsType();
	}

	public function setDemographics($demographics) {
		$this->demographics = $this->validateDemographics($demographics);
	}

	protected function validateDemographics($demographics) {
		if ( ! $demographics instanceof \org\sifinfo\www\infrastructure\_2_x\DemographicsType  && ! is_null($demographics) ) {
			$demographics = new \org\sifinfo\www\infrastructure\_2_x\DemographicsType ($demographics);
		}
	
		return $demographics;
	}

	public function getContacts() {
		if ($this->contacts===NULL) {
			$this->contacts = $this->createContacts();
		}
		return $this->contacts;
	}
	
	protected function createContacts() {
		return new \org\sifinfo\www\infrastructure\_2_x\Contacts();
	}

	public function setContacts($contacts) {
		$this->contacts = $this->validateContacts($contacts);
	}

	protected function validateContacts($contacts) {
		if ( ! $contacts instanceof \org\sifinfo\www\infrastructure\_2_x\Contacts  && ! is_null($contacts) ) {
			$contacts = new \org\sifinfo\www\infrastructure\_2_x\Contacts ($contacts);
		}
	
		return $contacts;
	}

	public function getEffectiveDate() {
		if ($this->effectiveDate===NULL) {
			$this->effectiveDate = $this->createEffectiveDate();
		}
		return $this->effectiveDate;
	}
	
	protected function createEffectiveDate() {
		return NULL;
	}

	public function setEffectiveDate($effectiveDate) {
		$this->effectiveDate = $this->validateEffectiveDate($effectiveDate);
	}

	protected function validateEffectiveDate($effectiveDate) {
		if ( ! is_string($effectiveDate) && ! is_null($effectiveDate) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'effectiveDate', 'string'));
		}
	
		return $effectiveDate;
	}

	public function getStartDate() {
		if ($this->startDate===NULL) {
			$this->startDate = $this->createStartDate();
		}
		return $this->startDate;
	}
	
	protected function createStartDate() {
		return NULL;
	}

	public function setStartDate($startDate) {
		$this->startDate = $this->validateStartDate($startDate);
	}

	protected function validateStartDate($startDate) {
		if ( ! is_string($startDate) && ! is_null($startDate) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'startDate', 'string'));
		}
	
		return $startDate;
	}

	public function getEndDate() {
		if ($this->endDate===NULL) {
			$this->endDate = $this->createEndDate();
		}
		return $this->endDate;
	}
	
	protected function createEndDate() {
		return NULL;
	}

	public function setEndDate($endDate) {
		$this->endDate = $this->validateEndDate($endDate);
	}

	protected function validateEndDate($endDate) {
		if ( ! is_string($endDate) && ! is_null($endDate) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'endDate', 'string'));
		}
	
		return $endDate;
	}

	public function getOtherIdList() {
		if ($this->otherIdList===NULL) {
			$this->otherIdList = $this->createOtherIdList();
		}
		return $this->otherIdList;
	}
	
	protected function createOtherIdList() {
		return new \org\sifinfo\www\infrastructure\_2_x\OtherIdListType();
	}

	public function setOtherIdList($otherIdList) {
		$this->otherIdList = $this->validateOtherIdList($otherIdList);
	}

	protected function validateOtherIdList($otherIdList) {
		if ( ! $otherIdList instanceof \org\sifinfo\www\infrastructure\_2_x\OtherIdListType  && ! is_null($otherIdList) ) {
			$otherIdList = new \org\sifinfo\www\infrastructure\_2_x\OtherIdListType ($otherIdList);
		}
	
		return $otherIdList;
	}

	public function getTimeElement() {
		if ($this->timeElement===NULL) {
			$this->timeElement = $this->createTimeElement();
		}
		return $this->timeElement;
	}
	
	protected function createTimeElement() {
		return new \org\sifinfo\www\infrastructure\_2_x\TimeElementType();
	}

	public function setTimeElement($timeElement) {
		$this->timeElement = $this->validateTimeElement($timeElement);
	}

	protected function validateTimeElement($timeElement) {
		if ( ! $timeElement instanceof \org\sifinfo\www\infrastructure\_2_x\TimeElementType  && ! is_null($timeElement) ) {
			$timeElement = new \org\sifinfo\www\infrastructure\_2_x\TimeElementType ($timeElement);
		}
	
		return $timeElement;
	}
} // end class StaffParametersType
