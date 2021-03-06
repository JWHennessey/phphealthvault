<?php
namespace com\microsoft\wc\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.types", prefix="t")
 * })
 * @XmlEntity	(xml="coded-value")
 */
class CodedValue {
	/**
	 * Defines a value which has been coded in a Microsoft Health Vocabulary.
	 * Microsoft HealthVault provides a set of vocabularies containing common health and fitness terms and codes. Vocabularies are identified by their family, type, and version and contain values which identify an entry in that vocabulary by code. For example, a prescription vocabulary may be identified by the family 'NCPDP', type 'SCRIPT', and version '1.0' and contain a code of 10 which identifies a 'tablet' form of medication.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlText	(type="string", name="value")
	 */
	protected $value;

	/**
	 * @XmlText	(type="string", name="family")
	 */
	protected $family;

	/**
	 * @XmlText	(type="string", name="type")
	 */
	protected $type;

	/**
	 * @XmlText	(type="string", name="version")
	 */
	protected $version;

	public function __construct($value = NULL, $family = NULL, $type = NULL, $version = NULL) {
		$this->value = ($value===NULL) ? NULL : $this->validateValue($value);
		$this->family = ($family===NULL) ? NULL : $this->validateFamily($family);
		$this->type = ($type===NULL) ? NULL : $this->validateType($type);
		$this->version = ($version===NULL) ? NULL : $this->validateVersion($version);
	}

	public function getValue($autoCreate = TRUE) {
		if ($this->value===NULL && $autoCreate && ! isset($this->_overrides['value']) ) {
			$this->value = $this->createValue();
		}
		return $this->value;
	}
	
	protected function createValue() {
		return '';
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if (!is_string($value)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'value', 'string'));
		}
	
		return $value;
	}

	public function getFamily($autoCreate = TRUE) {
		if ($this->family===NULL && $autoCreate && ! isset($this->_overrides['family']) ) {
			$this->family = $this->createFamily();
		}
		return $this->family;
	}
	
	protected function createFamily() {
		return '';
	}

	public function setFamily($family) {
		$this->family = $this->validateFamily($family);
	}

	protected function validateFamily($family) {
		if ( ! is_string($family) && ! is_null($family) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'family', 'string'));
		}
	
		return $family;
	}

	public function getType($autoCreate = TRUE) {
		if ($this->type===NULL && $autoCreate && ! isset($this->_overrides['type']) ) {
			$this->type = $this->createType();
		}
		return $this->type;
	}
	
	protected function createType() {
		return '';
	}

	public function setType($type) {
		$this->type = $this->validateType($type);
	}

	protected function validateType($type) {
		if (!is_string($type)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'type', 'string'));
		}
	
		return $type;
	}

	public function getVersion($autoCreate = TRUE) {
		if ($this->version===NULL && $autoCreate && ! isset($this->_overrides['version']) ) {
			$this->version = $this->createVersion();
		}
		return $this->version;
	}
	
	protected function createVersion() {
		return '';
	}

	public function setVersion($version) {
		$this->version = $this->validateVersion($version);
	}

	protected function validateVersion($version) {
		if ( ! is_string($version) && ! is_null($version) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'version', 'string'));
		}
	
		return $version;
	}
} // end class CodedValue
