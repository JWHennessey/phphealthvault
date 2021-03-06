<?php
namespace com\microsoft\wc\thing;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing", prefix="wc-thing")
 * })
 * @XmlEntity	(xml="Thing")
 */
class Thing {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\ThingKey", name="thing-id")
	 */
	protected $thingId;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\ThingType", name="type-id")
	 */
	protected $typeId;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\ThingState", name="thing-state")
	 */
	protected $thingState;

	/**
	 * @XmlText	(type="integer", name="flags")
	 */
	protected $flags;

	/**
	 * @XmlText	(type="string", name="eff-date")
	 */
	protected $effDate;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\Audit", name="created")
	 */
	protected $created;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\Audit", name="updated")
	 */
	protected $updated;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\DataXml", collection="true", name="data-xml")
	 */
	protected $dataXml;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\DataOther", name="data-other")
	 */
	protected $dataOther;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\EffectivePermissions", name="eff-permissions")
	 */
	protected $effPermissions;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String512", name="tags")
	 */
	protected $tags;

	/**
	 * @XmlElement	(type="\org\w3\www\_2000\_09\xmldsig\Signature", name="Signature")
	 */
	protected $signature;

	public function __construct($thingId = NULL, $typeId = NULL, $thingState = NULL, $flags = NULL, $effDate = NULL, $created = NULL, $updated = NULL, $dataXml = NULL, $dataOther = NULL, $effPermissions = NULL, $tags = NULL, $signature = NULL) {
		$this->thingId = ($thingId===NULL) ? NULL : $this->validateThingId($thingId);
		$this->typeId = ($typeId===NULL) ? NULL : $this->validateTypeId($typeId);
		$this->thingState = ($thingState===NULL) ? NULL : $this->validateThingState($thingState);
		$this->flags = ($flags===NULL) ? NULL : $this->validateFlags($flags);
		$this->effDate = ($effDate===NULL) ? NULL : $this->validateEffDate($effDate);
		$this->created = ($created===NULL) ? NULL : $this->validateCreated($created);
		$this->updated = ($updated===NULL) ? NULL : $this->validateUpdated($updated);
		$this->dataXml = ($dataXml===NULL) ? NULL : $this->validateDataXml($dataXml);
		$this->dataOther = ($dataOther===NULL) ? NULL : $this->validateDataOther($dataOther);
		$this->effPermissions = ($effPermissions===NULL) ? NULL : $this->validateEffPermissions($effPermissions);
		$this->tags = ($tags===NULL) ? NULL : $this->validateTags($tags);
		$this->signature = ($signature===NULL) ? NULL : $this->validateSignature($signature);
	}

	public function getThingId($autoCreate = TRUE) {
		if ($this->thingId===NULL && $autoCreate && ! isset($this->_overrides['thingId']) ) {
			$this->thingId = $this->createThingId();
		}
		return $this->thingId;
	}
	
	protected function createThingId() {
		return new \com\microsoft\wc\thing\ThingKey();
	}

	public function setThingId($thingId) {
		$this->thingId = $this->validateThingId($thingId);
	}

	protected function validateThingId($thingId) {
		if ( $thingId === FALSE ) {
			$this->_overrides['thingId'] = TRUE;
			return NULL;
		}

		if ( ! $thingId instanceof \com\microsoft\wc\thing\ThingKey  && ! is_null($thingId) ) {
			$thingId = new \com\microsoft\wc\thing\ThingKey ($thingId);
		}

		unset ($this->_overrides['thingId']);
	
		return $thingId;
	}

	public function getTypeId($autoCreate = TRUE) {
		if ($this->typeId===NULL && $autoCreate && ! isset($this->_overrides['typeId']) ) {
			$this->typeId = $this->createTypeId();
		}
		return $this->typeId;
	}
	
	protected function createTypeId() {
		return new \com\microsoft\wc\thing\ThingType();
	}

	public function setTypeId($typeId) {
		$this->typeId = $this->validateTypeId($typeId);
	}

	protected function validateTypeId($typeId) {
		if ( $typeId === FALSE ) {
			$this->_overrides['typeId'] = TRUE;
			return NULL;
		}

		if ( ! $typeId instanceof \com\microsoft\wc\thing\ThingType  && ! is_null($typeId) ) {
			$typeId = new \com\microsoft\wc\thing\ThingType ($typeId);
		}

		unset ($this->_overrides['typeId']);
	
		return $typeId;
	}

