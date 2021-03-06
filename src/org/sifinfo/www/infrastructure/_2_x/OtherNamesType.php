<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="OtherNamesType")
 */
class OtherNamesType {
	/**
	 * Previous, alternate or other names or aliases associated with a person.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\Name", collection="true", name="Name")
	 */
	protected $name;

	public function __construct($name = NULL) {
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
	}

	public function getName($autoCreate = TRUE) {
		if ($this->name===NULL && $autoCreate && ! isset($this->_overrides['name']) ) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return array();
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if ( ! is_array ($name) ) {
			$name = array($name);
		}
		$count = count($name);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'name', 1));
		}
		foreach ($name as $entry) {
			if (!($entry instanceof \org\sifinfo\www\infrastructure\_2_x\Name )) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'name', 'Name'));
			}
		}
	
		return $name;
	}

	public function addName($name) {
		$this->name[] = $name;
	}
} // end class OtherNamesType
