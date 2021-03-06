<?php
namespace com\microsoft\wc\thing\file;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.file", prefix="")
 * })
 * @XmlEntity	(xml="file")
 */
class File extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Defines the schema for a file which can be uploaded toMicrosoft HealthVault.
	 * Files are stored as encoded data in the "other data" section of things. Most files are stored as base64 encodedbinary with the appropriate content-type set for thetype of the file.
	 */

	const ID = 'bd0403c5-4ae2-4b0e-a8db-1888678e4528';
	const NAME = 'File';

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\String255", name="name")
	 */
	protected $name;

	/**
	 * @XmlText	(type="integer", name="size")
	 */
	protected $size;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\CodableValue", name="content-type")
	 */
	protected $contentType;

	public function __construct($name = NULL, $size = NULL, $contentType = NULL) {
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->size = ($size===NULL) ? NULL : $this->validateSize($size);
		$this->contentType = ($contentType===NULL) ? NULL : $this->validateContentType($contentType);
	}

	public function getName($autoCreate = TRUE) {
		if ($this->name===NULL && $autoCreate && ! isset($this->_overrides['name']) ) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return new \com\microsoft\wc\thing\types\String255();
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if ( ! $name instanceof \com\microsoft\wc\thing\types\String255 ) {
			$name = new \com\microsoft\wc\thing\types\String255 ($name);
		}
	
		return $name;
	}

	public function getSize($autoCreate = TRUE) {
		if ($this->size===NULL && $autoCreate && ! isset($this->_overrides['size']) ) {
			$this->size = $this->createSize();
		}
		return $this->size;
	}
	
	protected function createSize() {
		return NULL;
	}

	public function setSize($size) {
		$this->size = $this->validateSize($size);
	}

	protected function validateSize($size) {
		$isValid = FALSE;
		if ( is_integer($size) ) {
			$isValid = TRUE;
		}
		else if ( $size == ($castVar = (integer) $size) ) {
			$isValid = TRUE;
			$size = $castVar;
		}
		if ( ! $isValid ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'size', 'integer'));
		}
	
		return $size;
	}

	public function getContentType($autoCreate = TRUE) {
		if ($this->contentType===NULL && $autoCreate && ! isset($this->_overrides['contentType']) ) {
			$this->contentType = $this->createContentType();
		}
		return $this->contentType;
	}
	
	protected function createContentType() {
		return new \com\microsoft\wc\thing\types\CodableValue();
	}

	public function setContentType($contentType) {
		$this->contentType = $this->validateContentType($contentType);
	}

	protected function validateContentType($contentType) {
		if ( $contentType === FALSE ) {
			$this->_overrides['contentType'] = TRUE;
			return NULL;
		}

		if ( ! $contentType instanceof \com\microsoft\wc\thing\types\CodableValue  && ! is_null($contentType) ) {
			$contentType = new \com\microsoft\wc\thing\types\CodableValue ($contentType);
		}

		unset ($this->_overrides['contentType']);
	
		return $contentType;
	}
} // end class File
