<?php
namespace com\microsoft\wc\thing\spirometer;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.spirometer", prefix="")
 * })
 * @XmlEntity	(xml="spirometer")
 */
class Spirometer extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * A single reading from a spirometer.
	 * Note: Please use the peak flow type instead of this type.
	 */

	const ID = '921588d1-27bf-423c-8e55-650d2fedb3e0';
	const NAME = 'Spirometer Measurement';

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\DateTime", name="when")
	 */
	protected $when;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\FlowValue", name="fev1")
	 */
	protected $fev1;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\FlowValue", name="pef")
	 */
	protected $pef;

	/**
	 * @XmlText	(type="string", collection="true", name="warning")
	 */
	protected $warning;

	/**
	 * @XmlText	(type="string", collection="true", name="problem")
	 */
	protected $problem;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Percentage", name="FEVoverFVC")
	 */
	protected $fEVoverFVC;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Percentage", name="FEF25to75")
	 */
	protected $fEF25to75;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Percentage", name="FEF25to50")
	 */
	protected $fEF25to50;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Percentage", name="FIF25to75")
	 */
	protected $fIF25to75;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Percentage", name="FIF25to50")
	 */
	protected $fIF25to50;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\PositiveDouble", name="FET")
	 */
	protected $fET;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\VolumeValue", name="SVC")
	 */
	protected $sVC;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\VolumeValue", name="TV")
	 */
	protected $tV;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\FlowValue", name="MVV")
	 */
	protected $mVV;

	public function __construct($when = NULL, $fev1 = NULL, $pef = NULL, $warning = NULL, $problem = NULL, $fEVoverFVC = NULL, $fEF25to75 = NULL, $fEF25to50 = NULL, $fIF25to75 = NULL, $fIF25to50 = NULL, $fET = NULL, $sVC = NULL, $tV = NULL, $mVV = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->fev1 = ($fev1===NULL) ? NULL : $this->validateFev1($fev1);
		$this->pef = ($pef===NULL) ? NULL : $this->validatePef($pef);
		$this->warning = ($warning===NULL) ? NULL : $this->validateWarning($warning);
		$this->problem = ($problem===NULL) ? NULL : $this->validateProblem($problem);
		$this->fEVoverFVC = ($fEVoverFVC===NULL) ? NULL : $this->validateFEVoverFVC($fEVoverFVC);
		$this->fEF25to75 = ($fEF25to75===NULL) ? NULL : $this->validateFEF25to75($fEF25to75);
		$this->fEF25to50 = ($fEF25to50===NULL) ? NULL : $this->validateFEF25to50($fEF25to50);
		$this->fIF25to75 = ($fIF25to75===NULL) ? NULL : $this->validateFIF25to75($fIF25to75);
		$this->fIF25to50 = ($fIF25to50===NULL) ? NULL : $this->validateFIF25to50($fIF25to50);
		$this->fET = ($fET===NULL) ? NULL : $this->validateFET($fET);
		$this->sVC = ($sVC===NULL) ? NULL : $this->validateSVC($sVC);
		$this->tV = ($tV===NULL) ? NULL : $this->validateTV($tV);
		$this->mVV = ($mVV===NULL) ? NULL : $this->validateMVV($mVV);
	}

	public function getWhen() {
		if ($this->when===NULL) {
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

	public function getFev1() {
		if ($this->fev1===NULL) {
			$this->fev1 = $this->createFev1();
		}
		return $this->fev1;
	}
	
	protected function createFev1() {
		return new \com\microsoft\wc\thing\types\FlowValue();
	}

	public function setFev1($fev1) {
		$this->fev1 = $this->validateFev1($fev1);
	}

	protected function validateFev1($fev1) {
		if ( ! $fev1 instanceof \com\microsoft\wc\thing\types\FlowValue  && ! is_null($fev1) ) {
			$fev1 = new \com\microsoft\wc\thing\types\FlowValue ($fev1);
		}
	
		return $fev1;
	}

	public function getPef() {
		if ($this->pef===NULL) {
			$this->pef = $this->createPef();
		}
		return $this->pef;
	}
	
	protected function createPef() {
		return new \com\microsoft\wc\thing\types\FlowValue();
	}

	public function setPef($pef) {
		$this->pef = $this->validatePef($pef);
	}

	protected function validatePef($pef) {
		if ( ! $pef instanceof \com\microsoft\wc\thing\types\FlowValue  && ! is_null($pef) ) {
			$pef = new \com\microsoft\wc\thing\types\FlowValue ($pef);
		}
	
		return $pef;
	}

	public function getWarning() {
		if ($this->warning===NULL) {
			$this->warning = $this->createWarning();
		}
		return $this->warning;
	}
	
	protected function createWarning() {
		return array();
	}

	public function setWarning($warning) {
		$this->warning = $this->validateWarning($warning);
	}

	protected function validateWarning($warning) {
		$count = count($warning);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'warning', 0));
		}
		foreach ($warning as $entry) {
			if ( ! is_string($entry) && ! is_null($entry) ) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'warning', 'string'));
			}
		}
	
		return $warning;
	}

	public function addWarning($warning) {
		$this->warning[] = $this->validateWarningType($warning);
	}

	protected function validateWarningType($warning) {
		if ( ! is_string($warning) && ! is_null($warning) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'warning', 'string'));
		}
	
		return $warning;
	}

	public function getProblem() {
		if ($this->problem===NULL) {
			$this->problem = $this->createProblem();
		}
		return $this->problem;
	}
	
	protected function createProblem() {
		return array();
	}

	public function setProblem($problem) {
		$this->problem = $this->validateProblem($problem);
	}

	protected function validateProblem($problem) {
		$count = count($problem);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'problem', 0));
		}
		foreach ($problem as $entry) {
			if ( ! is_string($entry) && ! is_null($entry) ) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'problem', 'string'));
			}
		}
	
		return $problem;
	}

	public function addProblem($problem) {
		$this->problem[] = $this->validateProblemType($problem);
	}

	protected function validateProblemType($problem) {
		if ( ! is_string($problem) && ! is_null($problem) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'problem', 'string'));
		}
	
		return $problem;
	}

	public function getFEVoverFVC() {
		if ($this->fEVoverFVC===NULL) {
			$this->fEVoverFVC = $this->createFEVoverFVC();
		}
		return $this->fEVoverFVC;
	}
	
	protected function createFEVoverFVC() {
		return new \com\microsoft\wc\thing\types\Percentage();
	}

	public function setFEVoverFVC($fEVoverFVC) {
		$this->fEVoverFVC = $this->validateFEVoverFVC($fEVoverFVC);
	}

	protected function validateFEVoverFVC($fEVoverFVC) {
		if ( ! $fEVoverFVC instanceof \com\microsoft\wc\thing\types\Percentage  && ! is_null($fEVoverFVC) ) {
			$fEVoverFVC = new \com\microsoft\wc\thing\types\Percentage ($fEVoverFVC);
		}
	
		return $fEVoverFVC;
	}

	public function getFEF25to75() {
		if ($this->fEF25to75===NULL) {
			$this->fEF25to75 = $this->createFEF25to75();
		}
		return $this->fEF25to75;
	}
	
	protected function createFEF25to75() {
		return new \com\microsoft\wc\thing\types\Percentage();
	}

	public function setFEF25to75($fEF25to75) {
		$this->fEF25to75 = $this->validateFEF25to75($fEF25to75);
	}

	protected function validateFEF25to75($fEF25to75) {
		if ( ! $fEF25to75 instanceof \com\microsoft\wc\thing\types\Percentage  && ! is_null($fEF25to75) ) {
			$fEF25to75 = new \com\microsoft\wc\thing\types\Percentage ($fEF25to75);
		}
	
		return $fEF25to75;
	}

	public function getFEF25to50() {
		if ($this->fEF25to50===NULL) {
			$this->fEF25to50 = $this->createFEF25to50();
		}
		return $this->fEF25to50;
	}
	
	protected function createFEF25to50() {
		return new \com\microsoft\wc\thing\types\Percentage();
	}

	public function setFEF25to50($fEF25to50) {
		$this->fEF25to50 = $this->validateFEF25to50($fEF25to50);
	}

	protected function validateFEF25to50($fEF25to50) {
		if ( ! $fEF25to50 instanceof \com\microsoft\wc\thing\types\Percentage  && ! is_null($fEF25to50) ) {
			$fEF25to50 = new \com\microsoft\wc\thing\types\Percentage ($fEF25to50);
		}
	
		return $fEF25to50;
	}

	public function getFIF25to75() {
		if ($this->fIF25to75===NULL) {
			$this->fIF25to75 = $this->createFIF25to75();
		}
		return $this->fIF25to75;
	}
	
	protected function createFIF25to75() {
		return new \com\microsoft\wc\thing\types\Percentage();
	}

	public function setFIF25to75($fIF25to75) {
		$this->fIF25to75 = $this->validateFIF25to75($fIF25to75);
	}

	protected function validateFIF25to75($fIF25to75) {
		if ( ! $fIF25to75 instanceof \com\microsoft\wc\thing\types\Percentage  && ! is_null($fIF25to75) ) {
			$fIF25to75 = new \com\microsoft\wc\thing\types\Percentage ($fIF25to75);
		}
	
		return $fIF25to75;
	}

	public function getFIF25to50() {
		if ($this->fIF25to50===NULL) {
			$this->fIF25to50 = $this->createFIF25to50();
		}
		return $this->fIF25to50;
	}
	
	protected function createFIF25to50() {
		return new \com\microsoft\wc\thing\types\Percentage();
	}

	public function setFIF25to50($fIF25to50) {
		$this->fIF25to50 = $this->validateFIF25to50($fIF25to50);
	}

	protected function validateFIF25to50($fIF25to50) {
		if ( ! $fIF25to50 instanceof \com\microsoft\wc\thing\types\Percentage  && ! is_null($fIF25to50) ) {
			$fIF25to50 = new \com\microsoft\wc\thing\types\Percentage ($fIF25to50);
		}
	
		return $fIF25to50;
	}

	public function getFET() {
		if ($this->fET===NULL) {
			$this->fET = $this->createFET();
		}
		return $this->fET;
	}
	
	protected function createFET() {
		return new \com\microsoft\wc\thing\types\PositiveDouble();
	}

	public function setFET($fET) {
		$this->fET = $this->validateFET($fET);
	}

	protected function validateFET($fET) {
		if ( ! $fET instanceof \com\microsoft\wc\thing\types\PositiveDouble  && ! is_null($fET) ) {
			$fET = new \com\microsoft\wc\thing\types\PositiveDouble ($fET);
		}
	
		return $fET;
	}

	public function getSVC() {
		if ($this->sVC===NULL) {
			$this->sVC = $this->createSVC();
		}
		return $this->sVC;
	}
	
	protected function createSVC() {
		return new \com\microsoft\wc\thing\types\VolumeValue();
	}

	public function setSVC($sVC) {
		$this->sVC = $this->validateSVC($sVC);
	}

	protected function validateSVC($sVC) {
		if ( ! $sVC instanceof \com\microsoft\wc\thing\types\VolumeValue  && ! is_null($sVC) ) {
			$sVC = new \com\microsoft\wc\thing\types\VolumeValue ($sVC);
		}
	
		return $sVC;
	}

	public function getTV() {
		if ($this->tV===NULL) {
			$this->tV = $this->createTV();
		}
		return $this->tV;
	}
	
	protected function createTV() {
		return new \com\microsoft\wc\thing\types\VolumeValue();
	}

	public function setTV($tV) {
		$this->tV = $this->validateTV($tV);
	}

	protected function validateTV($tV) {
		if ( ! $tV instanceof \com\microsoft\wc\thing\types\VolumeValue  && ! is_null($tV) ) {
			$tV = new \com\microsoft\wc\thing\types\VolumeValue ($tV);
		}
	
		return $tV;
	}

	public function getMVV() {
		if ($this->mVV===NULL) {
			$this->mVV = $this->createMVV();
		}
		return $this->mVV;
	}
	
	protected function createMVV() {
		return new \com\microsoft\wc\thing\types\FlowValue();
	}

	public function setMVV($mVV) {
		$this->mVV = $this->validateMVV($mVV);
	}

	protected function validateMVV($mVV) {
		if ( ! $mVV instanceof \com\microsoft\wc\thing\types\FlowValue  && ! is_null($mVV) ) {
			$mVV = new \com\microsoft\wc\thing\types\FlowValue ($mVV);
		}
	
		return $mVV;
	}
} // end class Spirometer