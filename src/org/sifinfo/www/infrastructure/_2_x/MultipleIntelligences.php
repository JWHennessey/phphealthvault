<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="MultipleIntelligences")
 */
class MultipleIntelligences {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\MultipleIntelligence", collection="true", name="MultipleIntelligence")
	 */
	protected $multipleIntelligence;

	public function __construct($multipleIntelligence = NULL) {
		$this->multipleIntelligence = ($multipleIntelligence===NULL) ? NULL : $this->validateMultipleIntelligence($multipleIntelligence);
	}

	public function getMultipleIntelligence($autoCreate = TRUE) {
		if ($this->multipleIntelligence===NULL && $autoCreate && ! isset($this->_overrides['multipleIntelligence']) ) {
			$this->multipleIntelligence = $this->createMultipleIntelligence();
		}
		return $this->multipleIntelligence;
	}
	
	protected function createMultipleIntelligence() {
		return array();
	}

	public function setMultipleIntelligence($multipleIntelligence) {
		$this->multipleIntelligence = $this->validateMultipleIntelligence($multipleIntelligence);
	}

	protected function validateMultipleIntelligence($multipleIntelligence) {
		$count = count($multipleIntelligence);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'multipleIntelligence', 0));
		}
		if ( ! empty($multipleIntelligence) ) {
			foreach ($multipleIntelligence as $entry) {
			}
		}
	
		return $multipleIntelligence;
	}

	public function addMultipleIntelligence($multipleIntelligence) {
		$this->multipleIntelligence[] = $this->validateMultipleIntelligenceType($multipleIntelligence);
	}

	protected function validateMultipleIntelligenceType($multipleIntelligence) {
	
		return $multipleIntelligence;
	}
} // end class MultipleIntelligences
