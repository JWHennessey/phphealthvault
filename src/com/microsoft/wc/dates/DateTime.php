<?php
namespace com\microsoft\wc\dates;



/**
 * @XmlEntity	(xml="date-time")
 */
class DateTime {
	/**
	 * date + time value, requires at least date
	 */

	/**
	 * @XmlText	(type="string", name="date")
	 */
	protected $date;

	/**
	 * @XmlText	(type="string", name="time")
	 */
	protected $time;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="tz")
	 */
	protected $tz;

	public function __construct($date = NULL, $time = NULL, $tz = NULL) {
		$this->date = ($date===NULL) ? NULL : $this->validateDate($date);
		$this->time = ($time===NULL) ? NULL : $this->validateTime($time);
		$this->tz = ($tz===NULL) ? NULL : $this->validateTz($tz);
	}

	public function getDate() {
		if ($this->date===NULL) {
			$this->date = $this->createDate();
		}
		return $this->date;
	}
	
	protected function createDate() {
		return new \com\microsoft\wc\dates\Date();
	}

	public function setDate($date) {
		$this->date = $this->validateDate($date);
	}

	protected function validateDate($date) {
		if ( ! $date instanceof \com\microsoft\wc\dates\Date ) {
			$date = new \com\microsoft\wc\dates\Date ($date);
		}
	
		return $date;
	}

	public function getTime() {
		if ($this->time===NULL) {
			$this->time = $this->createTime();
		}
		return $this->time;
	}
	
	protected function createTime() {
		return new \com\microsoft\wc\dates\Time();
	}

	public function setTime($time) {
		$this->time = $this->validateTime($time);
	}

	protected function validateTime($time) {
		if ( ! $time instanceof \com\microsoft\wc\dates\Time  && ! is_null($time) ) {
			$time = new \com\microsoft\wc\dates\Time ($time);
		}
	
		return $time;
	}

	public function getTz() {
		if ($this->tz===NULL) {
			$this->tz = $this->createTz();
		}
		return $this->tz;
	}
	
	protected function createTz() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setTz($tz) {
		$this->tz = $this->validateTz($tz);
	}

	protected function validateTz($tz) {
		if ( ! $tz instanceof \com\microsoft\wc\types\CodableValue  && ! is_null($tz) ) {
			$tz = new \com\microsoft\wc\types\CodableValue ($tz);
		}
	
		return $tz;
	}
} // end class DateTime