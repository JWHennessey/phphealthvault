<?php
namespace com\microsoft\wc\thing\contact;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.contact", prefix="")
 * })
 * @XmlEntity	(xml="contact")
 */
class Contact extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * This is the contact information for the person owninga health record in Microsoft HealthVault.
	 * This data should not be confused with the 'person'type which is contact information for an emergencycontact or someone else related to the health record.
	 */

	const ID = '162dd12d-9859-4a66-b75f-96760d67072b';
	const NAME = 'Contact';

	/**
	 * @XmlElement	(type="\com\microsoft\wc\thing\types\Contact", name="contact")
	 */
	protected $contact;

	public function __construct($contact = NULL) {
		$this->contact = ($contact===NULL) ? NULL : $this->validateContact($contact);
	}

	public function getContact() {
		if ($this->contact===NULL) {
			$this->contact = $this->createContact();
		}
		return $this->contact;
	}
	
	protected function createContact() {
		return new \com\microsoft\wc\thing\contact\Contact();
	}

	public function setContact($contact) {
		$this->contact = $this->validateContact($contact);
	}

	protected function validateContact($contact) {
		if ( ! $contact instanceof \com\microsoft\wc\thing\contact\Contact ) {
			$contact = new \com\microsoft\wc\thing\contact\Contact ($contact);
		}
	
		return $contact;
	}
} // end class Contact
