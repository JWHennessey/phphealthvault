<?php
namespace com\microsoft\wc\methods\GetThings;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.GetThings", prefix="")
 * })
 * @XmlEntity	(xml="ThingFormatSpec")
 */
class ThingFormatSpec {
	/**
	 * Specifies how the results are returned.
	 * The section element specifies which sections are returned. The xml element specifies how the actual thing data is formatted.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\GetThings\ThingSectionSpec", collection="true", name="section")
	 */
	protected $section;

	/**
	 * @XmlText	(type="string", collection="true", name="xml")
	 */
	protected $xml;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", collection="true", name="type-version-format")
	 */
	protected $typeVersionFormat;

	public function __construct($section = NULL, $xml = NULL, $typeVersionFormat = NULL) {
		$this->section = ($section===NULL) ? NULL : $this->validateSection($section);
		$this->xml = ($xml===NULL) ? NULL : $this->validateXml($xml);
		$this->typeVersionFormat = ($typeVersionFormat===NULL) ? NULL : $this->validateTypeVersionFormat($typeVersionFormat);
	}

	public function getSection($autoCreate = TRUE) {
		if ($this->section===NULL && $autoCreate && ! isset($this->_overrides['section']) ) {
			$this->section = $this->createSection();
		}
		return $this->section;
	}
	
	protected function createSection() {
		return array();
	}

	public function setSection($section) {
		$this->section = $this->validateSection($section);
	}

	protected function validateSection($section) {
		$count = count($section);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'section', 0));
		}
		if ( ! empty($section) ) {
			foreach ($section as $entry) {
			}
		}
	
		return $section;
	}

	public function addSection($section) {
		$this->section[] = $this->validateSectionType($section);
	}

	protected function validateSectionType($section) {
	
		return $section;
	}

	public function getXml($autoCreate = TRUE) {
		if ($this->xml===NULL && $autoCreate && ! isset($this->_overrides['xml']) ) {
			$this->xml = $this->createXml();
		}
		return $this->xml;
	}
	
	protected function createXml() {
		return array();
	}

	public function setXml($xml) {
		$this->xml = $this->validateXml($xml);
	}

	protected function validateXml($xml) {
		$count = count($xml);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'xml', 0));
		}
		if ( ! empty($xml) ) {
			foreach ($xml as $entry) {
				if ( ! is_string($entry) && ! is_null($entry) ) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'xml', 'string'));
				}
			}
		}
	
		return $xml;
	}

	public function addXml($xml) {
		$this->xml[] = $this->validateXmlType($xml);
	}

	protected function validateXmlType($xml) {
		if ( ! is_string($xml) && ! is_null($xml) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'xml', 'string'));
		}
	
		return $xml;
	}

	public function getTypeVersionFormat($autoCreate = TRUE) {
		if ($this->typeVersionFormat===NULL && $autoCreate && ! isset($this->_overrides['typeVersionFormat']) ) {
			$this->typeVersionFormat = $this->createTypeVersionFormat();
		}
		return $this->typeVersionFormat;
	}
	
	protected function createTypeVersionFormat() {
		return array();
	}

	public function setTypeVersionFormat($typeVersionFormat) {
		$this->typeVersionFormat = $this->validateTypeVersionFormat($typeVersionFormat);
	}

	protected function validateTypeVersionFormat($typeVersionFormat) {
		if ( $typeVersionFormat === FALSE ) {
			$this->_overrides['typeVersionFormat'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($typeVersionFormat) && ! is_null($typeVersionFormat) ) {
			$typeVersionFormat = array($typeVersionFormat);
		}

		unset ($this->_overrides['typeVersionFormat']);
		$count = count($typeVersionFormat);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'typeVersionFormat', 0));
		}
		if ( ! empty($typeVersionFormat) ) {
			foreach ($typeVersionFormat as $entry) {
				if (!($entry instanceof \com\microsoft\wc\types\Guid )) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'typeVersionFormat', 'guid'));
				}
			}
		}
	
		return $typeVersionFormat;
	}

	public function addTypeVersionFormat($typeVersionFormat) {
		$this->typeVersionFormat[] = $typeVersionFormat;
	}
} // end class ThingFormatSpec
