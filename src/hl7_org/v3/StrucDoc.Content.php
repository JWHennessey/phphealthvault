<?php
namespace hl7_org\v3;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:hl7-org:v3", prefix="")
 * })
 * @XmlEntity	(xml="StrucDoc.Content")
 */
class StrucDoc.Content {
	/**
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\StrucDoc.Content", collection="true", name="content")
	 */
	protected $content;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\StrucDoc.LinkHtml", collection="true", name="linkHtml")
	 */
	protected $linkHtml;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\StrucDoc.Sub", collection="true", name="sub")
	 */
	protected $sub;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\StrucDoc.Sup", collection="true", name="sup")
	 */
	protected $sup;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\StrucDoc.Br", collection="true", name="br")
	 */
	protected $br;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\StrucDoc.Footnote", collection="true", name="footnote")
	 */
	protected $footnote;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\StrucDoc.FootnoteRef", collection="true", name="footnoteRef")
	 */
	protected $footnoteRef;

	/**
	 * @XmlElement	(type="\org\w3\www\_2001\XMLSchema\StrucDoc.RenderMultiMedia", collection="true", name="renderMultiMedia")
	 */
	protected $renderMultiMedia;

	/**
	 * @XmlAttribute	(type="string", name="ID")
	 */
	protected $iD;

	/**
	 * @XmlAttribute	(type="string", name="language")
	 */
	protected $language;

	/**
	 * @XmlAttribute	(type="string", name="styleCode")
	 */
	protected $styleCode;

	/**
	 * @XmlAttribute	(type="string", name="revised")
	 */
	protected $revised;

	public function __construct($content = NULL, $linkHtml = NULL, $sub = NULL, $sup = NULL, $br = NULL, $footnote = NULL, $footnoteRef = NULL, $renderMultiMedia = NULL, $iD = NULL, $language = NULL, $styleCode = NULL, $revised = NULL) {
		$this->content = ($content===NULL) ? NULL : $this->validateContent($content);
		$this->linkHtml = ($linkHtml===NULL) ? NULL : $this->validateLinkHtml($linkHtml);
		$this->sub = ($sub===NULL) ? NULL : $this->validateSub($sub);
		$this->sup = ($sup===NULL) ? NULL : $this->validateSup($sup);
		$this->br = ($br===NULL) ? NULL : $this->validateBr($br);
		$this->footnote = ($footnote===NULL) ? NULL : $this->validateFootnote($footnote);
		$this->footnoteRef = ($footnoteRef===NULL) ? NULL : $this->validateFootnoteRef($footnoteRef);
		$this->renderMultiMedia = ($renderMultiMedia===NULL) ? NULL : $this->validateRenderMultiMedia($renderMultiMedia);
		$this->iD = ($iD===NULL) ? NULL : $this->validateID($iD);
		$this->language = ($language===NULL) ? NULL : $this->validateLanguage($language);
		$this->styleCode = ($styleCode===NULL) ? NULL : $this->validateStyleCode($styleCode);
		$this->revised = ($revised===NULL) ? NULL : $this->validateRevised($revised);
	}

	public function getContent($autoCreate = TRUE) {
		if ($this->content===NULL && $autoCreate && ! isset($this->_overrides['content']) ) {
			$this->content = $this->createContent();
		}
		return $this->content;
	}
	
	protected function createContent() {
		return array();
	}

	public function setContent($content) {
		$this->content = $this->validateContent($content);
	}

