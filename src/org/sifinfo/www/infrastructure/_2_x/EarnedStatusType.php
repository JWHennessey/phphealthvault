<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="EarnedStatusType")
 */
class EarnedStatusType {
	/**
	 * This gives information about a staff member's meal status.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlText	(type="string", name="StartDate")
	 */
	protected $startDate;

	/**
	 * @XmlText	(type="string", name="EndDate")
	 */
	protected $endDate;

	/**
	 * @XmlAttribute	(type="string", name="Type")
	 */
	protected $type;

	public function __construct($startDate = NULL, $endDate = NULL, $type = NULL) {
		$this->startDate = ($startDate===NULL) ? NULL : $this->validateStartDate($startDate);
		$this->endDate = ($endDate===NULL) ? NULL : $this->validateEndDate($endDate);
		$this->type = ($type===NULL) ? NULL : $this->validateType($type);
	}

	public function getStartDate($autoCreate = TRUE) {
		if ($this->startDate===NULL && $autoCreate && ! isset($this->_overrides['startDate']) ) {
			$this->startDate = $this->createStartDate();
		}
		return $this->startDate;
	}
	
	protected function createStartDate() {
		return NULL;
	}

	public function setStartDate($startDate) {
		$this->startDate = $this->validateStartDate($startDate);
	}

	protected function validateStartDate($startDate) {
		if ( ! is_string($startDate) && ! is_null($startDate) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'startDate', 'string'));
		}
	
		return $startDate;
	}

	public function getEndDate($autoCreate = TRUE) {
		if ($this->endDate===NULL && $autoCreate && ! isset($this->_overrides['endDate']) ) {
			$this->endDate = $this->createEndDate();
		}
		return $this->endDate;
	}
	
	protected function createEndDate() {
		return NULL;
	}

	public function setEndDate($endDate) {
		$this->endDate = $this->validateEndDate($endDate);
	}

	protected function validateEndDate($endDate) {
		if ( ! is_string($endDate) && ! is_null($endDate) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'endDate', 'string'));
		}
	
		return $endDate;
	}

	public function getType($autoCreate = TRUE) {
		if ($this->type===NULL && $autoCreate && ! isset($this->_overrides['type']) ) {
			$this->type = $this->createType();
		}
		return $this->type;
	}
	
	protected function createType() {
		return NULL;
	}

	public function setType($type) {
		$this->type = $this->validateType($type);
	}

	protected function validateType($type) {
		if (!is_string($type)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'type', 'string'));
		}
	
		return $type;
	}
} // end class EarnedStatusType
