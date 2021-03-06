<?php
namespace com\microsoft\wc\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.types", prefix="t")
 * })
 * @XmlRootEntity	(xml="string3nw")
 */
class String3nw {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlValue	(type="string", name="string3nw")
	 */
	protected $value;

	public function __construct($value = NULL) {
		$this->value = ($value===NULL) ? NULL : $this->validateValue($value);
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

		if (strlen($value) < 1) {
			throw new \Exception(sprintf('Supplied %s value was shorter than the minimum (%d)', 'string3nw', 1));
		}

		if (strlen($value) > 3) {
			throw new \Exception(sprintf('Supplied %s value was longer than the maximum (%d)', 'string3nw', 3));
		}

		if (!preg_match('/^(\s*[^\s]+\s*)+$/', $value)) {
			throw new \Exception(sprintf('Supplied %s value did not match the right pattern.', 'string3nw', '(\s*[^\s]+\s*)+'));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class String3nw