	protected function validateContent($content) {
		$count = count($content);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'content', 0));
		}
		if ( ! empty($content) ) {
			foreach ($content as $entry) {
			}
		}
	
		return $content;
	}

	public function addContent($content) {
		$this->content[] = $this->validateContentType($content);
	}

	protected function validateContentType($content) {
	
		return $content;
	}

	public function getLinkHtml($autoCreate = TRUE) {
		if ($this->linkHtml===NULL && $autoCreate && ! isset($this->_overrides['linkHtml']) ) {
			$this->linkHtml = $this->createLinkHtml();
		}
		return $this->linkHtml;
	}
	
	protected function createLinkHtml() {
		return array();
	}

	public function setLinkHtml($linkHtml) {
		$this->linkHtml = $this->validateLinkHtml($linkHtml);
	}

	protected function validateLinkHtml($linkHtml) {
		$count = count($linkHtml);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'linkHtml', 0));
		}
		if ( ! empty($linkHtml) ) {
			foreach ($linkHtml as $entry) {
			}
		}
	
		return $linkHtml;
	}

	public function addLinkHtml($linkHtml) {
		$this->linkHtml[] = $this->validateLinkHtmlType($linkHtml);
	}

	protected function validateLinkHtmlType($linkHtml) {
	
		return $linkHtml;
	}

	public function getSub($autoCreate = TRUE) {
		if ($this->sub===NULL && $autoCreate && ! isset($this->_overrides['sub']) ) {
			$this->sub = $this->createSub();
		}
		return $this->sub;
	}
	
	protected function createSub() {
		return array();
	}

	public function setSub($sub) {
		$this->sub = $this->validateSub($sub);
	}

	protected function validateSub($sub) {
		$count = count($sub);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'sub', 0));
		}
		if ( ! empty($sub) ) {
			foreach ($sub as $entry) {
			}
		}
	
		return $sub;
	}

	public function addSub($sub) {
		$this->sub[] = $this->validateSubType($sub);
	}

	protected function validateSubType($sub) {
	
		return $sub;
	}

	public function getSup($autoCreate = TRUE) {
		if ($this->sup===NULL && $autoCreate && ! isset($this->_overrides['sup']) ) {
			$this->sup = $this->createSup();
		}
		return $this->sup;
	}
	
	protected function createSup() {
		return array();
	}

	public function setSup($sup) {
		$this->sup = $this->validateSup($sup);
	}

	protected function validateSup($sup) {
		$count = count($sup);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'sup', 0));
		}
		if ( ! empty($sup) ) {
			foreach ($sup as $entry) {
			}
		}
	
		return $sup;
	}

	public function addSup($sup) {
		$this->sup[] = $this->validateSupType($sup);
	}

	protected function validateSupType($sup) {
	
		return $sup;
	}

	public function getBr($autoCreate = TRUE) {
		if ($this->br===NULL && $autoCreate && ! isset($this->_overrides['br']) ) {
			$this->br = $this->createBr();
		}
		return $this->br;
	}
	
	protected function createBr() {
		return array();
	}

	public function setBr($br) {
		$this->br = $this->validateBr($br);
	}

	protected function validateBr($br) {
		$count = count($br);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'br', 0));
		}
		if ( ! empty($br) ) {
			foreach ($br as $entry) {
			}
		}
	
		return $br;
	}

	public function addBr($br) {
		$this->br[] = $this->validateBrType($br);
	}

	protected function validateBrType($br) {
	
		return $br;
	}

	public function getFootnote($autoCreate = TRUE) {
		if ($this->footnote===NULL && $autoCreate && ! isset($this->_overrides['footnote']) ) {
			$this->footnote = $this->createFootnote();
		}
		return $this->footnote;
	}
	
	protected function createFootnote() {
		return array();
	}

	public function setFootnote($footnote) {
		$this->footnote = $this->validateFootnote($footnote);
	}

	protected function validateFootnote($footnote) {
		$count = count($footnote);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'footnote', 0));
		}
		if ( ! empty($footnote) ) {
			foreach ($footnote as $entry) {
			}
		}
	
		return $footnote;
	}

	public function addFootnote($footnote) {
		$this->footnote[] = $this->validateFootnoteType($footnote);
	}

	protected function validateFootnoteType($footnote) {
	
		return $footnote;
	}

	public function getFootnoteRef($autoCreate = TRUE) {
		if ($this->footnoteRef===NULL && $autoCreate && ! isset($this->_overrides['footnoteRef']) ) {
			$this->footnoteRef = $this->createFootnoteRef();
		}
		return $this->footnoteRef;
	}
	
	protected function createFootnoteRef() {
		return array();
	}

	public function setFootnoteRef($footnoteRef) {
		$this->footnoteRef = $this->validateFootnoteRef($footnoteRef);
	}

	protected function validateFootnoteRef($footnoteRef) {
		$count = count($footnoteRef);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'footnoteRef', 0));
		}
		if ( ! empty($footnoteRef) ) {
			foreach ($footnoteRef as $entry) {
			}
		}
	
		return $footnoteRef;
	}

	public function addFootnoteRef($footnoteRef) {
		$this->footnoteRef[] = $this->validateFootnoteRefType($footnoteRef);
	}

	protected function validateFootnoteRefType($footnoteRef) {
	
		return $footnoteRef;
	}

	public function getRenderMultiMedia($autoCreate = TRUE) {
		if ($this->renderMultiMedia===NULL && $autoCreate && ! isset($this->_overrides['renderMultiMedia']) ) {
			$this->renderMultiMedia = $this->createRenderMultiMedia();
		}
		return $this->renderMultiMedia;
	}
	
	protected function createRenderMultiMedia() {
		return array();
	}

	public function setRenderMultiMedia($renderMultiMedia) {
		$this->renderMultiMedia = $this->validateRenderMultiMedia($renderMultiMedia);
	}

	protected function validateRenderMultiMedia($renderMultiMedia) {
		$count = count($renderMultiMedia);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'renderMultiMedia', 0));
		}
		if ( ! empty($renderMultiMedia) ) {
			foreach ($renderMultiMedia as $entry) {
			}
		}
	
		return $renderMultiMedia;
	}

	public function addRenderMultiMedia($renderMultiMedia) {
		$this->renderMultiMedia[] = $this->validateRenderMultiMediaType($renderMultiMedia);
	}

	protected function validateRenderMultiMediaType($renderMultiMedia) {
	
		return $renderMultiMedia;
	}

	public function getID($autoCreate = TRUE) {
		if ($this->iD===NULL && $autoCreate && ! isset($this->_overrides['iD']) ) {
			$this->iD = $this->createID();
		}
		return $this->iD;
	}
	
	protected function createID() {
		return NULL;
	}

	public function setID($iD) {
		$this->iD = $this->validateID($iD);
	}

	protected function validateID($iD) {
		if (!is_string($iD)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'iD', 'string'));
		}
	
		return $iD;
	}

	public function getLanguage($autoCreate = TRUE) {
		if ($this->language===NULL && $autoCreate && ! isset($this->_overrides['language']) ) {
			$this->language = $this->createLanguage();
		}
		return $this->language;
	}
	
	protected function createLanguage() {
		return NULL;
	}

	public function setLanguage($language) {
		$this->language = $this->validateLanguage($language);
	}

	protected function validateLanguage($language) {
		if (!is_string($language)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'language', 'string'));
		}
	
		return $language;
	}

	public function getStyleCode($autoCreate = TRUE) {
		if ($this->styleCode===NULL && $autoCreate && ! isset($this->_overrides['styleCode']) ) {
			$this->styleCode = $this->createStyleCode();
		}
		return $this->styleCode;
	}
	
	protected function createStyleCode() {
		return NULL;
	}

	public function setStyleCode($styleCode) {
		$this->styleCode = $this->validateStyleCode($styleCode);
	}

	protected function validateStyleCode($styleCode) {
		if (!is_string($styleCode)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'styleCode', 'string'));
		}
	
		return $styleCode;
	}

	public function getRevised($autoCreate = TRUE) {
		if ($this->revised===NULL && $autoCreate && ! isset($this->_overrides['revised']) ) {
			$this->revised = $this->createRevised();
		}
		return $this->revised;
	}
	
	protected function createRevised() {
		return NULL;
	}

	public function setRevised($revised) {
		$this->revised = $this->validateRevised($revised);
	}

	protected function validateRevised($revised) {
		if (!is_string($revised)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'revised', 'string'));
		}
	
		return $revised;
	}
} // end class StrucDoc.Content
