<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="GradeLevelsType")
 */
class GradeLevelsType {
	/**
	 * This is a common element used to specify a collection of grade levels supported. It is used in SchoolInfo andassessment-related objects.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\GradeLevel", collection="true", name="GradeLevel")
	 */
	protected $gradeLevel;

	public function __construct($gradeLevel = NULL) {
		$this->gradeLevel = ($gradeLevel===NULL) ? NULL : $this->validateGradeLevel($gradeLevel);
	}

	public function getGradeLevel($autoCreate = TRUE) {
		if ($this->gradeLevel===NULL && $autoCreate && ! isset($this->_overrides['gradeLevel']) ) {
			$this->gradeLevel = $this->createGradeLevel();
		}
		return $this->gradeLevel;
	}
	
	protected function createGradeLevel() {
		return array();
	}

	public function setGradeLevel($gradeLevel) {
		$this->gradeLevel = $this->validateGradeLevel($gradeLevel);
	}

	protected function validateGradeLevel($gradeLevel) {
		$count = count($gradeLevel);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'gradeLevel', 1));
		}
		foreach ($gradeLevel as $entry) {
			if (!is_GradeLevel($entry)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'gradeLevel', 'GradeLevel'));
			}
		}
	
		return $gradeLevel;
	}

	public function addGradeLevel($gradeLevel) {
		$this->gradeLevel[] = $this->validateGradeLevelType($gradeLevel);
	}

	protected function validateGradeLevelType($gradeLevel) {
		if (!is_GradeLevel($gradeLevel)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'gradeLevel', 'GradeLevel'));
		}
	
		return $gradeLevel;
	}
} // end class GradeLevelsType
