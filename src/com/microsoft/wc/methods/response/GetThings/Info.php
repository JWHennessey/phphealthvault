<?php
namespace com\microsoft\wc\methods\response\GetThings;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.response.GetThings", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\response\AnyMixed {
	/**
	 * Contains the response of the GetThings method request.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\response\GetThings\ThingResponseGroup", collection="true", name="group")
	 */
	protected $group;

	public function __construct($group = NULL) {
		$this->group = ($group===NULL) ? NULL : $this->validateGroup($group);
	}

	public function getGroup($autoCreate = TRUE) {
		if ($this->group===NULL && $autoCreate && ! isset($this->_overrides['group']) ) {
			$this->group = $this->createGroup();
		}
		return $this->group;
	}
	
	protected function createGroup() {
		return array();
	}

	public function setGroup($group) {
		$this->group = $this->validateGroup($group);
	}

	protected function validateGroup($group) {
		if ( ! is_array ($group) ) {
			$group = array($group);
		}
		$count = count($group);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'group', 1));
		}
		foreach ($group as $entry) {
			if (!($entry instanceof \com\microsoft\wc\methods\response\GetThings\ThingResponseGroup )) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'group', 'ThingResponseGroup'));
			}
		}
	
		return $group;
	}

	public function addGroup($group) {
		$this->group[] = $group;
	}
} // end class Info
