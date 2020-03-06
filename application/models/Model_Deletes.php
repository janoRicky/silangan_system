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
	public function RemoveClientM($id)
	{
		$SQL = "UPDATE clients SET Status ='Deleted' WHERE ClientID = ?";
		$result = $this->db->query($SQL,$id);
		return $result;
	}
	public function RemoveAcadHistory($listCheck)
	{
		$SQL = "DELETE FROM `acad_history` WHERE `Acad_No` IN ($listCheck)";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function RemoveEmpRecord($listCheck)
	{
		$SQL = "DELETE FROM `employment_record` WHERE `No` IN ($listCheck)";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function RemoveMachineOperated($listCheck)
	{
		$SQL = "DELETE FROM `machine_operated` WHERE `No` IN ($listCheck)";
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
