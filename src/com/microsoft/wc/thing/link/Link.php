<?php
namespace com\microsoft\wc\thing\link;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.link", prefix="")
 * })
 * @XmlEntity	(xml="link")
 */
class Link extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * Defines the schema for a web link saved as a favorite inMicrosoft HealthVault.
	 */

	const ID = 'd4b48e6b-50fa-4ba8-ac73-7d64a68dc328';
	const NAME = 'Link';

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlText	(type="string", name="url")
	 */
	protected $url;

	/**
	 * @XmlText	(type="string", name="title")
	 */
	protected $title;

	public function __construct($url = NULL, $title = NULL) {
		$this->url = ($url===NULL) ? NULL : $this->validateUrl($url);
		$this->title = ($title===NULL) ? NULL : $this->validateTitle($title);
	}

	public function getUrl($autoCreate = TRUE) {
		if ($this->url===NULL && $autoCreate && ! isset($this->_overrides['url']) ) {
			$this->url = $this->createUrl();
		}
		return $this->url;
	}
	
	protected function createUrl() {
		return '';
	}

	public function setUrl($url) {
		$this->url = $this->validateUrl($url);
	}

	protected function validateUrl($url) {
		if (!is_string($url)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'url', 'string'));
		}
	
		return $url;
	}

	public function getTitle($autoCreate = TRUE) {
		if ($this->title===NULL && $autoCreate && ! isset($this->_overrides['title']) ) {
			$this->title = $this->createTitle();
		}
		return $this->title;
	}
	
	protected function createTitle() {
		return '';
	}

	public function setTitle($title) {
		$this->title = $this->validateTitle($title);
	}

	protected function validateTitle($title) {
		if ( ! is_string($title) && ! is_null($title) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'title', 'string'));
		}
	
		return $title;
	}
} // end class Link
