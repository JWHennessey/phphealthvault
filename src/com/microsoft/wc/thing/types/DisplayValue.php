<?php
namespace com\microsoft\wc\thing\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.types", prefix="urn:com.microsoft.wc.thing.types")
 * })
 * @XmlEntity	(xml="display-value")
 */
class DisplayValue {
	/**
	 * DisplayValue
	 * A numeric value used for display purposesand tagged with arbitrary units.
	 * Microsoft HealthVault standardizes its storageof data like length, weight, and temperature so thatapplications can process the data more easily. So,in order to support the user's preference of unitsthe display value type is used to maintain the userentered value such that any application can displaythe value back to the user in the same form theyentered it even though the data is stored in a baseunit value. This prevents rounding errors on thedata when converting to and from the base unit ofmeasure.The display value should be set whenever data is takendirectly from the user through UI and it should beused to show data to the user when available.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlValue	(type="float", name="display-value")
	 */
	protected $value;

	/**
	 * @XmlAttribute	(type="string", name="units")
	 */
	protected $units;

	/**
	 * @XmlAttribute	(type="string", name="units-code")
	 */
	protected $unitsCode;

	/**
	 * @XmlAttribute	(type="string", name="text")
	 */
	protected $text;

	public function __construct($value = NULL, $units = NULL, $unitsCode = NULL, $text = NULL) {
		$this->value = ($value===NULL) ? NULL : $this->validateValue($value);
		$this->units = ($units===NULL) ? NULL : $this->validateUnits($units);
		$this->unitsCode = ($unitsCode===NULL) ? NULL : $this->validateUnitsCode($unitsCode);
		$this->text = ($text===NULL) ? NULL : $this->validateText($text);
	}

	public function getValue($autoCreate = TRUE) {
		if ($this->value===NULL && $autoCreate && ! isset($this->_overrides['value']) ) {
			$this->value = $this->createValue();
		}
		return $this->value;
	}
	
	protected function createValue() {
		return 0.0;
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		$isValid = FALSE;
		if ( is_float($value) ) {
			$isValid = TRUE;
		}
		else if ( $value == ($castVar = (float) $value) ) {
			$isValid = TRUE;
			$value = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'value', 'float'));
		}
	
		return $value;
	}

	public function getUnits($autoCreate = TRUE) {
		if ($this->units===NULL && $autoCreate && ! isset($this->_overrides['units']) ) {
			$this->units = $this->createUnits();
		}
		return $this->units;
	}
	
	protected function createUnits() {
		return '';
	}

	public function setUnits($units) {
		$this->units = $this->validateUnits($units);
	}

	protected function validateUnits($units) {
		if (!is_string($units)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'units', 'string'));
		}
	
		return $units;
	}

	public function getUnitsCode($autoCreate = TRUE) {
		if ($this->unitsCode===NULL && $autoCreate && ! isset($this->_overrides['unitsCode']) ) {
			$this->unitsCode = $this->createUnitsCode();
		}
		return $this->unitsCode;
	}
	
	protected function createUnitsCode() {
		return '';
	}

	public function setUnitsCode($unitsCode) {
		$this->unitsCode = $this->validateUnitsCode($unitsCode);
	}

	protected function validateUnitsCode($unitsCode) {
		if ( ! is_string($unitsCode) && ! is_null($unitsCode) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'unitsCode', 'string'));
		}
	
		return $unitsCode;
	}

	public function getText($autoCreate = TRUE) {
		if ($this->text===NULL && $autoCreate && ! isset($this->_overrides['text']) ) {
			$this->text = $this->createText();
		}
		return $this->text;
	}
	
	protected function createText() {
		return '';
	}

	public function setText($text) {
		$this->text = $this->validateText($text);
	}

	protected function validateText($text) {
		if ( ! is_string($text) && ! is_null($text) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'text', 'string'));
		}
	
		return $text;
	}
} // end class DisplayValue
