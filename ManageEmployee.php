<?php
/**
 * Controller class
 *
 * @author Raimund Ege
 */

// this class is associated with the EmployeeStore and ProjectGateway persistence class
include 'EmployeeStore.php';
include 'ProjectGateway.php';

class ManageEmployee {
	var $empStore;
	var $projStore;
	function __construct() {
		$this->empStore = new EmployeeStore ();
		$this->projStore = new ProjectGateway ();
	}
	public function findEmployee($name) {
		return $this->empStore->findEmployee ( $name );
	}
	public function getEmployee($id) {
		return $this->empStore->getEmployee ( $id );
	}
	public function updateEmployee($emp) {
		return $this->empStore->updateEmployee ( $emp );
	}
	public function deleteEmployee($id) {
		return $this->empStore->deleteEmployee ( $id );
	}
	public function getProjects() {
		return $this->projStore->getProjects ();
	}
}
?>