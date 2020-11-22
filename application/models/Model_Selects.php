<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Selects extends CI_Model {

	public function GetEmployee()
	{
		$SQL = "SELECT * FROM applicants WHERE Status = 'Employed'";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function getApplicant() // TODO: Duplicate?
	{
		$SQL = "SELECT * FROM applicants WHERE Status = 'Applicant'";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function getApplicantExpired()
	{
		$SQL = "SELECT * FROM applicants WHERE Status = 'Expired'";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function GetApplicantArchived()
	{
		$SQL = "SELECT * FROM applicants WHERE Status = 'Deleted'";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function GetApplicantBlacklisted()
	{
		$SQL = "SELECT * FROM applicants WHERE Status = 'Blacklisted'";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function CheckEmployee($ApplicantID)
	{
		$SQL = "SELECT * FROM applicants WHERE ApplicantID = ?";
		$result = $this->db->query($SQL,$ApplicantID);
		return $result;
	}
	public function GetEmployeeDetails($ApplicantID)
	{
		$SQL = "SELECT * FROM applicants WHERE ApplicantID = '$ApplicantID'"; // TODO: Duplicate
		$result = $this->db->query($SQL,$ApplicantID);
		return $result;
	}
	public function GetEmployeeBeneficiaries($ApplicantID)
	{
		$SQL = "SELECT * FROM beneficiaries WHERE ApplicantID = '$ApplicantID'";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function GetEmployeeAcadhis($ApplicantID)
	{
		$SQL = "SELECT * FROM acad_history WHERE ApplicantID = '$ApplicantID'";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function GetEmployeeCharRef($ApplicantID)
	{
		$SQL = "SELECT * FROM char_references WHERE ApplicantID = '$ApplicantID'";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function GetEmploymentDetails($ApplicantID)
	{
		$SQL = "SELECT * FROM employment_record WHERE ApplicantID = '$ApplicantID'";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function GetAdmin()
	{
		$SQL = "SELECT * FROM admin";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function CheckAdminNo($AdminNo)
	{
		$SQL = "SELECT * FROM admin WHERE AdminNo = ?";
		$result = $this->db->query($SQL,$AdminNo);
		return $result;
	}
	public function CheckAdminID($AdminID)
	{
		$SQL = "SELECT * FROM admin WHERE AdminID = ?";
		$result = $this->db->query($SQL,$AdminID);
		return $result;
	}
	public function GetApplicants() // TODO: Duplicate?
	{
		$SQL = "SELECT * FROM applicants WHERE Status = 'Applicant'";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function GetTotalApplicants()
	{
		$SQL = "SELECT * FROM applicants WHERE Status = 'Applicant' OR Status = 'Expired'";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function GetApplicantSkills()
	{
		$result =  $this->db->query("SELECT PositionGroup, COUNT(*) as count FROM applicants WHERE Status = 'Applicant' AND PositionGroup IS NOT NULL GROUP BY PositionGroup");
		return $result;
	}
	public function GetApplicantSkillsExpired()
	{
		$result =  $this->db->query("SELECT PositionGroup, COUNT(*) as count FROM applicants WHERE Status = 'Expired' AND PositionGroup IS NOT NULL GROUP BY PositionGroup");
		return $result;
	}
	public function CheckApplicant($ApplicantID)
	{
		$SQL = "SELECT * FROM applicants WHERE ApplicantID = ?";
		$result = $this->db->query($SQL,$ApplicantID);
		return $result;
	}

	public function GetEmployers()
	{
		$SQL = "SELECT * FROM employers WHERE Status = 'Active'";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function GetEmployerByID($EmployerID)
	{
		$SQL = "SELECT * FROM employers WHERE EmployerID = ?";
		$result = $this->db->query($SQL,$EmployerID);
		return $result;
	}
	public function GetEmployerBranches($EmployerID)
	{
		$SQL = "SELECT * FROM branches WHERE EmployerID = '$EmployerID' AND Status <> 'Deleted'";
		$result = $this->db->query($SQL);
		return $result;
	}

	public function GetBranches()
	{
		$SQL = "SELECT * FROM branches WHERE Status = 'Active'";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function CheckBranch($BranchName)
	{
		$SQL = "SELECT * FROM branches WHERE Name = ? AND Status = 'Active'";
		$result = $this->db->query($SQL,$BranchName);
		return $result;
	}
	public function GetBranchID($BranchID)
	{
		$SQL = "SELECT * FROM branches WHERE BranchID = '$BranchID'";
		$result = $this->db->query($SQL,$BranchID);
		return $result;
	}
	public function getBranchOption()
	{
		$SQL = "SELECT * FROM branches WHERE Status = 'Active'";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function getBranchColors($BranchID)
	{
		$SQL = "SELECT * FROM branch_colors WHERE BranchID = ?";
		$result = $this->db->query($SQL,$BranchID);
		return $result;
	}
	public function GetContractHistory($id)
	{
		$SQL = "SELECT * FROM contract_history, applicants WHERE contract_history.ApplicantID = '$id' AND applicants.ApplicantID = '$id'";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function GetLogbook()
	{
		$SQL = "SELECT * FROM logbook ORDER BY No DESC";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function GetLogbookWithLimit($Limit)
	{
		$SQL = "SELECT * FROM logbook ORDER BY No DESC LIMIT $Limit";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function GetPreviousContract($id)
	{
		$SQL = "SELECT * FROM contract_history, applicants WHERE contract_history.ApplicantID = '$id' AND applicants.ApplicantID = '$id' ORDER BY ID DESC LIMIT 1";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function GetPreviousContractInfo($name)
	{
		$SQL = "SELECT * FROM contract_history, branches WHERE contract_history.Branch = '$name' AND branches.Name = '$name' ORDER BY ID DESC LIMIT 1";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function GetBranchesEmployed($BranchID)
	{
		$SQL = "SELECT * FROM applicants, branches WHERE applicants.BranchEmployed = '$BranchID' AND branches.BranchID = '$BranchID'";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function GetBranchesAdmin($BranchID)
	{
		$SQL = "SELECT * FROM admin, branches WHERE admin.BranchID = '$BranchID' AND branches.BranchID = '$BranchID'";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function GetMonthlyTotal($Year)
	{
		// $SQL = "SELECT DATE_FORMAT(AppliedOn, '%Y') as 'Year', DATE_FORMAT(AppliedOn, '%m') as 'Month', COUNT(ApplicantID) as 'Total' FROM applicants GROUP BY DATE_FORMAT(AppliedOn, '%Y%m')";
		$SQL = "SELECT * FROM dashboard_months WHERE Year = '$Year' ORDER BY `dashboard_months`.`Month` ASC";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function GetMonthlyTotalNoZero($Year)
	{
		$SQL = "SELECT * FROM dashboard_months WHERE Year = '$Year' AND Total <> '0' ORDER BY `dashboard_months`.`Month` ASC";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function GetMonthlyTotalSpecificMonth($Year, $Month)
	{
		$SQL = "SELECT * FROM dashboard_months WHERE Year = '$Year' AND Month = '$Month'";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function CountMonthlyTotal()
	{
		// $SQL = "SELECT DATE_FORMAT(AppliedOn, '%Y') as 'Year', DATE_FORMAT(AppliedOn, '%m') as 'Month', COUNT(ApplicantID) as 'Total' FROM applicants GROUP BY DATE_FORMAT(AppliedOn, '%Y%m')";
		$SQL = "SELECT * FROM dashboard_months";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function GetViolations($ApplicantID)
	{
		$SQL = "SELECT * FROM violations WHERE ApplicantID = '$ApplicantID'";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function CheckAdminCred($UserName)
	{
		$SQL = "SELECT * FROM admin WHERE AdminID = '$UserName'";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function GetApplicantsViaPartial($URL) // TODO: Not used yet.
	{
		$SQL = "SELECT * FROM applicants WHERE ApplicantID LIKE '$URL-%'";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function GetWeeklyList($BranchID) // Argument is $id originally from source.
	{
		$SQL = "SELECT * FROM hours_weekly WHERE BranchID = '$BranchID'";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function GetWeeklyListEmployee($BranchID)
	{
		$SQL = "SELECT * FROM applicants WHERE BranchEmployed = '$BranchID'";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function GetLogbookLatestHires()
	{
		$SQL = "SELECT * FROM logbook WHERE Type = 'Employment' ORDER BY No DESC";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function GetWeeklyDates()
	{
		$SQL = "SELECT * FROM dummy_hours WHERE Current = 'Current'";
		$result = $this->db->query($SQL);
		return $result;
	}
	// public function GetWeeklyListEmployeeActive($ClientID)
	// {
	// 	$SQL = "SELECT * FROM hours_weekly WHERE ClientID = '$ClientID' AND ApplicantID IS NOT NULL AND Name IS NOT NULL";
	// 	$result = $this->db->query($SQL);
	// 	return $result;
	// }
	// public function GetWeeklyDatesForEmployee($ApplicantID)
	// {
	// 	$SQL = "SELECT * FROM hours_weekly WHERE Current IS NULL AND ApplicantID = '$ApplicantID' AND Name IS NULL";
	// 	$result = $this->db->query($SQL);
	// 	return $result;
	// }
	public function GetMatchingDates($ApplicantID, $Time)
	{
		$SQL = "SELECT * FROM hours_weekly, dummy_hours WHERE hours_weekly.Time = '$Time' AND dummy_hours.Time = '$Time' AND hours_weekly.ApplicantID = '$ApplicantID'";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function GetMatchingDatesType($ApplicantID, $Time)
	{
		$SQL = "SELECT * FROM hours_weekly, dummy_hours WHERE hours_weekly.Time = '$Time' AND dummy_hours.Time = '$Time' AND hours_weekly.ApplicantID = '$ApplicantID'";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function GetWeeklyListEmployeeForDates($ApplicantID)
	{
		$SQL = "SELECT * FROM hours_weekly WHERE ApplicantID = '$ApplicantID'";
		$result = $this->db->query($SQL,$ApplicantID);
		return $result;
	}
	public function GetDocuments($ApplicantID)
	{
		$SQL = "SELECT * FROM supp_documents WHERE ApplicantID = '$ApplicantID' AND Type = 'Document'";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function GetDocumentsViolations($ApplicantID) // Also includes Blacklists.
	{
		$SQL = "SELECT * FROM supp_documents WHERE ApplicantID = '$ApplicantID' AND (Type = 'Violation' OR Type = 'Blacklist')";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function GetWeeklyHours($BranchID, $Time) // Argument is $id originally from source.
	{
		$SQL = "SELECT * FROM dummy_hours, hours_weekly WHERE hours_weekly.BranchID = '$BranchID' AND dummy_hours.Time = hours_weekly.Time";
		$result = $this->db->query($SQL,$BranchID);
		return $result;
	}
	public function GetApplicantsByMonth($Year, $Month)
	{
		$SQL = "SELECT * FROM applicants WHERE AppliedOn LIKE '%$Year-$Month%'";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function GetTotalHours($ApplicantID, $TimeFrom, $TimeTo)
	{
		$SQL = "SELECT * FROM hours_weekly WHERE ApplicantID = '$ApplicantID' AND Time = '$TimeFrom' OR WHERE Time = '$TimeFrom'";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function GetDocumentsNotes($ApplicantID)
	{
		$SQL = "SELECT * FROM tab_documents_notes WHERE ApplicantID = '$ApplicantID'";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function sss_Contri()
	{
		$SQL = "SELECT * FROM sss_table ORDER BY contribution ASC";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function Checkkkkkk($ApplicantID)
	{
		$SQL = "SELECT * FROM hours_weekly WHERE ApplicantID = '$ApplicantID'";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function GetempGP($ApplicantID)
	{
		$this->db->select_sum('day_pay');
		$this->db->where('ApplicantID', $ApplicantID);
		$result = $this->db->get('hours_weekly')->row();  
		return $result->day_pay;
	}
	public function getsssRa()
	{
		$SQL = "SELECT * FROM sss_table";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function GetTotalH($ApplicantID)
	{
		$this->db->select_sum('Hours');
		$this->db->where('ApplicantID', $ApplicantID);
		$result = $this->db->get('hours_weekly')->row();  
		return $result->Hours;
	}
	public function GetTotalOt($ApplicantID)
	{
		$this->db->select_sum('Overtime');
		$this->db->where('ApplicantID', $ApplicantID);
		$result = $this->db->get('hours_weekly')->row();  
		return $result->Overtime;
	}
	public function get_applicantContri($id)
	{
		$SQL = "SELECT * FROM tracking_table WHERE BranchID = $id";
		$result = $this->db->query($SQL);
		return $result;
	}
	// Search queries, possible duplicates
	public function SearchApplicantID($query)
	{
		$SQL = "SELECT * FROM applicants WHERE ApplicantID LIKE '%$query%'";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function SearchEmployeeID($query)
	{
		$SQL = "SELECT * FROM applicants WHERE EmployeeID LIKE '%$query%'";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function SearchPeople($query)
	{
		$SQL = "SELECT * FROM applicants WHERE LastName LIKE '%$query%' OR FirstName LIKE '%$query%' OR MiddleInitial LIKE '%$query%'";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function SearchBranches($query)
	{
		$SQL = "SELECT * FROM branches WHERE Name LIKE '%$query%'";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function SearchPositionGroups($query)
	{
		$SQL = "SELECT * FROM applicants WHERE PositionGroup LIKE '%$query%'";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function SearchPositionSpecific($query)
	{
		$SQL = "SELECT * FROM applicants WHERE PositionDesired LIKE '%$query%'";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function SearchAdmins($query)
	{
		$SQL = "SELECT * FROM admin WHERE LastName LIKE '%$query%' OR FirstName LIKE '%$query%' OR MiddleInitial LIKE '%$query%'";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function GetEmployeeMatchingBranch($ApplicantID)
	{
		$SQL = "SELECT * FROM applicants, branches WHERE ApplicantID = '$ApplicantID' AND (applicants.BranchEmployed = branches.BranchID)";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function getPayslip($id)
	{
		$SQL = "SELECT * FROM tracking_table WHERE id = '$id'";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function GetApplicantDet($ApplicantID)
	{
		$SQL = "SELECT * FROM applicants WHERE ApplicantID = '$ApplicantID'";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function GetBranchDet($BranchID)
	{
		$SQL = "SELECT * FROM branches WHERE BranchID = '$BranchID'";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function CheckSSS($number)
	{
		$SQL = "SELECT * FROM applicants WHERE SSS_No = ?";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function CheckRCN($number)
	{
		$SQL = "SELECT * FROM applicants WHERE ResidenceCertificateNo = ?";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function CheckTIN($number)
	{
		$SQL = "SELECT * FROM applicants WHERE TIN = ?";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function CheckHDMF($number)
	{
		$SQL = "SELECT * FROM applicants WHERE HDMF = ?";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function CheckPhilHealth($number)
	{
		$SQL = "SELECT * FROM applicants WHERE PhilHealth = ?";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function CheckATM($number)
	{
		$SQL = "SELECT * FROM applicants WHERE ATM_No = ?";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function CheckLFName($LastName, $FirstName)
	{
		$SQL = "SELECT * FROM applicants WHERE LastName = '$LastName' AND FirstName = '$FirstName'";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function GetAllApplicants()
	{
		$SQL = "SELECT * FROM applicants";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function getApplicantDetID($branch_id)
	{
		$SQL = "SELECT * FROM applicants WHERE BranchEmployed = '$branch_id'";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function GetDetails_Branch($branch_id)
	{
		$SQL = "SELECT * FROM branches WHERE BranchID = '$branch_id'";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function GetWeeklyImports($ApplicantsArray)
	{
	    if (!empty($ApplicantsArray)) {
    		$SQL = "SELECT * FROM hours_weekly WHERE";
    		foreach($ApplicantsArray as $item) {
    			$SQL = $SQL . " ApplicantID = '" . $item . "'" . " OR "; 
    		}
    		$SQL = substr($SQL, 0, -4);
    		$result = $this->db->query($SQL);
    		return $result;
	    }
	}
	public function GetWeeklyListEmployeeFromImports($ApplicantsArray)
	{
	    if (!empty($ApplicantsArray)) {
    		$SQL = "SELECT * FROM applicants WHERE";
    		foreach($ApplicantsArray as $item) {
    			$SQL = $SQL . " ApplicantID = '" . $item . "'" . " OR "; 
    		}
    		$SQL = substr($SQL, 0, -4);
    		$result = $this->db->query($SQL);
    		return $result;
	    }
	}







	######### UPDATES
	public function GetEmployeeHours($ApplicantID) //Checkkkkkk
	{
		$SQL = "SELECT * FROM hours_weekly WHERE ApplicantID = '$ApplicantID'";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function GetAllSSSTable()
	{
		$SQL = "SELECT * FROM sss_table";
		$result = $this->db->query($SQL);
		return $result;
	}

	public function GetAllHDMFTable()
	{
		$SQL = "SELECT * FROM hdmf_table";
		$result = $this->db->query($SQL);
		return $result;
	}

	public function GetAllPhilHealthTable()
	{
		$SQL = "SELECT * FROM philhealth_table";
		$result = $this->db->query($SQL);
		return $result;
	}



	public function GetAllTaxTable()
	{
		$SQL = "SELECT * FROM tax_table";
		$result = $this->db->query($SQL);
		return $result;
	}

	public function GetEmployeeDeductions($eid)
	{
		$SQL = "SELECT * FROM employee_deductions where applicant_id=$eid";
		$result = $this->db->query($SQL,$eid);
		return $result;
	}

	public function GetEmployeeOtherDeductions($eid)
	{
		$SQL = "SELECT * FROM employee_deductions where applicant_id=$eid";
		$result = $this->db->query($SQL,$eid);
		return $result;
	}

	public function getPayslipFromto($branch_id,$nf_date,$nt_date)
	{
		// $SQL = "SELECT * FROM tracking_table WHERE BranchID = '$branch_id' AND Date_Generated >= '$nf_date' AND Date_Generated <= '$nt_date'";
		$SQL = "SELECT * FROM tracking_table WHERE BranchID = '$branch_id' AND Date_Generated BETWEEN '$nf_date' AND '$nt_date'";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function getAllApplicantName()
	{
		$SQL = "SELECT * FROM applicants";
		$result = $this->db->query($SQL);
		return $result;
	}
	public function GetClientDet($BranchID)
	{
		$SQL = "SELECT * FROM branches WHERE BranchID= '$BranchID'";
		$result = $this->db->query($SQL);
		return $result;
	}
}
