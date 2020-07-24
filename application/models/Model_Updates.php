<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Updates extends CI_Model {

	public function EmployNewApplicant($Temp_ApplicantID,$ApplicantID,$data)
	{
		extract($data);
		$data = array(
			'EmployeeID' => $EmployeeID,
			'Temp_ApplicantID' => $Temp_ApplicantID,
			'BranchEmployed' => $BranchEmployed,
			'DateStarted' => $DateStarted,
			'DateEnds' => $DateEnds,
			'SalaryExpected' => $Salary,
			'Status' => 'Employed',
		);
		$this->db->where('ApplicantID', $ApplicantID);
		$result = $this->db->update('applicants', $data);
		return $result;
	}
	public function ApplicantExpired($ApplicantID)
	{
		$data = array(
			'BranchEmployed' => '',
			'DateStarted' => '',
			'Status' => 'Expired',
			'ReminderType' => '',
			'ReminderDate' => '',
			'ReminderLocked' => 'No',
		);
		$this->db->where('ApplicantID', $ApplicantID);
		$result = $this->db->update('applicants', $data);
		return $result;
	}
	public function ExtendContract($ApplicantID,$data)
	{
		extract($data);
		$data = array(
			'DateEnds' => $DateEnds,
		);
		$this->db->where('ApplicantID', $ApplicantID);
		$result = $this->db->update('applicants', $data);
		return $result;
	}
	public function UpdateEmployee($ApplicantID,$data)
	{
		$this->db->where('ApplicantID', $ApplicantID);
		$result = $this->db->update('applicants', $data);
		return $result;
	}
	public function ReminderLocked($ApplicantID)
	{
		$data = array(
			'ReminderLocked' => 'Yes',
		);
		$this->db->where('ApplicantID', $ApplicantID);
		$result = $this->db->update('applicants', $data);
		return $result;
	}
	public function UpdateApplicantID($Temp_ApplicantID)
	{
		$data = array(
			'ApplicantID' => $Temp_ApplicantID,
		);
		$this->db->where('Temp_ApplicantID', $Temp_ApplicantID);
		$result = $this->db->update('applicants', $data);
		return $result;
	}
	public function BlacklistEmployee($ApplicantID)
	{
		$SQL = "UPDATE applicants SET Status ='Blacklisted' WHERE ApplicantID = '$ApplicantID'";
		$result = $this->db->query($SQL,$ApplicantID);
		return $result;
	}
	public function RestoreEmployee($ApplicantID)
	{
		$SQL = "UPDATE applicants SET Status ='Applicant' WHERE ApplicantID = '$ApplicantID'";
		$result = $this->db->query($SQL,$ApplicantID);
		return $result;
	}
	public function UpdateWeeklyHours($ApplicantID,$data)
	{
		extract($data);
		$data = array(
			'ApplicantID' => $ApplicantID,
			'BranchID' => $BranchID,
			'Time' => $Date,
			'Hours' => $Hours,
			'Overtime' => $Overtime,
			'NightHours' => $NightHours,
			'NightOvertime' => $NightOvertime,
			'Remarks' => $Remarks,
			'HDMF' => $HDMF,
			'Philhealth' => $Philhealth,
			'SSS' => $SSS,
			'Tax' => $Tax,
			'day_pay' => $day_pay,
		);
		$SQL = "REPLACE INTO hours_weekly
		SET ApplicantID = '$ApplicantID',
		BranchID = '$BranchID',
		Time = '$Date', Hours = '$Hours',
		Overtime = '$Overtime',
		NightHours = '$NightHours',
		NightOvertime = '$NightOvertime',
		Remarks = '$Remarks',
		HDMF = '$HDMF',
		Philhealth = '$Philhealth',
		SSS = '$SSS',
		Tax = '$Tax',
		day_pay = '$day_pay'";
		$result = $this->db->query($SQL,$ApplicantID);
		return $result;
	}
	public function UpdateWeeklyHoursCurrent()
	{
		$data = array(
			'Current' => NULL,
		);
		$this->db->where('Current', 'Current');
		$result = $this->db->update('dummy_hours', $data);
		return $result;
	}
	public function UpdateSSSField($id, $data)
	{
		extract($data);
		$data = array(
			'f_range' => $f_range,
			't_range' => $t_range,
			'contribution' => $contribution,
		);
		$this->db->where('id', $id);
		$result = $this->db->update('sss_table', $data);
		return $result;
	}
	public function UpdateEmployer($EmployerID,$data)
	{
		$this->db->where('EmployerID', $EmployerID);
		$result = $this->db->update('employers', $data);
		return $result;
	}
}
