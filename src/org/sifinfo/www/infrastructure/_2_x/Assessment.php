<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="Assessment")
 */
class Assessment {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlText	(type="string", name="Name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\PartialDateType", name="AdministrationDate")
	 */
	protected $administrationDate;

	/**
	 * @XmlText	(type="string", name="Form")
	 */
	protected $form;

	/**
	 * @XmlText	(type="string", name="Level")
	 */
	protected $level;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\GradeLevelType", name="StudentGradeLevelWhenAssessed")
	 */
	protected $studentGradeLevelWhenAssessed;

	/**
	 * @XmlText	(type="string", name="SubtestCategory")
	 */
	protected $subtestCategory;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\NCES0056AssessmentReportingMethodType", name="TestScoreType")
	 */
	protected $testScoreType;

	/**
	 * @XmlText	(type="string", name="TestScore")
	 */
	protected $testScore;

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\SIFExtendedElementsType", name="SIF_ExtendedElements")
	 */
	protected $sifExtendedElements;

	public function __construct($name = NULL, $administrationDate = NULL, $form = NULL, $level = NULL, $studentGradeLevelWhenAssessed = NULL, $subtestCategory = NULL, $testScoreType = NULL, $testScore = NULL, $sifExtendedElements = NULL) {
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->administrationDate = ($administrationDate===NULL) ? NULL : $this->validateAdministrationDate($administrationDate);
		$this->form = ($form===NULL) ? NULL : $this->validateForm($form);
		$this->level = ($level===NULL) ? NULL : $this->validateLevel($level);
		$this->studentGradeLevelWhenAssessed = ($studentGradeLevelWhenAssessed===NULL) ? NULL : $this->validateStudentGradeLevelWhenAssessed($studentGradeLevelWhenAssessed);
		$this->subtestCategory = ($subtestCategory===NULL) ? NULL : $this->validateSubtestCategory($subtestCategory);
		$this->testScoreType = ($testScoreType===NULL) ? NULL : $this->validateTestScoreType($testScoreType);
		$this->testScore = ($testScore===NULL) ? NULL : $this->validateTestScore($testScore);
		$this->sifExtendedElements = ($sifExtendedElements===NULL) ? NULL : $this->validateSifExtendedElements($sifExtendedElements);
	}

	public function getName($autoCreate = TRUE) {
		if ($this->name===NULL && $autoCreate && ! isset($this->_overrides['name']) ) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return NULL;
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if (!is_string($name)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'name', 'string'));
		}
	
		return $name;
	}

	public function getAdministrationDate($autoCreate = TRUE) {
		if ($this->administrationDate===NULL && $autoCreate && ! isset($this->_overrides['administrationDate']) ) {
			$this->administrationDate = $this->createAdministrationDate();
		}
		return $this->administrationDate;
	}
	
	protected function createAdministrationDate() {
		return NULL;
	}

	public function setAdministrationDate($administrationDate) {
		$this->administrationDate = $this->validateAdministrationDate($administrationDate);
	}

	protected function validateAdministrationDate($administrationDate) {
	
		return $administrationDate;
	}

	public function getForm($autoCreate = TRUE) {
		if ($this->form===NULL && $autoCreate && ! isset($this->_overrides['form']) ) {
			$this->form = $this->createForm();
		}
		return $this->form;
	}
	
	protected function createForm() {
		return NULL;
	}

	public function setForm($form) {
		$this->form = $this->validateForm($form);
	}

	protected function validateForm($form) {
		if ( ! is_string($form) && ! is_null($form) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'form', 'string'));
		}
	
		return $form;
	}

	public function getLevel($autoCreate = TRUE) {
		if ($this->level===NULL && $autoCreate && ! isset($this->_overrides['level']) ) {
			$this->level = $this->createLevel();
		}
		return $this->level;
	}
	
	protected function createLevel() {
		return '';
	}

	public function setLevel($level) {
		$this->level = $this->validateLevel($level);
	}

	protected function validateLevel($level) {
		if ( ! is_string($level) && ! is_null($level) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'level', 'string'));
		}
	
		return $level;
	}

	public function getStudentGradeLevelWhenAssessed($autoCreate = TRUE) {
		if ($this->studentGradeLevelWhenAssessed===NULL && $autoCreate && ! isset($this->_overrides['studentGradeLevelWhenAssessed']) ) {
			$this->studentGradeLevelWhenAssessed = $this->createStudentGradeLevelWhenAssessed();
		}
		return $this->studentGradeLevelWhenAssessed;
	}
	
	protected function createStudentGradeLevelWhenAssessed() {
		return new \org\sifinfo\www\infrastructure\_2_x\GradeLevelType();
	}

	public function setStudentGradeLevelWhenAssessed($studentGradeLevelWhenAssessed) {
		$this->studentGradeLevelWhenAssessed = $this->validateStudentGradeLevelWhenAssessed($studentGradeLevelWhenAssessed);
	}

	protected function validateStudentGradeLevelWhenAssessed($studentGradeLevelWhenAssessed) {
		if ( $studentGradeLevelWhenAssessed === FALSE ) {
			$this->_overrides['studentGradeLevelWhenAssessed'] = TRUE;
			return NULL;
		}

		if ( ! $studentGradeLevelWhenAssessed instanceof \org\sifinfo\www\infrastructure\_2_x\GradeLevelType  && ! is_null($studentGradeLevelWhenAssessed) ) {
			$studentGradeLevelWhenAssessed = new \org\sifinfo\www\infrastructure\_2_x\GradeLevelType ($studentGradeLevelWhenAssessed);
		}

		unset ($this->_overrides['studentGradeLevelWhenAssessed']);
	
		return $studentGradeLevelWhenAssessed;
	}

	public function getSubtestCategory($autoCreate = TRUE) {
		if ($this->subtestCategory===NULL && $autoCreate && ! isset($this->_overrides['subtestCategory']) ) {
			$this->subtestCategory = $this->createSubtestCategory();
		}
		return $this->subtestCategory;
	}
	
	protected function createSubtestCategory() {
		return NULL;
	}

	public function setSubtestCategory($subtestCategory) {
		$this->subtestCategory = $this->validateSubtestCategory($subtestCategory);
	}

	protected function validateSubtestCategory($subtestCategory) {
		if ( ! is_string($subtestCategory) && ! is_null($subtestCategory) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'subtestCategory', 'string'));
		}
	
		return $subtestCategory;
	}

	public function getTestScoreType($autoCreate = TRUE) {
		if ($this->testScoreType===NULL && $autoCreate && ! isset($this->_overrides['testScoreType']) ) {
			$this->testScoreType = $this->createTestScoreType();
		}
		return $this->testScoreType;
	}
	
	protected function createTestScoreType() {
		return NULL;
	}

	public function setTestScoreType($testScoreType) {
		$this->testScoreType = $this->validateTestScoreType($testScoreType);
	}

	protected function validateTestScoreType($testScoreType) {
	
		return $testScoreType;
	}

	public function getTestScore($autoCreate = TRUE) {
		if ($this->testScore===NULL && $autoCreate && ! isset($this->_overrides['testScore']) ) {
			$this->testScore = $this->createTestScore();
		}
		return $this->testScore;
	}
	
	protected function createTestScore() {
		return NULL;
	}

	public function setTestScore($testScore) {
		$this->testScore = $this->validateTestScore($testScore);
	}

	protected function validateTestScore($testScore) {
		if ( ! is_string($testScore) && ! is_null($testScore) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'testScore', 'string'));
		}
	
		return $testScore;
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
} // end class Assessment
