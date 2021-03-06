<?php
namespace com\microsoft\wc\methods\GetThingType;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.GetThingType", prefix="")
 * })
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\request\Info {
	/**
	 * The element of the request that contains the method specific parameters.
	 * All requests contain the info element to pass parameters that are specific to each method. If the method does not define an info element, the method does not take any parameters.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", collection="true", name="id")
	 */
	protected $id;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\methods\GetThingType\ThingTypeSectionSpec", collection="true", name="section")
	 */
	protected $section;

	/**
	 * @XmlText	(type="string", collection="true", name="image-type")
	 */
	protected $imageType;

	/**
	 * @XmlText	(type="string", name="last-client-refresh")
	 */
	protected $lastClientRefresh;

	public function __construct($id = NULL, $section = NULL, $imageType = NULL, $lastClientRefresh = NULL) {
		$this->id = ($id===NULL) ? NULL : $this->validateId($id);
		$this->section = ($section===NULL) ? NULL : $this->validateSection($section);
		$this->imageType = ($imageType===NULL) ? NULL : $this->validateImageType($imageType);
		$this->lastClientRefresh = ($lastClientRefresh===NULL) ? NULL : $this->validateLastClientRefresh($lastClientRefresh);
	}

	public function getId($autoCreate = TRUE) {
		if ($this->id===NULL && $autoCreate && ! isset($this->_overrides['id']) ) {
			$this->id = $this->createId();
		}
		return $this->id;
	}
	
	protected function createId() {
		return array();
	}

	public function setId($id) {
		$this->id = $this->validateId($id);
	}

	protected function validateId($id) {
		if ( $id === FALSE ) {
			$this->_overrides['id'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($id) && ! is_null($id) ) {
			$id = array($id);
		}

		unset ($this->_overrides['id']);
		$count = count($id);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'id', 0));
		}
		if ( ! empty($id) ) {
			foreach ($id as $entry) {
				if (!($entry instanceof \com\microsoft\wc\types\Guid )) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'id', 'guid'));
				}
			}
		}
	
		return $id;
	}

	public function addId($id) {
		$this->id[] = $id;
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
		if ($count > 7) {
			throw new \Exception(sprintf('Supplied %s array has more than the required number (%d) of entries.', 'section', 7));
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

	public function getImageType($autoCreate = TRUE) {
		if ($this->imageType===NULL && $autoCreate && ! isset($this->_overrides['imageType']) ) {
			$this->imageType = $this->createImageType();
		}
		return $this->imageType;
	}
	
	protected function createImageType() {
		return array();
	}

	public function setImageType($imageType) {
		$this->imageType = $this->validateImageType($imageType);
	}

	protected function validateImageType($imageType) {
		$count = count($imageType);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'imageType', 0));
		}
		if ( ! empty($imageType) ) {
			foreach ($imageType as $entry) {
				if ( ! is_string($entry) && ! is_null($entry) ) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'imageType', 'string'));
				}
			}
		}
	
		return $imageType;
	}

	public function addImageType($imageType) {
		$this->imageType[] = $this->validateImageTypeType($imageType);
	}

	protected function validateImageTypeType($imageType) {
		if ( ! is_string($imageType) && ! is_null($imageType) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'imageType', 'string'));
		}
	
		return $imageType;
	}

	public function getLastClientRefresh($autoCreate = TRUE) {
		if ($this->lastClientRefresh===NULL && $autoCreate && ! isset($this->_overrides['lastClientRefresh']) ) {
			$this->lastClientRefresh = $this->createLastClientRefresh();
		}
		return $this->lastClientRefresh;
	}
	
	protected function createLastClientRefresh() {
		return NULL;
	}

	public function setLastClientRefresh($lastClientRefresh) {
		$this->lastClientRefresh = $this->validateLastClientRefresh($lastClientRefresh);
	}

	protected function validateLastClientRefresh($lastClientRefresh) {
		if ( ! is_string($lastClientRefresh) && ! is_null($lastClientRefresh) ) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'lastClientRefresh', 'string'));
		}
	
		return $lastClientRefresh;
	}
} // end class Info
