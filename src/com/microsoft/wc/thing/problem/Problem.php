<?php
namespace com\microsoft\wc\thing\problem;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.problem", prefix="")
 * })
 * @XmlEntity	(xml="problem")
 */
class Problem extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Information related to a medical problem (please see remarks).
	 * Note: We are in the process of merging the problem and condition types, andrecommend that applications use the condition type instead of the problem type. This thing type describes the medical problem of a person.
	 */

	const ID = '5E2C027E-3417-4CFC-BD10-5A6F2E91AD23';
	const NAME = 'Medical Problem';

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\DateTime", name="when")
	 */
	protected $when;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", collection="true", name="diagnosis")
	 */
	protected $diagnosis;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\DurationValue", collection="true", name="duration")
	 */
	protected $duration;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\problem\Importance", name="importance")
	 */
	protected $importance;

	public function __construct($when = NULL, $diagnosis = NULL, $duration = NULL, $importance = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->diagnosis = ($diagnosis===NULL) ? NULL : $this->validateDiagnosis($diagnosis);
		$this->duration = ($duration===NULL) ? NULL : $this->validateDuration($duration);
		$this->importance = ($importance===NULL) ? NULL : $this->validateImportance($importance);
	}

	public function getWhen($autoCreate = TRUE) {
		if ($this->when===NULL && $autoCreate && ! isset($this->_overrides['when']) ) {
			$this->when = $this->createWhen();
		}
		return $this->when;
	}
	
	protected function createWhen() {
		return new \com\microsoft\wc\dates\DateTime();
	}

	public function setWhen($when) {
		$this->when = $this->validateWhen($when);
	}

	protected function validateWhen($when) {
		if ( ! $when instanceof \com\microsoft\wc\dates\DateTime ) {
			$when = new \com\microsoft\wc\dates\DateTime ($when);
		}
	
		return $when;
	}

	public function getDiagnosis($autoCreate = TRUE) {
		if ($this->diagnosis===NULL && $autoCreate && ! isset($this->_overrides['diagnosis']) ) {
			$this->diagnosis = $this->createDiagnosis();
		}
		return $this->diagnosis;
	}
	
	protected function createDiagnosis() {
		return array();
	}

	public function setDiagnosis($diagnosis) {
		$this->diagnosis = $this->validateDiagnosis($diagnosis);
	}

	protected function validateDiagnosis($diagnosis) {
		if ( $diagnosis === FALSE ) {
			$this->_overrides['diagnosis'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($diagnosis) && ! is_null($diagnosis) ) {
			$diagnosis = array($diagnosis);
		}

		unset ($this->_overrides['diagnosis']);
		$count = count($diagnosis);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'diagnosis', 0));
		}
		if ( ! empty($diagnosis) ) {
			foreach ($diagnosis as $entry) {
				if (!($entry instanceof \com\microsoft\wc\types\CodableValue )) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'diagnosis', 'codable-value'));
				}
			}
		}
	
		return $diagnosis;
	}

	public function addDiagnosis($diagnosis) {
		$this->diagnosis[] = $diagnosis;
	}

	public function getDuration($autoCreate = TRUE) {
		if ($this->duration===NULL && $autoCreate && ! isset($this->_overrides['duration']) ) {
			$this->duration = $this->createDuration();
		}
		return $this->duration;
	}
	
	protected function createDuration() {
		return array();
	}

	public function setDuration($duration) {
		$this->duration = $this->validateDuration($duration);
	}

	protected function validateDuration($duration) {
		if ( $duration === FALSE ) {
			$this->_overrides['duration'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($duration) && ! is_null($duration) ) {
			$duration = array($duration);
		}

		unset ($this->_overrides['duration']);
		$count = count($duration);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'duration', 0));
		}
		if ( ! empty($duration) ) {
			foreach ($duration as $entry) {
				if (!($entry instanceof \com\microsoft\wc\thing\types\DurationValue )) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'duration', 'duration-value'));
				}
			}
		}
	
		return $duration;
	}

	public function addDuration($duration) {
		$this->duration[] = $duration;
	}

	public function getImportance($autoCreate = TRUE) {
		if ($this->importance===NULL && $autoCreate && ! isset($this->_overrides['importance']) ) {
			$this->importance = $this->createImportance();
		}
		return $this->importance;
	}
	
	protected function createImportance() {
		return NULL;
	}

	public function setImportance($importance) {
		$this->importance = $this->validateImportance($importance);
	}

	protected function validateImportance($importance) {
	
		return $importance;
	}
} // end class Problem
