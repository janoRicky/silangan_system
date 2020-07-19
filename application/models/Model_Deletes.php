<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Deletes extends CI_Model {

	public function RemoveEmpl($ApplicantID)
	{
		$SQL = "UPDATE applicants SET Status ='Deleted' WHERE ApplicantID = '$ApplicantID'";
		$result = $this->db->query($SQL,$ApplicantID);
		return $result;
	}
	public function RemoveAdminM($id)
	{
		$SQL = "DELETE FROM admin WHERE AdminNo = ?";
		$result = $this->db->query($SQL,$id);
		return $result;
	}
	public function RemoveEmployerM($id)
	{
		$SQL = "UPDATE employers SET Status ='Deleted' WHERE EmployerID = ?";
		$result = $this->db->query($SQL,$id);
		return $result;
	}
	public function RemoveBranchM($id)
	{
		$SQL = "UPDATE branches SET Status ='Deleted' WHERE BranchID = ?";
		$result = $this->db->query($SQL,$id);
		return $result;
	}
	public function RemoveBeneficiary($listCheck)
	{
		$SQL = "DELETE FROM `beneficiaries` WHERE `Ben_No` IN ($listCheck)";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function RemoveAcadHistory($listCheck)
	{
		$SQL = "DELETE FROM `acad_history` WHERE `Acad_No` IN ($listCheck)";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function RemoveCharRef($listCheck)
	{
		$SQL = "DELETE FROM `char_references` WHERE `Char_Ref_No` IN ($listCheck)";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function RemoveEmpRecord($listCheck)
	{
		$SQL = "DELETE FROM `employment_record` WHERE `No` IN ($listCheck)";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function CleanWeeklyDates()
	{
		$SQL = "DELETE FROM dummy_hours WHERE Current IS NULL";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function CleanDashboardMonths($CurrentYear)
	{
		$SQL = "DELETE FROM dashboard_months WHERE Year <> '$CurrentYear'";
		$result = $this->db->query($SQL);
		return $result;
	}
}
