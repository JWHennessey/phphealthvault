<?php
namespace com\microsoft\wc\thing\care_plan;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.care-plan", prefix="")
 * })
 * @XmlEntity	(xml="care-plan-goal")
 */
class CarePlanGoal {
	/**
	 * A goal defines a target for a measurement.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnznw", name="description")
	 */
	protected $description;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDateTime", name="start-date")
	 */
	protected $startDate;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDateTime", name="end-date")
	 */
	protected $endDate;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\ApproxDateTime", name="target-completion-date")
	 */
	protected $targetCompletionDate;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\care_plan\AssociatedTypeInfo", name="associated-type-info")
	 */
	protected $associatedTypeInfo;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\care_plan\GoalRange", name="target-range")
	 */
	protected $targetRange;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\care_plan\GoalRange", collection="true", name="goal-additional-ranges")
	 */
	protected $goalAdditionalRanges;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\care_plan\GoalRecurrence", name="recurrence")
	 */
	protected $recurrence;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnznw", name="reference-id")
	 */
	protected $referenceId;

	public function __construct($name = NULL, $description = NULL, $startDate = NULL, $endDate = NULL, $targetCompletionDate = NULL, $associatedTypeInfo = NULL, $targetRange = NULL, $goalAdditionalRanges = NULL, $recurrence = NULL, $referenceId = NULL) {
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->description = ($description===NULL) ? NULL : $this->validateDescription($description);
		$this->startDate = ($startDate===NULL) ? NULL : $this->validateStartDate($startDate);
		$this->endDate = ($endDate===NULL) ? NULL : $this->validateEndDate($endDate);
		$this->targetCompletionDate = ($targetCompletionDate===NULL) ? NULL : $this->validateTargetCompletionDate($targetCompletionDate);
		$this->associatedTypeInfo = ($associatedTypeInfo===NULL) ? NULL : $this->validateAssociatedTypeInfo($associatedTypeInfo);
		$this->targetRange = ($targetRange===NULL) ? NULL : $this->validateTargetRange($targetRange);
		$this->goalAdditionalRanges = ($goalAdditionalRanges===NULL) ? NULL : $this->validateGoalAdditionalRanges($goalAdditionalRanges);
		$this->recurrence = ($recurrence===NULL) ? NULL : $this->validateRecurrence($recurrence);
		$this->referenceId = ($referenceId===NULL) ? NULL : $this->validateReferenceId($referenceId);
	}

	public function getName($autoCreate = TRUE) {
		if ($this->name===NULL && $autoCreate && ! isset($this->_overrides['name']) ) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if ( ! $name instanceof \com\microsoft\wc\types\CodableValue ) {
			$name = new \com\microsoft\wc\types\CodableValue ($name);
		}
	
		return $name;
	}

	public function getDescription($autoCreate = TRUE) {
		if ($this->description===NULL && $autoCreate && ! isset($this->_overrides['description']) ) {
			$this->description = $this->createDescription();
		}
		return $this->description;
	}
	
	protected function createDescription() {
		return new \com\microsoft\wc\types\Stringnznw();
	}

	public function setDescription($description) {
		$this->description = $this->validateDescription($description);
	}

	protected function validateDescription($description) {
		if ( $description === FALSE ) {
			$this->_overrides['description'] = TRUE;
			return NULL;
		}

		if ( ! $description instanceof \com\microsoft\wc\types\Stringnznw  && ! is_null($description) ) {
			$description = new \com\microsoft\wc\types\Stringnznw ($description);
		}

		unset ($this->_overrides['description']);
	
		return $description;
	}

	public function getStartDate($autoCreate = TRUE) {
		if ($this->startDate===NULL && $autoCreate && ! isset($this->_overrides['startDate']) ) {
			$this->startDate = $this->createStartDate();
		}
		return $this->startDate;
	}
	
	protected function createStartDate() {
		return new \com\microsoft\wc\dates\ApproxDateTime();
	}

	public function setStartDate($startDate) {
		$this->startDate = $this->validateStartDate($startDate);
	}

