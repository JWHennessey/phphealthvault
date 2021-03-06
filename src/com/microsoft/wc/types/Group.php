<?php
namespace com\microsoft\wc\types;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.types", prefix="t")
 * })
 * @XmlEntity	(xml="Group")
 */
class Group {
	/**
	 * Defines a group to which on or more people may be a member.
	 * Groups are used for security purposes. They make it easier to grant access rights to a Microsoft HealthVault web service method, authorize people to a record, or grant access rights to particular data in a health record. They are not meant to be used as distribution lists for email or other forms of communication. For example, all the doctors at a particular clinic may belong to a group to which an individual may grant permission to see medications in their health record.
	 */

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\String255", name="name")
	 */
	protected $name;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Guid", name="id")
	 */
	protected $id;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\EmailAddress", name="contact-email")
	 */
	protected $contactEmail;

	public function __construct($name = NULL, $id = NULL, $contactEmail = NULL) {
		$this->name = ($name===NULL) ? NULL : $this->validateName($name);
		$this->id = ($id===NULL) ? NULL : $this->validateId($id);
		$this->contactEmail = ($contactEmail===NULL) ? NULL : $this->validateContactEmail($contactEmail);
	}

	public function getName($autoCreate = TRUE) {
		if ($this->name===NULL && $autoCreate && ! isset($this->_overrides['name']) ) {
			$this->name = $this->createName();
		}
		return $this->name;
	}
	
	protected function createName() {
		return new \com\microsoft\wc\types\String255();
	}

	public function setName($name) {
		$this->name = $this->validateName($name);
	}

	protected function validateName($name) {
		if ( ! $name instanceof \com\microsoft\wc\types\String255 ) {
			$name = new \com\microsoft\wc\types\String255 ($name);
		}
	
		return $name;
	}

	public function getId($autoCreate = TRUE) {
		if ($this->id===NULL && $autoCreate && ! isset($this->_overrides['id']) ) {
			$this->id = $this->createId();
		}
		return $this->id;
	}
	
	protected function createId() {
		return new \com\microsoft\wc\types\Guid();
	}

	public function setId($id) {
		$this->id = $this->validateId($id);
	}

	protected function validateId($id) {
		if ( ! $id instanceof \com\microsoft\wc\types\Guid ) {
			$id = new \com\microsoft\wc\types\Guid ($id);
		}
	
		return $id;
	}

	public function getContactEmail($autoCreate = TRUE) {
		if ($this->contactEmail===NULL && $autoCreate && ! isset($this->_overrides['contactEmail']) ) {
			$this->contactEmail = $this->createContactEmail();
		}
		return $this->contactEmail;
	}
	
	protected function createContactEmail() {
		return new \com\microsoft\wc\types\EmailAddress();
	}

	public function setContactEmail($contactEmail) {
		$this->contactEmail = $this->validateContactEmail($contactEmail);
	}

	protected function validateContactEmail($contactEmail) {
		if ( ! $contactEmail instanceof \com\microsoft\wc\types\EmailAddress ) {
			$contactEmail = new \com\microsoft\wc\types\EmailAddress ($contactEmail);
		}
	
		return $contactEmail;
	}
} // end class Group
