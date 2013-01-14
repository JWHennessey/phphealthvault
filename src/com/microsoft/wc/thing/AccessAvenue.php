<?php
namespace com\microsoft\wc\thing;



/**
 * @XmlRootEntity	(xml="AccessAvenue")
 */
class AccessAvenue {
	/**
	 */
	static protected $enumValue = array('Online' => 'Indicates that online access avenue was used to perform the operation on the thing.', 'Offline' => 'Indicates that offline access avenue was used to perform the operation on the thing.');

	/**
	 * @XmlValue	(type="string", name="AccessAvenue")
	 */
	protected $value;

	public function __construct($value = NULL) {
		$this->value = ($value===NULL) ? NULL : $this->validateValue($value);
	}

	public function getValue() {
		if ($this->value===NULL) {
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

		if (empty(static::$enumValue[$value])) {
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'AccessAvenue', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class AccessAvenue