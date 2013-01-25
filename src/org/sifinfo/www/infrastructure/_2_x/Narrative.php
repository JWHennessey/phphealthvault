<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="Narrative")
 */
class Narrative {
	/**
	 */

	/**
	 * @XmlText	(type="integer", name="MaximumSize")
	 */
	protected $maximumSize;

	public function __construct($maximumSize = NULL) {
		$this->maximumSize = ($maximumSize===NULL) ? NULL : $this->validateMaximumSize($maximumSize);
	}

	public function getMaximumSize() {
		if ($this->maximumSize===NULL) {
			$this->maximumSize = $this->createMaximumSize();
		}
		return $this->maximumSize;
	}
	
	protected function createMaximumSize() {
		return NULL;
	}

	public function setMaximumSize($maximumSize) {
		$this->maximumSize = $this->validateMaximumSize($maximumSize);
	}

	protected function validateMaximumSize($maximumSize) {
		if ( ! is_integer($maximumSize) && ! is_null($maximumSize) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'maximumSize', 'integer'));
		}
	
		return $maximumSize;
	}
} // end class Narrative