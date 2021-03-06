<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="LearningObjectives")
 */
class LearningObjectives {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlText	(type="string", collection="true", name="LearningObjective")
	 */
	protected $learningObjective;

	public function __construct($learningObjective = NULL) {
		$this->learningObjective = ($learningObjective===NULL) ? NULL : $this->validateLearningObjective($learningObjective);
	}

	public function getLearningObjective($autoCreate = TRUE) {
		if ($this->learningObjective===NULL && $autoCreate && ! isset($this->_overrides['learningObjective']) ) {
			$this->learningObjective = $this->createLearningObjective();
		}
		return $this->learningObjective;
	}
	
	protected function createLearningObjective() {
		return array();
	}

	public function setLearningObjective($learningObjective) {
		$this->learningObjective = $this->validateLearningObjective($learningObjective);
	}

	protected function validateLearningObjective($learningObjective) {
		$count = count($learningObjective);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'learningObjective', 1));
		}
		foreach ($learningObjective as $entry) {
			if (!is_string($entry)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'learningObjective', 'string'));
			}
		}
	
		return $learningObjective;
	}

	public function addLearningObjective($learningObjective) {
		$this->learningObjective[] = $this->validateLearningObjectiveType($learningObjective);
	}

	protected function validateLearningObjectiveType($learningObjective) {
		if (!is_string($learningObjective)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'learningObjective', 'string'));
		}
	
		return $learningObjective;
	}
} // end class LearningObjectives
