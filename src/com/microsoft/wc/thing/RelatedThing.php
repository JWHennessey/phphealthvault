<?php
namespace com\microsoft\wc\thing;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing", prefix="wc-thing")
 * })
 * @XmlEntity	(xml="RelatedThing")
 */
class RelatedThing {
	/**
	 * Defines a loose relationship between instances of things within a record.
	 * This relationship is completely application defined and maintained. HealthVault does nothing to ensure that related things exist or have a relationship back to this thing. An example usage for related-things are to use an annotation thing instance to make medical annotations for another thing type or to relate a file instance (like an MRI) to problem instance.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="thing-id")
	 */
	protected $thingId;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="version-stamp")
	 */
	protected $versionStamp;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String255", name="client-thing-id")
	 */
	protected $clientThingId;

	/**
	 * @XmlText	(type="string", name="relationship-type")
	 */
	protected $relationshipType;

	public function __construct($thingId = NULL, $versionStamp = NULL, $clientThingId = NULL, $relationshipType = NULL) {
		$this->thingId = ($thingId===NULL) ? NULL : $this->validateThingId($thingId);
		$this->versionStamp = ($versionStamp===NULL) ? NULL : $this->validateVersionStamp($versionStamp);
		$this->clientThingId = ($clientThingId===NULL) ? NULL : $this->validateClientThingId($clientThingId);
		$this->relationshipType = ($relationshipType===NULL) ? NULL : $this->validateRelationshipType($relationshipType);
	}

	public function getThingId($autoCreate = TRUE) {
		if ($this->thingId===NULL && $autoCreate && ! isset($this->_overrides['thingId']) ) {
			$this->thingId = $this->createThingId();
		}
		return $this->thingId;
	}
	
	protected function createThingId() {
		return new \com\microsoft\wc\types\Guid();
	}

	public function setThingId($thingId) {
		$this->thingId = $this->validateThingId($thingId);
	}

	protected function validateThingId($thingId) {
		if ( ! $thingId instanceof \com\microsoft\wc\types\Guid ) {
			$thingId = new \com\microsoft\wc\types\Guid ($thingId);
		}
	
		return $thingId;
	}

	public function getVersionStamp($autoCreate = TRUE) {
		if ($this->versionStamp===NULL && $autoCreate && ! isset($this->_overrides['versionStamp']) ) {
			$this->versionStamp = $this->createVersionStamp();
		}
		return $this->versionStamp;
	}
	
	protected function createVersionStamp() {
		return new \com\microsoft\wc\types\Guid();
	}

	public function setVersionStamp($versionStamp) {
		$this->versionStamp = $this->validateVersionStamp($versionStamp);
	}

	protected function validateVersionStamp($versionStamp) {
		if ( $versionStamp === FALSE ) {
			$this->_overrides['versionStamp'] = TRUE;
			return NULL;
		}

		if ( ! $versionStamp instanceof \com\microsoft\wc\types\Guid  && ! is_null($versionStamp) ) {
			$versionStamp = new \com\microsoft\wc\types\Guid ($versionStamp);
		}

		unset ($this->_overrides['versionStamp']);
	
		return $versionStamp;
	}

	public function getClientThingId($autoCreate = TRUE) {
		if ($this->clientThingId===NULL && $autoCreate && ! isset($this->_overrides['clientThingId']) ) {
			$this->clientThingId = $this->createClientThingId();
		}
		return $this->clientThingId;
	}
	
	protected function createClientThingId() {
		return new \com\microsoft\wc\types\String255();
	}

	public function setClientThingId($clientThingId) {
		$this->clientThingId = $this->validateClientThingId($clientThingId);
	}

	protected function validateClientThingId($clientThingId) {
		if ( $clientThingId === FALSE ) {
			$this->_overrides['clientThingId'] = TRUE;
			return NULL;
		}

		if ( ! $clientThingId instanceof \com\microsoft\wc\types\String255  && ! is_null($clientThingId) ) {
			$clientThingId = new \com\microsoft\wc\types\String255 ($clientThingId);
		}

		unset ($this->_overrides['clientThingId']);
	
		return $clientThingId;
	}

	public function getRelationshipType($autoCreate = TRUE) {
		if ($this->relationshipType===NULL && $autoCreate && ! isset($this->_overrides['relationshipType']) ) {
			$this->relationshipType = $this->createRelationshipType();
		}
		return $this->relationshipType;
	}
	
	protected function createRelationshipType() {
		return '';
	}

	public function setRelationshipType($relationshipType) {
		$this->relationshipType = $this->validateRelationshipType($relationshipType);
	}

	protected function validateRelationshipType($relationshipType) {
		if ( ! is_string($relationshipType) && ! is_null($relationshipType) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'relationshipType', 'string'));
		}
	
		return $relationshipType;
	}
} // end class RelatedThing
