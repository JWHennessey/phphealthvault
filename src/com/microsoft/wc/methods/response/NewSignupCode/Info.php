<?php
namespace com\microsoft\wc\methods\response\NewSignupCode;



/**
 * @XmlEntity	(xml="info")
 */
class Info {
	/**
	 * The element of the response that contains the method specific return value(s).
	 * All response schemas contain the info element which contain the return value of the method. If the method does not defined an info element, the method has no return value.
	 */

	/**
	 * @XmlText	(type="string", name="signup-code")
	 */
	protected $signupCode;

	public function __construct($signupCode = NULL) {
		$this->signupCode = ($signupCode===NULL) ? NULL : $this->validateSignupCode($signupCode);
	}

	public function getSignupCode() {
		if ($this->signupCode===NULL) {
			$this->signupCode = $this->createSignupCode();
		}
		return $this->signupCode;
	}
	
	protected function createSignupCode() {
		return '';
	}

	public function setSignupCode($signupCode) {
		$this->signupCode = $this->validateSignupCode($signupCode);
	}

	protected function validateSignupCode($signupCode) {
		if (!is_string($signupCode)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'signupCode', 'string'));
		}
	
		return $signupCode;
	}
} // end class Info