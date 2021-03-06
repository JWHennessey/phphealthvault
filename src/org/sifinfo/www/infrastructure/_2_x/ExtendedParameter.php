<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="ExtendedParameter")
 */
class ExtendedParameter {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlText	(type="string", name="SIF_Name")
	 */
	protected $sifName;

	/**
	 * @XmlText	(type="string", name="SIF_Value")
	 */
	protected $sifValue;

	public function __construct($sifName = NULL, $sifValue = NULL) {
		$this->sifName = ($sifName===NULL) ? NULL : $this->validateSifName($sifName);
		$this->sifValue = ($sifValue===NULL) ? NULL : $this->validateSifValue($sifValue);
	}

	public function getSifName($autoCreate = TRUE) {
		if ($this->sifName===NULL && $autoCreate && ! isset($this->_overrides['sifName']) ) {
			$this->sifName = $this->createSifName();
		}
		return $this->sifName;
	}
	
	protected function createSifName() {
		return NULL;
	}

	public function setSifName($sifName) {
		$this->sifName = $this->validateSifName($sifName);
	}

	protected function validateSifName($sifName) {
		if (!is_string($sifName)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'sifName', 'string'));
		}
	
		return $sifName;
	}

	public function getSifValue($autoCreate = TRUE) {
		if ($this->sifValue===NULL && $autoCreate && ! isset($this->_overrides['sifValue']) ) {
			$this->sifValue = $this->createSifValue();
		}
		return $this->sifValue;
	}
	
	protected function createSifValue() {
		return NULL;
	}

	public function setSifValue($sifValue) {
		$this->sifValue = $this->validateSifValue($sifValue);
	}

	protected function validateSifValue($sifValue) {
		if (!is_string($sifValue)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'sifValue', 'string'));
		}
	
		return $sifValue;
	}
} // end class ExtendedParameter
