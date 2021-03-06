<?php
namespace com\microsoft\wc\subscription;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.subscription", prefix="wc-subscription")
 * })
 * @XmlRootEntity	(xml="EventingKeyVersionId")
 */
class EventingKeyVersionId {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlValue	(type="string", name="EventingKeyVersionId")
	 */
	protected $value;

	public function __construct($value = NULL) {
		$this->value = ($value===NULL) ? NULL : $this->validateValue($value);
	}

	public function getValue($autoCreate = TRUE) {
		if ($this->value===NULL && $autoCreate && ! isset($this->_overrides['value']) ) {
			$this->value = $this->createValue();
		}
		return $this->value;
	}
	
	protected function createValue() {
		return '';
	}

	public function setValue($value) {
		$this->value = $this->validateValue($value);
	}

	protected function validateValue($value) {
		if (!is_string($value)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'value', 'string'));
		}

		if (strlen($value) < 1) {
			throw new \Exception(sprintf('Supplied %s value was shorter than the minimum (%d)', 'EventingKeyVersionId', 1));
		}

		if (strlen($value) > 50) {
			throw new \Exception(sprintf('Supplied %s value was longer than the maximum (%d)', 'EventingKeyVersionId', 50));
		}

		if (!preg_match('/^^[a-zA-Z0-9-]*$$/', $value)) {
			throw new \Exception(sprintf('Supplied %s value did not match the right pattern.', 'EventingKeyVersionId', '^[a-zA-Z0-9-]*$'));
		}
	
		return $value;
	}

	public function __toString() {
		return (string) $this->value;
	}
} // end class EventingKeyVersionId
