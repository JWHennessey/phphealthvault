<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="MeetingTimeType")
 */
class MeetingTimeType {
	/**
	 * This element represents the meeting times and periods for a course, and occurs within objects such as SectionInfoand StudentSectionEnrollment.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlText	(type="string", name="TimetableDay")
	 */
	protected $timetableDay;

	/**
	 * @XmlText	(type="string", name="TimetablePeriod")
	 */
	protected $timetablePeriod;

	public function __construct($timetableDay = NULL, $timetablePeriod = NULL) {
		$this->timetableDay = ($timetableDay===NULL) ? NULL : $this->validateTimetableDay($timetableDay);
		$this->timetablePeriod = ($timetablePeriod===NULL) ? NULL : $this->validateTimetablePeriod($timetablePeriod);
	}

	public function getTimetableDay($autoCreate = TRUE) {
		if ($this->timetableDay===NULL && $autoCreate && ! isset($this->_overrides['timetableDay']) ) {
			$this->timetableDay = $this->createTimetableDay();
		}
		return $this->timetableDay;
	}
	
	protected function createTimetableDay() {
		return NULL;
	}

	public function setTimetableDay($timetableDay) {
		$this->timetableDay = $this->validateTimetableDay($timetableDay);
	}

	protected function validateTimetableDay($timetableDay) {
		if ( ! is_string($timetableDay) && ! is_null($timetableDay) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'timetableDay', 'string'));
		}
	
		return $timetableDay;
	}

	public function getTimetablePeriod($autoCreate = TRUE) {
		if ($this->timetablePeriod===NULL && $autoCreate && ! isset($this->_overrides['timetablePeriod']) ) {
			$this->timetablePeriod = $this->createTimetablePeriod();
		}
		return $this->timetablePeriod;
	}
	
	protected function createTimetablePeriod() {
		return NULL;
	}

	public function setTimetablePeriod($timetablePeriod) {
		$this->timetablePeriod = $this->validateTimetablePeriod($timetablePeriod);
	}

	protected function validateTimetablePeriod($timetablePeriod) {
		if ( ! is_string($timetablePeriod) && ! is_null($timetablePeriod) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'timetablePeriod', 'string'));
		}
	
		return $timetablePeriod;
	}
} // end class MeetingTimeType
