<?php
namespace com\microsoft\wc\thing\application;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.application", prefix="")
 * })
 * @XmlEntity	(xml="app-specific")
 */
class AppSpecific extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Defines a thing type to store arbitrary application data.
	 * Applications are responsible for using the format-appidand format-tag to guarantee uniques of the data format.
	 */

	const ID = 'a5033c9d-08cf-4204-9bd3-cb412ce39fc0';
	const NAME = 'Application-Specific Information';

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlText	(type="string", name="format-appid")
	 */
	protected $formatAppid;

	/**
	 * @XmlText	(type="string", name="format-tag")
	 */
	protected $formatTag;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\DateTime", name="when")
	 */
	protected $when;

	/**
	 * @XmlText	(type="string", name="summary")
	 */
	protected $summary;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\application\AnyMixed", collection="true", name="*")
	 */
	protected $any;

	public function __construct($formatAppid = NULL, $formatTag = NULL, $when = NULL, $summary = NULL, $any = NULL) {
		$this->formatAppid = ($formatAppid===NULL) ? NULL : $this->validateFormatAppid($formatAppid);
		$this->formatTag = ($formatTag===NULL) ? NULL : $this->validateFormatTag($formatTag);
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->summary = ($summary===NULL) ? NULL : $this->validateSummary($summary);
		$this->any = ($any===NULL) ? NULL : $this->validateAny($any);
	}

	public function getFormatAppid($autoCreate = TRUE) {
		if ($this->formatAppid===NULL && $autoCreate && ! isset($this->_overrides['formatAppid']) ) {
			$this->formatAppid = $this->createFormatAppid();
		}
		return $this->formatAppid;
	}
	
	protected function createFormatAppid() {
		return '';
	}

	public function setFormatAppid($formatAppid) {
		$this->formatAppid = $this->validateFormatAppid($formatAppid);
	}

	protected function validateFormatAppid($formatAppid) {
		if (!is_string($formatAppid)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'formatAppid', 'string'));
		}
	
		return $formatAppid;
	}

	public function getFormatTag($autoCreate = TRUE) {
		if ($this->formatTag===NULL && $autoCreate && ! isset($this->_overrides['formatTag']) ) {
			$this->formatTag = $this->createFormatTag();
		}
		return $this->formatTag;
	}
	
	protected function createFormatTag() {
		return '';
	}

	public function setFormatTag($formatTag) {
		$this->formatTag = $this->validateFormatTag($formatTag);
	}

	protected function validateFormatTag($formatTag) {
		if (!is_string($formatTag)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'formatTag', 'string'));
		}
	
		return $formatTag;
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
		if ( $when === FALSE ) {
			$this->_overrides['when'] = TRUE;
			return NULL;
		}

		if ( ! $when instanceof \com\microsoft\wc\dates\DateTime  && ! is_null($when) ) {
			$when = new \com\microsoft\wc\dates\DateTime ($when);
		}

		unset ($this->_overrides['when']);
	
		return $when;
	}

	public function getSummary($autoCreate = TRUE) {
		if ($this->summary===NULL && $autoCreate && ! isset($this->_overrides['summary']) ) {
			$this->summary = $this->createSummary();
		}
		return $this->summary;
	}
	
	protected function createSummary() {
		return '';
	}

	public function setSummary($summary) {
		$this->summary = $this->validateSummary($summary);
	}

	protected function validateSummary($summary) {
		if (!is_string($summary)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'summary', 'string'));
		}
	
		return $summary;
	}

	public function getAny($autoCreate = TRUE) {
		if ($this->any===NULL && $autoCreate && ! isset($this->_overrides['any']) ) {
			$this->any = $this->createAny();
		}
		return $this->any;
	}
	
	protected function createAny() {
		return array();
	}

	public function setAny($any) {
		$this->any = $this->validateAny($any);
	}

	protected function validateAny($any) {
		$count = count($any);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'any', 0));
		}
		if ( ! empty($any) ) {
			foreach ($any as $entry) {
				if ( ! is_object($entry) && ! is_null($entry) ) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'any', 'AnyMixed'));
				}
			}
		}
	
		return $any;
	}

	public function addAny($any) {
		$this->any[] = $this->validateAnyType($any);
	}

	protected function validateAnyType($any) {
		if ( ! is_object($any) && ! is_null($any) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'any', 'AnyMixed'));
		}
	
		return $any;
	}
} // end class AppSpecific