	protected function validateStartDate($startDate) {
		if ( $startDate === FALSE ) {
			$this->_overrides['startDate'] = TRUE;
			return NULL;
		}

		if ( ! $startDate instanceof \com\microsoft\wc\dates\ApproxDateTime  && ! is_null($startDate) ) {
			$startDate = new \com\microsoft\wc\dates\ApproxDateTime ($startDate);
		}

		unset ($this->_overrides['startDate']);
	
		return $startDate;
	}

	public function getEndDate($autoCreate = TRUE) {
		if ($this->endDate===NULL && $autoCreate && ! isset($this->_overrides['endDate']) ) {
			$this->endDate = $this->createEndDate();
		}
		return $this->endDate;
	}
	
	protected function createEndDate() {
		return new \com\microsoft\wc\dates\ApproxDateTime();
	}

	public function setEndDate($endDate) {
		$this->endDate = $this->validateEndDate($endDate);
	}

	protected function validateEndDate($endDate) {
		if ( $endDate === FALSE ) {
			$this->_overrides['endDate'] = TRUE;
			return NULL;
		}

		if ( ! $endDate instanceof \com\microsoft\wc\dates\ApproxDateTime  && ! is_null($endDate) ) {
			$endDate = new \com\microsoft\wc\dates\ApproxDateTime ($endDate);
		}

		unset ($this->_overrides['endDate']);
	
		return $endDate;
	}

	public function getTargetCompletionDate($autoCreate = TRUE) {
		if ($this->targetCompletionDate===NULL && $autoCreate && ! isset($this->_overrides['targetCompletionDate']) ) {
			$this->targetCompletionDate = $this->createTargetCompletionDate();
		}
		return $this->targetCompletionDate;
	}
	
	protected function createTargetCompletionDate() {
		return new \com\microsoft\wc\dates\ApproxDateTime();
	}

	public function setTargetCompletionDate($targetCompletionDate) {
		$this->targetCompletionDate = $this->validateTargetCompletionDate($targetCompletionDate);
	}

	protected function validateTargetCompletionDate($targetCompletionDate) {
		if ( $targetCompletionDate === FALSE ) {
			$this->_overrides['targetCompletionDate'] = TRUE;
			return NULL;
		}

		if ( ! $targetCompletionDate instanceof \com\microsoft\wc\dates\ApproxDateTime  && ! is_null($targetCompletionDate) ) {
			$targetCompletionDate = new \com\microsoft\wc\dates\ApproxDateTime ($targetCompletionDate);
		}

		unset ($this->_overrides['targetCompletionDate']);
	
		return $targetCompletionDate;
	}

	public function getAssociatedTypeInfo($autoCreate = TRUE) {
		if ($this->associatedTypeInfo===NULL && $autoCreate && ! isset($this->_overrides['associatedTypeInfo']) ) {
			$this->associatedTypeInfo = $this->createAssociatedTypeInfo();
		}
		return $this->associatedTypeInfo;
	}
	
	protected function createAssociatedTypeInfo() {
		return new \com\microsoft\wc\thing\care_plan\AssociatedTypeInfo();
	}

	public function setAssociatedTypeInfo($associatedTypeInfo) {
		$this->associatedTypeInfo = $this->validateAssociatedTypeInfo($associatedTypeInfo);
	}

	protected function validateAssociatedTypeInfo($associatedTypeInfo) {
		if ( $associatedTypeInfo === FALSE ) {
			$this->_overrides['associatedTypeInfo'] = TRUE;
			return NULL;
		}

		if ( ! $associatedTypeInfo instanceof \com\microsoft\wc\thing\care_plan\AssociatedTypeInfo  && ! is_null($associatedTypeInfo) ) {
			$associatedTypeInfo = new \com\microsoft\wc\thing\care_plan\AssociatedTypeInfo ($associatedTypeInfo);
		}

		unset ($this->_overrides['associatedTypeInfo']);
	
		return $associatedTypeInfo;
	}

	public function getTargetRange($autoCreate = TRUE) {
		if ($this->targetRange===NULL && $autoCreate && ! isset($this->_overrides['targetRange']) ) {
			$this->targetRange = $this->createTargetRange();
		}
		return $this->targetRange;
	}
	
	protected function createTargetRange() {
		return new \com\microsoft\wc\thing\care_plan\GoalRange();
	}

