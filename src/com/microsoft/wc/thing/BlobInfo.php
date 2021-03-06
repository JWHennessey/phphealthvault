<?php
namespace com\microsoft\wc\thing;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing", prefix="wc-thing")
 * })
 * @XmlEntity	(xml="BlobInfo")
 */
class BlobInfo {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringz255", name="name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringz1024", name="content-type")
	 */
	protected $contentType;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\BlobHashInfo", name="hash-info")
	 */
	protected $hashInfo;

	public function __construct($name = NULL, $contentType = NULL, $hashInfo = NULL) {
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->contentType = ($contentType===NULL) ? NULL : $this->validateContentType($contentType);
		$this->hashInfo = ($hashInfo===NULL) ? NULL : $this->validateHashInfo($hashInfo);
	}

	public function getName($autoCreate = TRUE) {
		if ($this->name===NULL && $autoCreate && ! isset($this->_overrides['name']) ) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return new \com\microsoft\wc\types\Stringz255();
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if ( ! $name instanceof \com\microsoft\wc\types\Stringz255 ) {
			$name = new \com\microsoft\wc\types\Stringz255 ($name);
		}
	
		return $name;
	}

	public function getContentType($autoCreate = TRUE) {
		if ($this->contentType===NULL && $autoCreate && ! isset($this->_overrides['contentType']) ) {
			$this->contentType = $this->createContentType();
		}
		return $this->contentType;
	}
	
	protected function createContentType() {
		return new \com\microsoft\wc\types\Stringz1024();
	}

	public function setContentType($contentType) {
		$this->contentType = $this->validateContentType($contentType);
	}

	protected function validateContentType($contentType) {
		if ( ! $contentType instanceof \com\microsoft\wc\types\Stringz1024 ) {
			$contentType = new \com\microsoft\wc\types\Stringz1024 ($contentType);
		}
	
		return $contentType;
	}

	public function getHashInfo($autoCreate = TRUE) {
		if ($this->hashInfo===NULL && $autoCreate && ! isset($this->_overrides['hashInfo']) ) {
			$this->hashInfo = $this->createHashInfo();
		}
		return $this->hashInfo;
	}
	
	protected function createHashInfo() {
		return new \com\microsoft\wc\thing\BlobHashInfo();
	}

	public function setHashInfo($hashInfo) {
		$this->hashInfo = $this->validateHashInfo($hashInfo);
	}

	protected function validateHashInfo($hashInfo) {
		if ( $hashInfo === FALSE ) {
			$this->_overrides['hashInfo'] = TRUE;
			return NULL;
		}

		if ( ! $hashInfo instanceof \com\microsoft\wc\thing\BlobHashInfo  && ! is_null($hashInfo) ) {
			$hashInfo = new \com\microsoft\wc\thing\BlobHashInfo ($hashInfo);
		}

		unset ($this->_overrides['hashInfo']);
	
		return $hashInfo;
	}
} // end class BlobInfo
