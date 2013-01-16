<?php
namespace com\microsoft\wc\methods\response\NewApplicationCreationInfo;



/**
 * @XmlEntity	(xml="info")
 */
class Info {
	/**
	 * Contains the response to the NewApplicationCreationInfo method call.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="app-id")
	 */
	protected $appId;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String64", name="shared-secret")
	 */
	protected $sharedSecret;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String512", name="app-token")
	 */
	protected $appToken;

	public function __construct($appId = NULL, $sharedSecret = NULL, $appToken = NULL) {
		$this->appId = ($appId===NULL) ? NULL : $this->validateAppId($appId);
		$this->sharedSecret = ($sharedSecret===NULL) ? NULL : $this->validateSharedSecret($sharedSecret);
		$this->appToken = ($appToken===NULL) ? NULL : $this->validateAppToken($appToken);
	}

	public function getAppId() {
		if ($this->appId===NULL) {
			$this->appId = $this->createAppId();
		}
		return $this->appId;
	}
	
	protected function createAppId() {
		return new \com\microsoft\wc\types\Guid();
	}

	public function setAppId($appId) {
		$this->appId = $this->validateAppId($appId);
	}

	protected function validateAppId($appId) {
		if ( ! $appId instanceof \com\microsoft\wc\types\Guid ) {
			$appId = new \com\microsoft\wc\types\Guid ($appId);
		}
	
		return $appId;
	}

	public function getSharedSecret() {
		if ($this->sharedSecret===NULL) {
			$this->sharedSecret = $this->createSharedSecret();
		}
		return $this->sharedSecret;
	}
	
	protected function createSharedSecret() {
		return new \com\microsoft\wc\types\String64();
	}

	public function setSharedSecret($sharedSecret) {
		$this->sharedSecret = $this->validateSharedSecret($sharedSecret);
	}

	protected function validateSharedSecret($sharedSecret) {
		if ( ! $sharedSecret instanceof \com\microsoft\wc\types\String64 ) {
			$sharedSecret = new \com\microsoft\wc\types\String64 ($sharedSecret);
		}
	
		return $sharedSecret;
	}

	public function getAppToken() {
		if ($this->appToken===NULL) {
			$this->appToken = $this->createAppToken();
		}
		return $this->appToken;
	}
	
	protected function createAppToken() {
		return new \com\microsoft\wc\types\String512();
	}

	public function setAppToken($appToken) {
		$this->appToken = $this->validateAppToken($appToken);
	}

	protected function validateAppToken($appToken) {
		if ( ! $appToken instanceof \com\microsoft\wc\types\String512 ) {
			$appToken = new \com\microsoft\wc\types\String512 ($appToken);
		}
	
		return $appToken;
	}
} // end class Info
