<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="StudentRecordPackageType")
 */
class StudentRecordPackageType extends AbstractContentPackageType {
	/**
	 * Wraps content or a record not defined by SIF but that is part of a student's records.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlAttribute	(type="string", name="SIF_RefId")
	 */
	protected $sifRefId;

	/**
	 * @XmlAttribute	(type="string", name="SIF_RefObject")
	 */
	protected $sifRefObject;

	public function __construct($sifRefId = NULL, $sifRefObject = NULL) {
		$this->sifRefId = ($sifRefId===NULL) ? NULL : $this->validateSifRefId($sifRefId);
		$this->sifRefObject = ($sifRefObject===NULL) ? NULL : $this->validateSifRefObject($sifRefObject);
	}

	public function getSifRefId($autoCreate = TRUE) {
		if ($this->sifRefId===NULL && $autoCreate && ! isset($this->_overrides['sifRefId']) ) {
			$this->sifRefId = $this->createSifRefId();
		}
		return $this->sifRefId;
	}
	
	protected function createSifRefId() {
		return NULL;
	}

	public function setSifRefId($sifRefId) {
		$this->sifRefId = $this->validateSifRefId($sifRefId);
	}

	protected function validateSifRefId($sifRefId) {
	
		return $sifRefId;
	}

	public function getSifRefObject($autoCreate = TRUE) {
		if ($this->sifRefObject===NULL && $autoCreate && ! isset($this->_overrides['sifRefObject']) ) {
			$this->sifRefObject = $this->createSifRefObject();
		}
		return $this->sifRefObject;
	}
	
	protected function createSifRefObject() {
		return NULL;
	}

	public function setSifRefObject($sifRefObject) {
		$this->sifRefObject = $this->validateSifRefObject($sifRefObject);
	}

	protected function validateSifRefObject($sifRefObject) {
		if (!is_string($sifRefObject)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'sifRefObject', 'string'));
		}
	
		return $sifRefObject;
	}
} // end class StudentRecordPackageType
