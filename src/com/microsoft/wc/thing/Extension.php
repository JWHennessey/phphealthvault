<?php
namespace com\microsoft\wc\thing;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing", prefix="wc-thing")
 * })
 * @XmlEntity	(xml="extension")
 */
class Extension {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\AnyMixed", collection="true", name="*")
	 */
	protected $any;

	/**
	 * @XmlAttribute	(type="string", name="source")
	 */
	protected $source;

	/**
	 * @XmlAttribute	(type="string", name="ver")
	 */
	protected $ver;

	/**
	 * @XmlAttribute	(type="string", name="logo")
	 */
	protected $logo;

	/**
	 * @XmlAttribute	(type="string", name="xsl")
	 */
	protected $xsl;

	public function __construct($any = NULL, $source = NULL, $ver = NULL, $logo = NULL, $xsl = NULL) {
		$this->any = ($any===NULL) ? NULL : $this->validateAny($any);
		$this->source = ($source===NULL) ? NULL : $this->validateSource($source);
		$this->ver = ($ver===NULL) ? NULL : $this->validateVer($ver);
		$this->logo = ($logo===NULL) ? NULL : $this->validateLogo($logo);
		$this->xsl = ($xsl===NULL) ? NULL : $this->validateXsl($xsl);
	}

	public function getAny($autoCreate = TRUE) {
		if ($this->any===NULL && $autoCreate && ! isset($this->_overrides['any']) ) {
			$this->any = $this->createAny();
		}
		return $this->any;
	}
	
	protected function createAny() {
		return array();
	}

	public function setAny($any) {
		$this->any = $this->validateAny($any);
	}

	protected function validateAny($any) {
		$count = count($any);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'any', 0));
		}
		if ( ! empty($any) ) {
			foreach ($any as $entry) {
				if ( ! is_object($entry) && ! is_null($entry) ) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'any', 'AnyMixed'));
				}
			}
		}
	
		return $any;
	}

	public function addAny($any) {
		$this->any[] = $this->validateAnyType($any);
	}

	protected function validateAnyType($any) {
		if ( ! is_object($any) && ! is_null($any) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'any', 'AnyMixed'));
		}
	
		return $any;
	}

	public function getSource($autoCreate = TRUE) {
		if ($this->source===NULL && $autoCreate && ! isset($this->_overrides['source']) ) {
			$this->source = $this->createSource();
		}
		return $this->source;
	}
	
	protected function createSource() {
		return '';
	}

	public function setSource($source) {
		$this->source = $this->validateSource($source);
	}

	protected function validateSource($source) {
		if (!is_string($source)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'source', 'string'));
		}
	
		return $source;
	}

	public function getVer($autoCreate = TRUE) {
		if ($this->ver===NULL && $autoCreate && ! isset($this->_overrides['ver']) ) {
			$this->ver = $this->createVer();
		}
		return $this->ver;
	}
	
	protected function createVer() {
		return '';
	}

	public function setVer($ver) {
		$this->ver = $this->validateVer($ver);
	}

	protected function validateVer($ver) {
		if ( ! is_string($ver) && ! is_null($ver) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'ver', 'string'));
		}
	
		return $ver;
	}

	public function getLogo($autoCreate = TRUE) {
		if ($this->logo===NULL && $autoCreate && ! isset($this->_overrides['logo']) ) {
			$this->logo = $this->createLogo();
		}
		return $this->logo;
	}
	
	protected function createLogo() {
		return '';
	}

	public function setLogo($logo) {
		$this->logo = $this->validateLogo($logo);
	}

	protected function validateLogo($logo) {
		if ( ! is_string($logo) && ! is_null($logo) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'logo', 'string'));
		}
	
		return $logo;
	}

	public function getXsl($autoCreate = TRUE) {
		if ($this->xsl===NULL && $autoCreate && ! isset($this->_overrides['xsl']) ) {
			$this->xsl = $this->createXsl();
		}
		return $this->xsl;
	}
	
	protected function createXsl() {
		return '';
	}

	public function setXsl($xsl) {
		$this->xsl = $this->validateXsl($xsl);
	}

	protected function validateXsl($xsl) {
		if ( ! is_string($xsl) && ! is_null($xsl) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'xsl', 'string'));
		}
	
		return $xsl;
	}
} // end class Extension
