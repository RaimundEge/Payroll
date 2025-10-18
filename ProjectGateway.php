<?php
/**
 * Boundary class to Project Database
 *
 * @author Raimund Ege
 */
class ProjectGateway {
	
	// create database connection
	function connect() {
		$servername = "127.0.0.1";
		$username = "demo";
		$password = "demo";
		$dbname = "Payroll";
		
		// Create persistent connection connection
		$conn = new mysqli ( 'p:' . $servername, $username, $password, $dbname );
		
		// Check connection
		if ($conn->connect_error) {
			die ( "Connection failed: " . $conn->connect_error );
		}
		trace ( "ProjectGateway: connected successfully to: " . $conn->host_info );
		
		/* change character set to utf8 */
		$conn->set_charset ( "utf8" );
		return $conn;
	}
	public function getProjects() {
		$conn = $this->connect ();
		// Collects data from "projects" table
		$sql = "SELECT * FROM Projects;";
		trace ( $sql );
		$result = $conn->query ( $sql );
		
		$projList = array ();
		
		if ($result->num_rows > 0) {
			while ( $row = $result->fetch_assoc () ) {
				$projList [$row ['id']] = new Project ( $row );
			}
		} else {
			trace ( "0 records found" );
		}
		return $projList;
	}
}
class Project {
	var $id;
	var $title;
	var $expense;
	// create project instance from array
	function __construct($row) {
		$this->id = $row ['id'];
		$this->title = $row ['title'];
		$this->expense = $row ['expense'];
	}
}