	public function getThingState($autoCreate = TRUE) {
		if ($this->thingState===NULL && $autoCreate && ! isset($this->_overrides['thingState']) ) {
			$this->thingState = $this->createThingState();
		}
		return $this->thingState;
	}
	
	protected function createThingState() {
		return new \com\microsoft\wc\thing\ThingState();
	}

	public function setThingState($thingState) {
		$this->thingState = $this->validateThingState($thingState);
	}

	protected function validateThingState($thingState) {
		if ( $thingState === FALSE ) {
			$this->_overrides['thingState'] = TRUE;
			return NULL;
		}

		if ( ! $thingState instanceof \com\microsoft\wc\thing\ThingState  && ! is_null($thingState) ) {
			$thingState = new \com\microsoft\wc\thing\ThingState ($thingState);
		}

		unset ($this->_overrides['thingState']);
	
		return $thingState;
	}

	public function getFlags($autoCreate = TRUE) {
		if ($this->flags===NULL && $autoCreate && ! isset($this->_overrides['flags']) ) {
			$this->flags = $this->createFlags();
		}
		return $this->flags;
	}
	
	protected function createFlags() {
		return NULL;
	}

	public function setFlags($flags) {
		$this->flags = $this->validateFlags($flags);
	}

	protected function validateFlags($flags) {
		$isValid = FALSE;
		if ( is_integer($flags) ) {
			$isValid = TRUE;
		}
		else if ( is_null($flags) ) {
			$isValid = TRUE;
		}
		else if ( $flags == ($castVar = (integer) $flags) ) {
			$isValid = TRUE;
			$flags = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'flags', 'integer'));
		}
	
		return $flags;
	}

	public function getEffDate($autoCreate = TRUE) {
		if ($this->effDate===NULL && $autoCreate && ! isset($this->_overrides['effDate']) ) {
			$this->effDate = $this->createEffDate();
		}
		return $this->effDate;
	}
	
	protected function createEffDate() {
		return NULL;
	}

	public function setEffDate($effDate) {
		$this->effDate = $this->validateEffDate($effDate);
	}

	protected function validateEffDate($effDate) {
		if ( ! is_string($effDate) && ! is_null($effDate) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'effDate', 'string'));
		}
	
		return $effDate;
	}

	public function getCreated($autoCreate = TRUE) {
		if ($this->created===NULL && $autoCreate && ! isset($this->_overrides['created']) ) {
			$this->created = $this->createCreated();
		}
		return $this->created;
	}
	
	protected function createCreated() {
		return new \com\microsoft\wc\thing\Audit();
	}

	public function setCreated($created) {
		$this->created = $this->validateCreated($created);
	}

	protected function validateCreated($created) {
		if ( $created === FALSE ) {
			$this->_overrides['created'] = TRUE;
			return NULL;
		}

		if ( ! $created instanceof \com\microsoft\wc\thing\Audit  && ! is_null($created) ) {
			$created = new \com\microsoft\wc\thing\Audit ($created);
		}

		unset ($this->_overrides['created']);
	
		return $created;
	}

	public function getUpdated($autoCreate = TRUE) {
		if ($this->updated===NULL && $autoCreate && ! isset($this->_overrides['updated']) ) {
			$this->updated = $this->createUpdated();
		}
		return $this->updated;
	}
	
	protected function createUpdated() {
		return new \com\microsoft\wc\thing\Audit();
	}

	public function setUpdated($updated) {
		$this->updated = $this->validateUpdated($updated);
	}

	protected function validateUpdated($updated) {
		if ( $updated === FALSE ) {
			$this->_overrides['updated'] = TRUE;
			return NULL;
		}

		if ( ! $updated instanceof \com\microsoft\wc\thing\Audit  && ! is_null($updated) ) {
			$updated = new \com\microsoft\wc\thing\Audit ($updated);
		}

		unset ($this->_overrides['updated']);
	
		return $updated;
	}

	public function getDataXml($autoCreate = TRUE) {
		if ($this->dataXml===NULL && $autoCreate && ! isset($this->_overrides['dataXml']) ) {
			$this->dataXml = $this->createDataXml();
		}
		return $this->dataXml;
	}
	
	protected function createDataXml() {
		return array();
	}

	public function setDataXml($dataXml) {
		$this->dataXml = $this->validateDataXml($dataXml);
	}

	protected function validateDataXml($dataXml) {
		if ( $dataXml === FALSE ) {
			$this->_overrides['dataXml'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($dataXml) && ! is_null($dataXml) ) {
			$dataXml = array($dataXml);
		}

		unset ($this->_overrides['dataXml']);
		$count = count($dataXml);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'dataXml', 0));
		}
		if ( ! empty($dataXml) ) {
			foreach ($dataXml as $entry) {
				if (!($entry instanceof \com\microsoft\wc\thing\DataXml )) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'dataXml', 'DataXml'));
				}
			}
		}
	
		return $dataXml;
	}

	public function addDataXml($dataXml) {
		$this->dataXml[] = $dataXml;
	}

	public function getDataOther($autoCreate = TRUE) {
		if ($this->dataOther===NULL && $autoCreate && ! isset($this->_overrides['dataOther']) ) {
			$this->dataOther = $this->createDataOther();
		}
		return $this->dataOther;
	}
	
	protected function createDataOther() {
		return new \com\microsoft\wc\thing\DataOther();
	}

	public function setDataOther($dataOther) {
		$this->dataOther = $this->validateDataOther($dataOther);
	}

	protected function validateDataOther($dataOther) {
		if ( $dataOther === FALSE ) {
			$this->_overrides['dataOther'] = TRUE;
			return NULL;
		}

		if ( ! $dataOther instanceof \com\microsoft\wc\thing\DataOther  && ! is_null($dataOther) ) {
			$dataOther = new \com\microsoft\wc\thing\DataOther ($dataOther);
		}

		unset ($this->_overrides['dataOther']);
	
		return $dataOther;
	}

	public function getEffPermissions($autoCreate = TRUE) {
		if ($this->effPermissions===NULL && $autoCreate && ! isset($this->_overrides['effPermissions']) ) {
			$this->effPermissions = $this->createEffPermissions();
		}
		return $this->effPermissions;
	}
	
	protected function createEffPermissions() {
		return new \com\microsoft\wc\thing\EffectivePermissions();
	}

	public function setEffPermissions($effPermissions) {
		$this->effPermissions = $this->validateEffPermissions($effPermissions);
	}

	protected function validateEffPermissions($effPermissions) {
		if ( $effPermissions === FALSE ) {
			$this->_overrides['effPermissions'] = TRUE;
			return NULL;
		}

		if ( ! $effPermissions instanceof \com\microsoft\wc\thing\EffectivePermissions  && ! is_null($effPermissions) ) {
			$effPermissions = new \com\microsoft\wc\thing\EffectivePermissions ($effPermissions);
		}

		unset ($this->_overrides['effPermissions']);
	
		return $effPermissions;
	}

	public function getTags($autoCreate = TRUE) {
		if ($this->tags===NULL && $autoCreate && ! isset($this->_overrides['tags']) ) {
			$this->tags = $this->createTags();
		}
		return $this->tags;
	}
	
	protected function createTags() {
		return new \com\microsoft\wc\types\String512();
	}

	public function setTags($tags) {
		$this->tags = $this->validateTags($tags);
	}

	protected function validateTags($tags) {
		if ( $tags === FALSE ) {
			$this->_overrides['tags'] = TRUE;
			return NULL;
		}

		if ( ! $tags instanceof \com\microsoft\wc\types\String512  && ! is_null($tags) ) {
			$tags = new \com\microsoft\wc\types\String512 ($tags);
		}

		unset ($this->_overrides['tags']);
	
		return $tags;
	}

	public function getSignature($autoCreate = TRUE) {
		if ($this->signature===NULL && $autoCreate && ! isset($this->_overrides['signature']) ) {
			$this->signature = $this->createSignature();
		}
		return $this->signature;
	}
	
	protected function createSignature() {
		return NULL;
	}

	public function setSignature($signature) {
		$this->signature = $this->validateSignature($signature);
	}

	protected function validateSignature($signature) {
		if ( ! is_Signature($signature) && ! is_null($signature) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'signature', 'Signature'));
		}
	
		return $signature;
	}
} // end class Thing
