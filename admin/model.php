<?php

date_default_timezone_set('Asia/Manila');
Class Model {
	private $server_name="";
	private $username = "u348190438_dbalumni";
	private $password = "AUAAIportal2022";
	private $dbname = "u348190438_dbalumni";
	private $conn;
	

	public function __construct() {

		try {
			$this->conn = new mysqli($this->server_name, $this->username, $this->password, $this->dbname);	
		} catch (Exception $e) {
			echo "Connection failed" . $e->getMessage();
		}
	}
	public function alumniGender(){
		$query = "SELECT SUM(IF(gender= 'male' = '1',1,0)) as a_male, SUM(IF(gender= 'female' = '1',1,0)) as a_female, COUNT(*) as a_total FROM users WHERE usertype = 'alumni'";
		if ($sql = $this->conn->query($query)) {
			while ($row = mysqli_fetch_assoc($sql)) {
				$data[] = $row;
			}
		}
		return $data;
	}

	public function courseRelated(){
		$query = "SELECT SUM(IF(job_relate= 'yes' = '1',1,0)) as jyes, SUM(IF(job_relate= 'no' = '1',1,0)) as jno, COUNT(*) as a_total FROM alumnitracerform_data";
		if ($sql = $this->conn->query($query)) {
			while ($row = mysqli_fetch_assoc($sql)) {
				$data[] = $row;
			}
		}
		return $data;
	}
	
	public function donationFrequency(){
		$query = "SELECT SUM(IF(donationtype= 'goods' = '1',1,0)) as d_goods, SUM(IF(donationtype= 'cash' = '1',1,0)) as d_cash, COUNT(*) as d_total FROM donations";
		if ($sql = $this->conn->query($query)) {
			while ($row = mysqli_fetch_assoc($sql)) {
				$data[] = $row;
			}
		}
		return $data;
	}
	
	public function displayColleges(){
		$query = "SELECT course FROM users WHERE usertype = 'alumni' GROUP BY course ORDER by course ASC";
		if ($sql = $this->conn->query($query)) {
			while ($row = mysqli_fetch_assoc($sql)) {
				$data[] = $row;
			}
		}
		return $data;
	}
	
	public function displayCollegesStudentCount(){
		$query = "SELECT SUM(IF(gender= 'male' = '1',1,0)) as sc_male, SUM(IF(gender= 'female' = '1',1,0)) as sc_female, COUNT(*) as sc_total FROM users WHERE usertype = 'alumni' GROUP BY course ORDER by course ASC";
		if ($sql = $this->conn->query($query)) {
			while ($row = mysqli_fetch_assoc($sql)) {
				$data[] = $row;
			}
		}
		return $data;
	}

	public function displayEmpStatus(){
		$query = "SELECT SUM(IF(emp_status = 'selfemployed' = '1',1,0)) as selfemployed, SUM(IF(emp_status= 'unemployed' = '1',1,0)) as unemployed, SUM(IF(emp_status= 'employed' = '1',1,0)) as employed FROM alumnitracerform_data";
		if ($sql = $this->conn->query($query)) {
			while ($row = mysqli_fetch_assoc($sql)) {
				$data[] = $row;
			}
		}
		return $data;
	}

	


}

?>