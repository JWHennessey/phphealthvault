<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="POCD_MT000040.PatientRole")
 */
class POCDMT000040.PatientRole {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\CS", collection="true", name="realmCode")
	 */
	protected $realmCode;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.InfrastructureRoot.typeId", name="typeId")
	 */
	protected $typeId;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\II", collection="true", name="templateId")
	 */
	protected $templateId;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\II", collection="true", name="id")
	 */
	protected $id;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\AD", collection="true", name="addr")
	 */
	protected $addr;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\TEL", collection="true", name="telecom")
	 */
	protected $telecom;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.Patient", name="patient")
	 */
	protected $patient;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\POCDMT000040.Organization", name="providerOrganization")
	 */
	protected $providerOrganization;

	/**
	 * @XmlAttribute	(type="string", name="nullFlavor")
	 */
	protected $nullFlavor;

	/**
	 * @XmlAttribute	(type="string", name="classCode")
	 */
	protected $classCode;

	public function __construct($realmCode = NULL, $typeId = NULL, $templateId = NULL, $id = NULL, $addr = NULL, $telecom = NULL, $patient = NULL, $providerOrganization = NULL, $nullFlavor = NULL, $classCode = NULL) {
		$this->realmCode = ($realmCode===NULL) ? NULL : $this->validateRealmCode($realmCode);
		$this->typeId = ($typeId===NULL) ? NULL : $this->validateTypeId($typeId);
		$this->templateId = ($templateId===NULL) ? NULL : $this->validateTemplateId($templateId);
		$this->id = ($id===NULL) ? NULL : $this->validateId($id);
		$this->addr = ($addr===NULL) ? NULL : $this->validateAddr($addr);
		$this->telecom = ($telecom===NULL) ? NULL : $this->validateTelecom($telecom);
		$this->patient = ($patient===NULL) ? NULL : $this->validatePatient($patient);
		$this->providerOrganization = ($providerOrganization===NULL) ? NULL : $this->validateProviderOrganization($providerOrganization);
		$this->nullFlavor = ($nullFlavor===NULL) ? NULL : $this->validateNullFlavor($nullFlavor);
		$this->classCode = ($classCode===NULL) ? NULL : $this->validateClassCode($classCode);
	}

	public function getRealmCode() {
		if ($this->realmCode===NULL) {
			$this->realmCode = $this->createRealmCode();
		}
		return $this->realmCode;
	}
	
	protected function createRealmCode() {
		return array();
	}

	public function setRealmCode($realmCode) {
		$this->realmCode = $this->validateRealmCode($realmCode);
	}

	protected function validateRealmCode($realmCode) {
		$count = count($realmCode);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'realmCode', 0));
		}
		foreach ($realmCode as $entry) {
		}
	
		return $realmCode;
	}

	public function addRealmCode($realmCode) {
		$this->realmCode[] = $this->validateRealmCodeType($realmCode);
	}

	protected function validateRealmCodeType($realmCode) {
	
		return $realmCode;
	}

	public function getTypeId() {
		if ($this->typeId===NULL) {
			$this->typeId = $this->createTypeId();
		}
		return $this->typeId;
	}
	
	protected function createTypeId() {
		return NULL;
	}

	public function setTypeId($typeId) {
		$this->typeId = $this->validateTypeId($typeId);
	}

	protected function validateTypeId($typeId) {
	
		return $typeId;
	}

	public function getTemplateId() {
		if ($this->templateId===NULL) {
			$this->templateId = $this->createTemplateId();
		}
		return $this->templateId;
	}
	
	protected function createTemplateId() {
		return array();
	}

	public function setTemplateId($templateId) {
		$this->templateId = $this->validateTemplateId($templateId);
	}

	protected function validateTemplateId($templateId) {
		$count = count($templateId);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'templateId', 0));
		}
		foreach ($templateId as $entry) {
		}
	
		return $templateId;
	}

	public function addTemplateId($templateId) {
		$this->templateId[] = $this->validateTemplateIdType($templateId);
	}

	protected function validateTemplateIdType($templateId) {
	
		return $templateId;
	}

	public function getId() {
		if ($this->id===NULL) {
			$this->id = $this->createId();
		}
		return $this->id;
	}
	
	protected function createId() {
		return array();
	}

	public function setId($id) {
		$this->id = $this->validateId($id);
	}

	protected function validateId($id) {
		$count = count($id);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'id', 1));
		}
		foreach ($id as $entry) {
		}
	
		return $id;
	}

	public function addId($id) {
		$this->id[] = $this->validateIdType($id);
	}

	protected function validateIdType($id) {
	
		return $id;
	}

	public function getAddr() {
		if ($this->addr===NULL) {
			$this->addr = $this->createAddr();
		}
		return $this->addr;
	}
	
	protected function createAddr() {
		return array();
	}

	public function setAddr($addr) {
		$this->addr = $this->validateAddr($addr);
	}

	protected function validateAddr($addr) {
		$count = count($addr);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'addr', 0));
		}
		foreach ($addr as $entry) {
		}
	
		return $addr;
	}

	public function addAddr($addr) {
		$this->addr[] = $this->validateAddrType($addr);
	}

	protected function validateAddrType($addr) {
	
		return $addr;
	}

	public function getTelecom() {
		if ($this->telecom===NULL) {
			$this->telecom = $this->createTelecom();
		}
		return $this->telecom;
	}
	
	protected function createTelecom() {
		return array();
	}

	public function setTelecom($telecom) {
		$this->telecom = $this->validateTelecom($telecom);
	}

	protected function validateTelecom($telecom) {
		$count = count($telecom);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'telecom', 0));
		}
		foreach ($telecom as $entry) {
		}
	
		return $telecom;
	}

	public function addTelecom($telecom) {
		$this->telecom[] = $this->validateTelecomType($telecom);
	}

	protected function validateTelecomType($telecom) {
	
		return $telecom;
	}

	public function getPatient() {
		if ($this->patient===NULL) {
			$this->patient = $this->createPatient();
		}
		return $this->patient;
	}
	
	protected function createPatient() {
		return NULL;
	}

	public function setPatient($patient) {
		$this->patient = $this->validatePatient($patient);
	}

	protected function validatePatient($patient) {
	
		return $patient;
	}

	public function getProviderOrganization() {
		if ($this->providerOrganization===NULL) {
			$this->providerOrganization = $this->createProviderOrganization();
		}
		return $this->providerOrganization;
	}
	
	protected function createProviderOrganization() {
		return NULL;
	}

	public function setProviderOrganization($providerOrganization) {
		$this->providerOrganization = $this->validateProviderOrganization($providerOrganization);
	}

	protected function validateProviderOrganization($providerOrganization) {
	
		return $providerOrganization;
	}

	public function getNullFlavor() {
		if ($this->nullFlavor===NULL) {
			$this->nullFlavor = $this->createNullFlavor();
		}
		return $this->nullFlavor;
	}
	
	protected function createNullFlavor() {
		return NULL;
	}

	public function setNullFlavor($nullFlavor) {
		$this->nullFlavor = $this->validateNullFlavor($nullFlavor);
	}

	protected function validateNullFlavor($nullFlavor) {
	
		return $nullFlavor;
	}

	public function getClassCode() {
		if ($this->classCode===NULL) {
			$this->classCode = $this->createClassCode();
		}
		return $this->classCode;
	}
	
	protected function createClassCode() {
		return NULL;
	}

	public function setClassCode($classCode) {
		$this->classCode = $this->validateClassCode($classCode);
	}

	protected function validateClassCode($classCode) {
	
		return $classCode;
	}
} // end class POCDMT000040.PatientRole
