<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="LearningStandardItems")
 */
class LearningStandardItems {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\IdRefType", collection="true", name="LearningStandardItemRefId")
	 */
	protected $learningStandardItemRefId;

	public function __construct($learningStandardItemRefId = NULL) {
		$this->learningStandardItemRefId = ($learningStandardItemRefId===NULL) ? NULL : $this->validateLearningStandardItemRefId($learningStandardItemRefId);
	}

	public function getLearningStandardItemRefId($autoCreate = TRUE) {
		if ($this->learningStandardItemRefId===NULL && $autoCreate && ! isset($this->_overrides['learningStandardItemRefId']) ) {
			$this->learningStandardItemRefId = $this->createLearningStandardItemRefId();
		}
		return $this->learningStandardItemRefId;
	}
	
	protected function createLearningStandardItemRefId() {
		return array();
	}

	public function setLearningStandardItemRefId($learningStandardItemRefId) {
		$this->learningStandardItemRefId = $this->validateLearningStandardItemRefId($learningStandardItemRefId);
	}

	protected function validateLearningStandardItemRefId($learningStandardItemRefId) {
		$count = count($learningStandardItemRefId);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'learningStandardItemRefId', 1));
		}
		foreach ($learningStandardItemRefId as $entry) {
		}
	
		return $learningStandardItemRefId;
	}

	public function addLearningStandardItemRefId($learningStandardItemRefId) {
		$this->learningStandardItemRefId[] = $this->validateLearningStandardItemRefIdType($learningStandardItemRefId);
	}

	protected function validateLearningStandardItemRefIdType($learningStandardItemRefId) {
	
		return $learningStandardItemRefId;
	}
} // end class LearningStandardItems
