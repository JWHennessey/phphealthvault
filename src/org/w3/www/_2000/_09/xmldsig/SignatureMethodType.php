<?php
namespace org\w3\www\_2000\_09\xmldsig;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.w3.org/2000/09/xmldsig#", prefix="ds")
 * })
 * @XmlEntity	(xml="SignatureMethodType")
 */
class SignatureMethodType {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\w3\www\_2000\_09\xmldsig\HMACOutputLengthType", name="HMACOutputLength")
	 */
	protected $hMACOutputLength;

	/**
	 * @XmlElement	(type="\org\w3\www\_2000\_09\xmldsig\AnyMixed", collection="true", name="*")
	 */
	protected $any;

	/**
	 * @XmlAttribute	(type="string", name="Algorithm")
	 */
	protected $algorithm;

	public function __construct($hMACOutputLength = NULL, $any = NULL, $algorithm = NULL) {
		$this->hMACOutputLength = ($hMACOutputLength===NULL) ? NULL : $this->validateHMACOutputLength($hMACOutputLength);
		$this->any = ($any===NULL) ? NULL : $this->validateAny($any);
		$this->algorithm = ($algorithm===NULL) ? NULL : $this->validateAlgorithm($algorithm);
	}

	public function getHMACOutputLength($autoCreate = TRUE) {
		if ($this->hMACOutputLength===NULL && $autoCreate && ! isset($this->_overrides['hMACOutputLength']) ) {
			$this->hMACOutputLength = $this->createHMACOutputLength();
		}
		return $this->hMACOutputLength;
	}
	
	protected function createHMACOutputLength() {
		return new \org\w3\www\_2000\_09\xmldsig\HMACOutputLengthType();
	}

	public function setHMACOutputLength($hMACOutputLength) {
		$this->hMACOutputLength = $this->validateHMACOutputLength($hMACOutputLength);
	}

	protected function validateHMACOutputLength($hMACOutputLength) {
		if ( $hMACOutputLength === FALSE ) {
			$this->_overrides['hMACOutputLength'] = TRUE;
			return NULL;
		}

		if ( ! $hMACOutputLength instanceof \org\w3\www\_2000\_09\xmldsig\HMACOutputLengthType  && ! is_null($hMACOutputLength) ) {
			$hMACOutputLength = new \org\w3\www\_2000\_09\xmldsig\HMACOutputLengthType ($hMACOutputLength);
		}

		unset ($this->_overrides['hMACOutputLength']);
	
		return $hMACOutputLength;
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

	public function getAlgorithm($autoCreate = TRUE) {
		if ($this->algorithm===NULL && $autoCreate && ! isset($this->_overrides['algorithm']) ) {
			$this->algorithm = $this->createAlgorithm();
		}
		return $this->algorithm;
	}
	
	protected function createAlgorithm() {
		return NULL;
	}

	public function setAlgorithm($algorithm) {
		$this->algorithm = $this->validateAlgorithm($algorithm);
	}

	protected function validateAlgorithm($algorithm) {
		if (!is_string($algorithm)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'algorithm', 'string'));
		}
	
		return $algorithm;
	}
} // end class SignatureMethodType
