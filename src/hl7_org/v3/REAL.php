<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="REAL")
 */
class REAL extends \org\w3\www\_2001\XMLSchema\QTY {
	/**
	 * Fractional numbers. Typically used whenever quantitiesare measured, estimated, or computed from other realnumbers. The typical representation is decimal, wherethe number of significant decimal digits is known as theprecision. Real numbers are needed beyond integerswhenever quantities of the real world are measured,estimated, or computed from other real numbers. The term"Real number" in this specification is used to meanthat fractional values are covered without necessarilyimplying the full set of the mathematical real numbers.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlAttribute	(type="string", name="value")
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
		return NULL;
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
	
		return $value;
	}
} // end class REAL
