<?php
namespace com\microsoft\wc\subscription;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.subscription", prefix="wc-subscription")
 * })
 * @XmlEntity	(xml="TypeIds")
 */
class TypeIds {
	/**
	 * A collection of thing type ids in HealthVault.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", collection="true", name="type-id")
	 */
	protected $typeId;

	public function __construct($typeId = NULL) {
		$this->typeId = ($typeId===NULL) ? NULL : $this->validateTypeId($typeId);
	}

	public function getTypeId($autoCreate = TRUE) {
		if ($this->typeId===NULL && $autoCreate && ! isset($this->_overrides['typeId']) ) {
			$this->typeId = $this->createTypeId();
		}
		return $this->typeId;
	}
	
	protected function createTypeId() {
		return array();
	}

	public function setTypeId($typeId) {
		$this->typeId = $this->validateTypeId($typeId);
	}

	protected function validateTypeId($typeId) {
		if ( ! is_array ($typeId) ) {
			$typeId = array($typeId);
		}
		$count = count($typeId);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'typeId', 1));
		}
		foreach ($typeId as $entry) {
			if (!($entry instanceof \com\microsoft\wc\types\Guid )) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'typeId', 'guid'));
			}
		}
	
		return $typeId;
	}

	public function addTypeId($typeId) {
		$this->typeId[] = $typeId;
	}
} // end class TypeIds