	public function setTargetRange($targetRange) {
		$this->targetRange = $this->validateTargetRange($targetRange);
	}

	protected function validateTargetRange($targetRange) {
		if ( $targetRange === FALSE ) {
			$this->_overrides['targetRange'] = TRUE;
			return NULL;
		}

		if ( ! $targetRange instanceof \com\microsoft\wc\thing\care_plan\GoalRange  && ! is_null($targetRange) ) {
			$targetRange = new \com\microsoft\wc\thing\care_plan\GoalRange ($targetRange);
		}

		unset ($this->_overrides['targetRange']);
	
		return $targetRange;
	}

	public function getGoalAdditionalRanges($autoCreate = TRUE) {
		if ($this->goalAdditionalRanges===NULL && $autoCreate && ! isset($this->_overrides['goalAdditionalRanges']) ) {
			$this->goalAdditionalRanges = $this->createGoalAdditionalRanges();
		}
		return $this->goalAdditionalRanges;
	}
	
	protected function createGoalAdditionalRanges() {
		return array();
	}

	public function setGoalAdditionalRanges($goalAdditionalRanges) {
		$this->goalAdditionalRanges = $this->validateGoalAdditionalRanges($goalAdditionalRanges);
	}

	protected function validateGoalAdditionalRanges($goalAdditionalRanges) {
		if ( $goalAdditionalRanges === FALSE ) {
			$this->_overrides['goalAdditionalRanges'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($goalAdditionalRanges) && ! is_null($goalAdditionalRanges) ) {
			$goalAdditionalRanges = array($goalAdditionalRanges);
		}

		unset ($this->_overrides['goalAdditionalRanges']);
		$count = count($goalAdditionalRanges);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'goalAdditionalRanges', 0));
		}
		if ( ! empty($goalAdditionalRanges) ) {
			foreach ($goalAdditionalRanges as $entry) {
				if (!($entry instanceof GoalRange)) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'goalAdditionalRanges', 'goal-range'));
				}
			}
		}
	
		return $goalAdditionalRanges;
	}

	public function addGoalAdditionalRanges($goalAdditionalRanges) {
		$this->goalAdditionalRanges[] = $goalAdditionalRanges;
	}

	public function getRecurrence($autoCreate = TRUE) {
		if ($this->recurrence===NULL && $autoCreate && ! isset($this->_overrides['recurrence']) ) {
			$this->recurrence = $this->createRecurrence();
		}
		return $this->recurrence;
	}
	
	protected function createRecurrence() {
		return new \com\microsoft\wc\thing\care_plan\GoalRecurrence();
	}

	public function setRecurrence($recurrence) {
		$this->recurrence = $this->validateRecurrence($recurrence);
	}

	protected function validateRecurrence($recurrence) {
		if ( $recurrence === FALSE ) {
			$this->_overrides['recurrence'] = TRUE;
			return NULL;
		}

		if ( ! $recurrence instanceof \com\microsoft\wc\thing\care_plan\GoalRecurrence  && ! is_null($recurrence) ) {
			$recurrence = new \com\microsoft\wc\thing\care_plan\GoalRecurrence ($recurrence);
		}

		unset ($this->_overrides['recurrence']);
	
		return $recurrence;
	}

	public function getReferenceId($autoCreate = TRUE) {
		if ($this->referenceId===NULL && $autoCreate && ! isset($this->_overrides['referenceId']) ) {
			$this->referenceId = $this->createReferenceId();
		}
		return $this->referenceId;
	}
	
	protected function createReferenceId() {
		return new \com\microsoft\wc\types\Stringnznw();
	}

	public function setReferenceId($referenceId) {
		$this->referenceId = $this->validateReferenceId($referenceId);
	}

	protected function validateReferenceId($referenceId) {
		if ( $referenceId === FALSE ) {
			$this->_overrides['referenceId'] = TRUE;
			return NULL;
		}

		if ( ! $referenceId instanceof \com\microsoft\wc\types\Stringnznw  && ! is_null($referenceId) ) {
			$referenceId = new \com\microsoft\wc\types\Stringnznw ($referenceId);
		}

		unset ($this->_overrides['referenceId']);
	
		return $referenceId;
	}
} // end class CarePlanGoal
