<?php
namespace com\microsoft\wc\methods\RemoveThings;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.RemoveThings", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\request\Info {
	/**
	 * The element of the request that contains the method specific parameters.
	 * All requests contain the info element to pass parameters that are specific to each method. If the method does not define an info element, the method does not take any parameters.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\ThingKey", collection="true", name="thing-id")
	 */
	protected $thingId;

	public function __construct($thingId = NULL) {
		$this->thingId = ($thingId===NULL) ? NULL : $this->validateThingId($thingId);
	}

	public function getThingId($autoCreate = TRUE) {
		if ($this->thingId===NULL && $autoCreate && ! isset($this->_overrides['thingId']) ) {
			$this->thingId = $this->createThingId();
		}
		return $this->thingId;
	}
	
	protected function createThingId() {
		return array();
	}

	public function setThingId($thingId) {
		$this->thingId = $this->validateThingId($thingId);
	}

	protected function validateThingId($thingId) {
		if ( ! is_array ($thingId) ) {
			$thingId = array($thingId);
		}
		$count = count($thingId);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'thingId', 1));
		}
		foreach ($thingId as $entry) {
			if (!($entry instanceof \com\microsoft\wc\thing\ThingKey )) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'thingId', 'ThingKey'));
			}
		}
	
		return $thingId;
	}

	public function addThingId($thingId) {
		$this->thingId[] = $thingId;
	}
} // end class Info
