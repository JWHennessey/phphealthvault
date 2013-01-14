<?php
namespace com\microsoft\wc\application;



/**
 * @XmlEntity	(xml="AppPersistentTokens")
 */
class AppPersistentTokens {
	/**
	 */

	/**
	 * @XmlText	(type="boolean", name="enabled")
	 */
	protected $enabled;

	/**
	 * @XmlText	(type="integer", name="token-ttl-seconds")
	 */
	protected $tokenTtlSeconds;

	public function __construct($enabled = NULL, $tokenTtlSeconds = NULL) {
		$this->enabled = ($enabled===NULL) ? NULL : $this->validateEnabled($enabled);
		$this->tokenTtlSeconds = ($tokenTtlSeconds===NULL) ? NULL : $this->validateTokenTtlSeconds($tokenTtlSeconds);
	}

	public function getEnabled() {
		if ($this->enabled===NULL) {
			$this->enabled = $this->createEnabled();
		}
		return $this->enabled;
	}
	
	protected function createEnabled() {
		return FALSE;
	}

	public function setEnabled($enabled) {
		$this->enabled = $this->validateEnabled($enabled);
	}

	protected function validateEnabled($enabled) {
		if (!is_bool($enabled)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'enabled', 'boolean'));
		}
	
		return $enabled;
	}

	public function getTokenTtlSeconds() {
		if ($this->tokenTtlSeconds===NULL) {
			$this->tokenTtlSeconds = $this->createTokenTtlSeconds();
		}
		return $this->tokenTtlSeconds;
	}
	
	protected function createTokenTtlSeconds() {
		return NULL;
	}

	public function setTokenTtlSeconds($tokenTtlSeconds) {
		$this->tokenTtlSeconds = $this->validateTokenTtlSeconds($tokenTtlSeconds);
	}

	protected function validateTokenTtlSeconds($tokenTtlSeconds) {
		if ( ! is_integer($tokenTtlSeconds) && ! is_null($tokenTtlSeconds) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'tokenTtlSeconds', 'integer'));
		}
	
		return $tokenTtlSeconds;
	}
} // end class AppPersistentTokens