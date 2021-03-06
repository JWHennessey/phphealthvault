<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="MarkData")
 */
class MarkData {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlText	(type="float", name="Percentage")
	 */
	protected $percentage;

	/**
	 * @XmlText	(type="integer", name="Numeric")
	 */
	protected $numeric;

	/**
	 * @XmlText	(type="float", name="NumericAsDecimal")
	 */
	protected $numericAsDecimal;

	/**
	 * @XmlText	(type="string", name="Letter")
	 */
	protected $letter;

	/**
	 * @XmlText	(type="string", name="Narrative")
	 */
	protected $narrative;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\SIFExtendedElementsType", name="SIF_ExtendedElements")
	 */
	protected $sifExtendedElements;

	/**
	 * @XmlAttribute	(type="string", name="MarkValueInfoDataRefId")
	 */
	protected $markValueInfoDataRefId;

	public function __construct($percentage = NULL, $numeric = NULL, $numericAsDecimal = NULL, $letter = NULL, $narrative = NULL, $sifExtendedElements = NULL, $markValueInfoDataRefId = NULL) {
		$this->percentage = ($percentage===NULL) ? NULL : $this->validatePercentage($percentage);
		$this->numeric = ($numeric===NULL) ? NULL : $this->validateNumeric($numeric);
		$this->numericAsDecimal = ($numericAsDecimal===NULL) ? NULL : $this->validateNumericAsDecimal($numericAsDecimal);
		$this->letter = ($letter===NULL) ? NULL : $this->validateLetter($letter);
		$this->narrative = ($narrative===NULL) ? NULL : $this->validateNarrative($narrative);
		$this->sifExtendedElements = ($sifExtendedElements===NULL) ? NULL : $this->validateSifExtendedElements($sifExtendedElements);
		$this->markValueInfoDataRefId = ($markValueInfoDataRefId===NULL) ? NULL : $this->validateMarkValueInfoDataRefId($markValueInfoDataRefId);
	}

	public function getPercentage($autoCreate = TRUE) {
		if ($this->percentage===NULL && $autoCreate && ! isset($this->_overrides['percentage']) ) {
			$this->percentage = $this->createPercentage();
		}
		return $this->percentage;
	}
	
	protected function createPercentage() {
		return NULL;
	}

	public function setPercentage($percentage) {
		$this->percentage = $this->validatePercentage($percentage);
	}

