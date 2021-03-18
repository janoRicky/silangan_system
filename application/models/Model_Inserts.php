<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Inserts extends CI_Model {

	public function AddThisEmployee($data)
	{
		$result = $this->db->insert('applicants', $data);
		return $result;
	}
	public function InsertBen($data)
	{
		$result = $this->db->insert('beneficiaries', $data);
		return $result;
	}
	public function InsertAcadH($data)
	{
		$result = $this->db->insert('acad_history', $data);
		return $result;
	}
	public function InsertCharRef($data)
	{
		$result = $this->db->insert('char_references', $data);
		return $result;
	}
	public function InsertAdmin($data)
	{
		$result = $this->db->insert('admin', $data);
		return $result;
	}
	public function InsertEmploymentRecord($data)
	{
		$result = $this->db->insert('employment_record', $data);
		return $result;
	}
	public function InsertNewEmployer($data)
	{
		$result = $this->db->insert('employers', $data);
		return $result;
	}
	public function InsertNewBranch($data)
	{
		$result = $this->db->insert('branches', $data);
		return $result;
	}
	public function InsertBranchColors($data)
	{
		$result = $this->db->insert_batch('branch_colors', $data);
		return $result;
	}
	// RECORDS

	public function InsertContractHistory($data)
	{
		$result = $this->db->insert('contract_history', $data);
		return $result;
	}
	public function InsertAuditLog($data) // TODO: Add audit log functionality?
	{
		$result = $this->db->insert('audit_log', $data);
		return $result;
	}
	public function InsertLogbook($data)
	{
		$result = $this->db->insert('logbook', $data);
		return $result;
	}
	public function InsertReminder($ApplicantID, $data)
	{
		$this->db->where('ApplicantID', $ApplicantID);
		$result = $this->db->update('applicants', $data);
		return $result;
	}
	public function InsertToBranch($BranchID, $Temp_ApplicantID, $data)
	{
		extract($data);
		$Name = $LastName . ', ' . $FirstName . ' ' . $MiddleInitial . '.';
		$data = array(
			'BranchID' => $BranchID,
			'ApplicantID' => $Temp_ApplicantID,
			'Name' => $Name,
			'Salary' => $SalaryExpected,
		);
		$result = $this->db->insert('hours_weekly', $data);
		return $result;
	}
	public function InsertDummyHours($data)
	{
		$result = $this->db->replace('dummy_hours', $data);
		return $result;
	}
	public function AddDocuments($data)
	{
		$result = $this->db->insert('supp_documents', $data);
		return $result;
	}
	public function InsertDashboardMonths($data) // Dummy months
	{
		$result = $this->db->replace('dashboard_months', $data);
		return $result;
	}
	public function InsertToGraph()
	{
		$SQL = "REPLACE INTO dashboard_months (Year, Month, Total) SELECT DATE_FORMAT(AppliedOn, '%Y') as 'Year', DATE_FORMAT(AppliedOn, '%m') as 'Month', COUNT(ApplicantID) as 'Total' FROM applicants GROUP BY DATE_FORMAT(AppliedOn, '%Y%m')";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function InsertDocumentsNote($ApplicantID, $Note)
	{
		$DateAdded = date('Y-m-d h:i:s A');
		$data = array(
			'ApplicantID' => $ApplicantID,
			'Note' => $Note,
			'DateAdded' => $DateAdded,
		);
		$result = $this->db->insert('tab_documents_notes', $data);
		return $result;
	}
	public function Insertttttt($data)
	{
		$result = $this->db->insert('tracking_table', $data);
		return $result;
	}
	public function contri_add_SSS($data)
	{
		$result = $this->db->insert('sss_table', $data);
		return $result;
	}
	public function contri_add_HDMF($data)
	{
		$result = $this->db->insert('hdmf_table', $data);
		return $result;
	}
	public function contri_add_PhilHealth($data)
	{
		$result = $this->db->insert('philhealth_table', $data);
		return $result;
	}
	public function contri_add_Tax($data)
	{
		$result = $this->db->insert('tax_table', $data);
		return $result;
	}

	public function InsertTrackingTable($data)
	{
		$result = $this->db->insert('tracking_table',$data);
		return $result;
	}

	public function InsertDeferred($id,$empid,$amount,$period)
	{
		$SQL = "insert into deferred_deduction (id,employee_id,amount,period) values ($id,$empid,$amount,$period)";
        $result = $this->db->query($SQL,$id,$empid,$amount,$period);
	}
	public function UpdateDatafromBio($ApplicantID,$Date_Time,$data)
	{

		$this->db->where(array('ApplicantID' => $ApplicantID,'Date_Time' => $Date_Time));
		$result = $this->db->update('tb_attendance', $data);
		return $result;
	}
	public function InsertDatafromBio($data)
	{
		return $this->db->replace('tb_attendance', $data);
	}

	// DEVICE ATTENDANCE
	public function InsertDeviceAtt($data)
	{
		return $this->db->insert('device_attendance', $data);
	}
}
