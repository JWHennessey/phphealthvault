<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="IVL_TS")
 */
class IVLTS extends \SXCM_TS\SXCMTS {
	/**
	 */

	/**
	 * @XmlElement	(type="\hl7_org\v3\IVXBTS", name="low")
	 */
	protected $low;

	/**
	 * @XmlElement	(type="\hl7_org\v3\PQ", name="width")
	 */
	protected $width;

	/**
	 * @XmlElement	(type="\hl7_org\v3\IVXBTS", name="high")
	 */
	protected $high;

	/**
	 * @XmlElement	(type="\hl7_org\v3\TS", name="center")
	 */
	protected $center;

	public function __construct($low = NULL, $width = NULL, $high = NULL, $center = NULL) {
		$this->low = ($low===NULL) ? NULL : $this->validateLow($low);
		$this->width = ($width===NULL) ? NULL : $this->validateWidth($width);
		$this->high = ($high===NULL) ? NULL : $this->validateHigh($high);
		$this->center = ($center===NULL) ? NULL : $this->validateCenter($center);
	}

	public function getLow() {
		if ($this->low===NULL) {
			$this->low = $this->createLow();
		}
		return $this->low;
	}
	
	protected function createLow() {
		return new \hl7_org\v3\IVXBTS();
	}

	public function setLow($low) {
		$this->low = $this->validateLow($low);
	}

	protected function validateLow($low) {
		if ( ! $low instanceof \hl7_org\v3\IVXBTS ) {
			$low = new \hl7_org\v3\IVXBTS ($low);
		}
	
		return $low;
	}

	public function getWidth() {
		if ($this->width===NULL) {
			$this->width = $this->createWidth();
		}
		return $this->width;
	}
	
	protected function createWidth() {
		return new \hl7_org\v3\PQ();
	}

	public function setWidth($width) {
		$this->width = $this->validateWidth($width);
	}

	protected function validateWidth($width) {
		if ( ! $width instanceof \hl7_org\v3\PQ  && ! is_null($width) ) {
			$width = new \hl7_org\v3\PQ ($width);
		}
	
		return $width;
	}

	public function getHigh() {
		if ($this->high===NULL) {
			$this->high = $this->createHigh();
		}
		return $this->high;
	}
	
	protected function createHigh() {
		return new \hl7_org\v3\IVXBTS();
	}

	public function setHigh($high) {
		$this->high = $this->validateHigh($high);
	}

	protected function validateHigh($high) {
		if ( ! $high instanceof \hl7_org\v3\IVXBTS  && ! is_null($high) ) {
			$high = new \hl7_org\v3\IVXBTS ($high);
		}
	
		return $high;
	}

	public function getCenter() {
		if ($this->center===NULL) {
			$this->center = $this->createCenter();
		}
		return $this->center;
	}
	
	protected function createCenter() {
		return new \hl7_org\v3\TS();
	}

	public function setCenter($center) {
		$this->center = $this->validateCenter($center);
	}

	protected function validateCenter($center) {
		if ( ! $center instanceof \hl7_org\v3\TS ) {
			$center = new \hl7_org\v3\TS ($center);
		}
	
		return $center;
	}
} // end class IVLTS