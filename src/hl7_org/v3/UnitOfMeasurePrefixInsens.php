<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlRootEntity	(xml="UnitOfMeasurePrefixInsens")
 */
class UnitOfMeasurePrefixInsens {
	/**
	 */
	static protected $enumValue = array('A' => 'A', 'C' => 'C', 'D' => 'D', 'DA' => 'DA', 'EX' => 'EX', 'F' => 'F', 'GIB' => 'GIB', 'GA' => 'GA', 'H' => 'H', 'KIB' => 'KIB', 'K' => 'K', 'MIB' => 'MIB', 'MA' => 'MA', 'U' => 'U', 'M' => 'M', 'N' => 'N', 'PT' => 'PT', 'P' => 'P', 'TIB' => 'TIB', 'TR' => 'TR', 'YO' => 'YO', 'YA' => 'YA', 'ZO' => 'ZO', 'ZA' => 'ZA');

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\hl7_org\v3\Cs", name="value")
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
		return new \hl7_org\v3\CS();
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if ( ! $value instanceof \hl7_org\v3\CS ) {
			$value = new \hl7_org\v3\CS ($value);
		}

		if (empty(static::$enumValue[$value])) {
			throw new \Exception(sprintf('Supplied %s value (%s) was not a valid enumerated value.', 'UnitOfMeasurePrefixInsens', $value));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class UnitOfMeasurePrefixInsens
