<?php
namespace com\microsoft\wc\vocab;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.vocab", prefix="wc-vocab")
 * })
 * @XmlEntity	(xml="medication-routes")
 */
class MedicationRoutes {
	/**
	 * The routes of a medication.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", collection="true", name="route")
	 */
	protected $route;

	public function __construct($route = NULL) {
		$this->route = ($route===NULL) ? NULL : $this->validateRoute($route);
	}

	public function getRoute($autoCreate = TRUE) {
		if ($this->route===NULL && $autoCreate && ! isset($this->_overrides['route']) ) {
			$this->route = $this->createRoute();
		}
		return $this->route;
	}
	
	protected function createRoute() {
		return array();
	}

	public function setRoute($route) {
		$this->route = $this->validateRoute($route);
	}

	protected function validateRoute($route) {
		if ( ! is_array ($route) ) {
			$route = array($route);
		}
		$count = count($route);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'route', 1));
		}
		foreach ($route as $entry) {
			if (!($entry instanceof \com\microsoft\wc\types\CodableValue )) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'route', 'codable-value'));
			}
		}
	
		return $route;
	}

	public function addRoute($route) {
		$this->route[] = $route;
	}
} // end class MedicationRoutes
