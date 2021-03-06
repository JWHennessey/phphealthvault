<?php
namespace com\microsoft\wc\auth;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.auth", prefix="wc-auth")
 * })
 * @XmlEntity	(xml="SimpleOpenIdCredential")
 */
class SimpleOpenIdCredential {
	/**
	 * Represents the confirmed claimed id of a user who has been authenticated to an Open Id Provider.
	 * Authentication is performed to an Open Id Provider through Shell which passes it to platform for verification against a HealthVault account.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String128", name="claimed-id")
	 */
	protected $claimedId;

	public function __construct($claimedId = NULL) {
		$this->claimedId = ($claimedId===NULL) ? NULL : $this->validateClaimedId($claimedId);
	}

	public function getClaimedId($autoCreate = TRUE) {
		if ($this->claimedId===NULL && $autoCreate && ! isset($this->_overrides['claimedId']) ) {
			$this->claimedId = $this->createClaimedId();
		}
		return $this->claimedId;
	}
	
	protected function createClaimedId() {
		return new \com\microsoft\wc\types\String128();
	}

	public function setClaimedId($claimedId) {
		$this->claimedId = $this->validateClaimedId($claimedId);
	}

	protected function validateClaimedId($claimedId) {
		if ( ! $claimedId instanceof \com\microsoft\wc\types\String128 ) {
			$claimedId = new \com\microsoft\wc\types\String128 ($claimedId);
		}
	
		return $claimedId;
	}
} // end class SimpleOpenIdCredential