	protected function validatePercentage($percentage) {
		$isValid = FALSE;
		if ( is_float($percentage) ) {
			$isValid = TRUE;
		}
		else if ( is_null($percentage) ) {
			$isValid = TRUE;
		}
		else if ( $percentage == ($castVar = (float) $percentage) ) {
			$isValid = TRUE;
			$percentage = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'percentage', 'float'));
		}
	
		return $percentage;
	}

	public function getNumeric($autoCreate = TRUE) {
		if ($this->numeric===NULL && $autoCreate && ! isset($this->_overrides['numeric']) ) {
			$this->numeric = $this->createNumeric();
		}
		return $this->numeric;
	}
	
	protected function createNumeric() {
		return NULL;
	}

	public function setNumeric($numeric) {
		$this->numeric = $this->validateNumeric($numeric);
	}

	protected function validateNumeric($numeric) {
		$isValid = FALSE;
		if ( is_integer($numeric) ) {
			$isValid = TRUE;
		}
		else if ( is_null($numeric) ) {
			$isValid = TRUE;
		}
		else if ( $numeric == ($castVar = (integer) $numeric) ) {
			$isValid = TRUE;
			$numeric = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'numeric', 'integer'));
		}
	
		return $numeric;
	}

	public function getNumericAsDecimal($autoCreate = TRUE) {
		if ($this->numericAsDecimal===NULL && $autoCreate && ! isset($this->_overrides['numericAsDecimal']) ) {
			$this->numericAsDecimal = $this->createNumericAsDecimal();
		}
		return $this->numericAsDecimal;
	}
	
	protected function createNumericAsDecimal() {
		return NULL;
	}

	public function setNumericAsDecimal($numericAsDecimal) {
		$this->numericAsDecimal = $this->validateNumericAsDecimal($numericAsDecimal);
	}

	protected function validateNumericAsDecimal($numericAsDecimal) {
		$isValid = FALSE;
		if ( is_float($numericAsDecimal) ) {
			$isValid = TRUE;
		}
		else if ( is_null($numericAsDecimal) ) {
			$isValid = TRUE;
		}
		else if ( $numericAsDecimal == ($castVar = (float) $numericAsDecimal) ) {
			$isValid = TRUE;
			$numericAsDecimal = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'numericAsDecimal', 'float'));
		}
	
		return $numericAsDecimal;
	}

	public function getLetter($autoCreate = TRUE) {
		if ($this->letter===NULL && $autoCreate && ! isset($this->_overrides['letter']) ) {
			$this->letter = $this->createLetter();
		}
		return $this->letter;
	}
	
	protected function createLetter() {
		return NULL;
	}

	public function setLetter($letter) {
		$this->letter = $this->validateLetter($letter);
	}

	protected function validateLetter($letter) {
		if ( ! is_string($letter) && ! is_null($letter) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'letter', 'string'));
		}
	
		return $letter;
	}

	public function getNarrative($autoCreate = TRUE) {
		if ($this->narrative===NULL && $autoCreate && ! isset($this->_overrides['narrative']) ) {
			$this->narrative = $this->createNarrative();
		}
		return $this->narrative;
	}
	
	protected function createNarrative() {
		return '';
	}

	public function setNarrative($narrative) {
		$this->narrative = $this->validateNarrative($narrative);
	}

	protected function validateNarrative($narrative) {
		if ( ! is_string($narrative) && ! is_null($narrative) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'narrative', 'string'));
		}
	
		return $narrative;
	}

	public function getSifExtendedElements($autoCreate = TRUE) {
		if ($this->sifExtendedElements===NULL && $autoCreate && ! isset($this->_overrides['sifExtendedElements']) ) {
			$this->sifExtendedElements = $this->createSifExtendedElements();
		}
		return $this->sifExtendedElements;
	}
	
	protected function createSifExtendedElements() {
		return new \org\sifinfo\www\infrastructure\_2_x\SIFExtendedElementsType();
	}

	public function setSifExtendedElements($sifExtendedElements) {
		$this->sifExtendedElements = $this->validateSifExtendedElements($sifExtendedElements);
	}

	protected function validateSifExtendedElements($sifExtendedElements) {
		if ( $sifExtendedElements === FALSE ) {
			$this->_overrides['sifExtendedElements'] = TRUE;
			return NULL;
		}

		if ( ! $sifExtendedElements instanceof \org\sifinfo\www\infrastructure\_2_x\SIFExtendedElementsType  && ! is_null($sifExtendedElements) ) {
			$sifExtendedElements = new \org\sifinfo\www\infrastructure\_2_x\SIFExtendedElementsType ($sifExtendedElements);
		}

		unset ($this->_overrides['sifExtendedElements']);
	
		return $sifExtendedElements;
	}

	public function getMarkValueInfoDataRefId($autoCreate = TRUE) {
		if ($this->markValueInfoDataRefId===NULL && $autoCreate && ! isset($this->_overrides['markValueInfoDataRefId']) ) {
			$this->markValueInfoDataRefId = $this->createMarkValueInfoDataRefId();
		}
		return $this->markValueInfoDataRefId;
	}
	
	protected function createMarkValueInfoDataRefId() {
		return NULL;
	}

	public function setMarkValueInfoDataRefId($markValueInfoDataRefId) {
		$this->markValueInfoDataRefId = $this->validateMarkValueInfoDataRefId($markValueInfoDataRefId);
	}

	protected function validateMarkValueInfoDataRefId($markValueInfoDataRefId) {
	
		return $markValueInfoDataRefId;
	}
} // end class MarkData
