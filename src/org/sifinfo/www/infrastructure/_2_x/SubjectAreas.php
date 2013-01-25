<?php
namespace org\sifinfo\www\infrastructure\_2_x;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="http://www.sifinfo.org/infrastructure/2.x", prefix="")
 * })
 * @XmlEntity	(xml="SubjectAreas")
 */
class SubjectAreas {
	/**
	 */

	/**
	 * @XmlElement	(type="\org\sifinfo\www\infrastructure\_2_x\SubjectArea", collection="true", name="SubjectArea")
	 */
	protected $subjectArea;

	public function __construct($subjectArea = NULL) {
		$this->subjectArea = ($subjectArea===NULL) ? NULL : $this->validateSubjectArea($subjectArea);
	}

	public function getSubjectArea() {
		if ($this->subjectArea===NULL) {
			$this->subjectArea = $this->createSubjectArea();
		}
		return $this->subjectArea;
	}
	
	protected function createSubjectArea() {
		return array();
	}

	public function setSubjectArea($subjectArea) {
		$this->subjectArea = $this->validateSubjectArea($subjectArea);
	}

	protected function validateSubjectArea($subjectArea) {
		if ( ! $subjectArea instanceof \org\sifinfo\www\infrastructure\_2_x\SubjectArea ) {
			$subjectArea = new \org\sifinfo\www\infrastructure\_2_x\SubjectArea ($subjectArea);
		}
		$count = count($subjectArea);
		if ($count < 1) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'subjectArea', 1));
		}
		foreach ($subjectArea as $entry) {
			if (!($entry instanceof SubjectArea)) {
				throw new \Exception(sprintf('Supplied %s value was not %s', 'subjectArea', 'SubjectArea'));
			}
		}
	
		return $subjectArea;
	}

	public function addSubjectArea($subjectArea) {
		$this->subjectArea[] = $subjectArea;
	}
} // end class SubjectAreas