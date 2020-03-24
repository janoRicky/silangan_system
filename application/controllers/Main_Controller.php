 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');

 class Main_Controller extends CI_Controller {

 	public function __construct() {
 		parent::__construct();
 		$this->load->model('Model_Selects');
		$this->load->model('Model_Updates'); // TODO: Remove after fixing the call belooooow.
		$this->load->model('Model_Inserts'); // TODO: Remove after fixing the call belooooow.
		// echo $_SERVER['REMOTE_ADDR'] . '<br>';
		// echo $_SERVER['HTTP_USER_AGENT'];
		$GetEmployee = $this->Model_Selects->GetEmployee();
		$GetBranch = $this->Model_Selects->getBranchOption();
		date_default_timezone_set('Asia/Manila');
		$currTime = date('Y-m-d h:i:s A');
		// TODO: Don't call this here. Need a real time checker. Find a better solution than this.
		foreach ($GetEmployee->result_array() as $row) {
			// Assigns a new ID after successfully hiring
			if ($row['Temp_ApplicantID'] != NULL && $row['Temp_ApplicantID'] == $row['ApplicantID']) {
				$this->Model_Updates->UpdateApplicantID($row['Temp_ApplicantID']);
			}
			$ApplicantID = $row['ApplicantID'];
			if ($row['ReminderLocked'] != 'Yes'){
				if (strtotime($row['DateEnds']) < (strtotime($currTime) + strtotime($row['ReminderDate'])) && strtotime($row['DateEnds']) > strtotime($currTime)) {
					$LogbookInsert = $this->Model_Updates->ReminderLocked($ApplicantID);
					// LOGBOOK
					date_default_timezone_set('Asia/Manila');
					$LogbookCurrentTime = date('Y-m-d h:i:s A');
					$LogbookType = 'Reminder';
					$LogbookEvent = 'Employee ' . $ApplicantID . ' is expiring in ' . $row['ReminderDateString'] . '!';
					$LogbookLink = base_url() . 'ViewEmployee?id=' . $ApplicantID;
					$data = array(
						'Time' => $LogbookCurrentTime,
						'Type' => $LogbookType,
						'Event' => $LogbookEvent,
						'Link' => $LogbookLink,
					);
					$LogbookInsert = $this->Model_Inserts->InsertLogbook($data);
				}
			}
			if (strtotime($row['DateEnds']) < strtotime($currTime)) {
				foreach ($GetEmployee->result_array() as $row) {
					foreach ($GetBranch->result_array() as $nrow) {
						if ($row['BranchEmployed'] == $nrow['BranchID']) {
							$BranchName = $nrow['Name'];
						}
					}
				}

				if ($ApplicantID == NULL) {
					$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><h5><i class="fas fa-times"></i> Something\'s wrong, Please try again!</h5></div>');
				}
				else
				{
					$CheckEmployee = $this->Model_Selects->CheckEmployee($ApplicantID);
					if ($CheckEmployee->num_rows() > 0) {
						$data = array(
							'ApplicantID' => $ApplicantID,
							'PreviousDateStarted' => $row['DateStarted'],
							'PreviousDateEnds' => $row['DateEnds'],
							'Branch' => $BranchName,
						);
						$InsertContractHistory = $this->Model_Inserts->InsertContractHistory($data);
						$ApplicantExpired = $this->Model_Updates->ApplicantExpired($ApplicantID);
						if ($ApplicantExpired == TRUE) {
							$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #45C830;"><h5><i class="fas fa-check"></i> Employee ' . $ApplicantID . ' has expired!</h5></div>');
							// LOGBOOK
							date_default_timezone_set('Asia/Manila');
							$LogbookCurrentTime = date('Y-m-d h:i:s A');
							$LogbookType = 'Update';
							$LogbookEvent = 'Employee ' . $ApplicantID . ' has expired!';
							$LogbookLink = base_url() . 'ViewEmployee?id=' . $ApplicantID;
							$data = array(
								'Time' => $LogbookCurrentTime,
								'Type' => $LogbookType,
								'Event' => $LogbookEvent,
								'Link' => $LogbookLink,
							);
							$LogbookInsert = $this->Model_Inserts->InsertLogbook($data);
						}
						else
						{
							$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><h5><i class="fas fa-times"></i> Something\'s wrong, Please try agains!</h5></div>');
						}
					}
					else
					{
						$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><h5><i class="fas fa-times"></i> Something\'s wrong, Please try againss!</h5></div>');
					}
				}
			}
		}

	}
	public function index()
	{
		$this->session->unset_userdata('acadcart');
		redirect('Dashboard');
		// $this->load->view('Login');
	}
	public function CheckUserLogin()
	{
		if (!isset($_SESSION['is_logged_in'])) {
			$p_text = '<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><i class="fas fa-times fa-fw"></i> User login required!</div>';
			$this->session->set_flashdata('prompt',$p_text);
			redirect('');
			exit();
		}
	}
	public function Dashboard()
	{
		$this->load->model('Model_Deletes');
		unset($_SESSION["bencart"]);
		unset($_SESSION["acadcart"]);
		unset($_SESSION["ref_cart"]);
		unset($_SESSION["emp_cart"]);
		unset($_SESSION["mach_cart"]);

		###	CHECK SESSION
		// $this->CheckUserLogin();

		$header['title'] = 'Dashboard | Silangan Lumber';
		$data['T_Header'] = $this->load->view('_template/users/u_header',$header);

		// CHART
		// $result =  $this->Model_Selects->GetApplicantSkills();

		// $record = $result->result();
		// $data = [];

		// foreach($record as $row) {
		// 	$data['label'][] = $row->PositionGroup;
		// 	$data['data'][] = (int) $row->count;
		// }
		// $data['chart_data'] = json_encode($data);
		// $edata = [];
		// $GetApplicantSkillsExpired = $this->Model_Selects->GetApplicantSkillsExpired();
		// $edata['data'][] = $GetApplicantSkillsExpired->num_rows();
		// foreach($GetApplicantSkillsExpired->result_array() as $row) {
		// 	$edata['label'][] = $row['PositionGroup'];
		// }
		// $data['chart_data_expired'] = json_encode($edata);
		$data['Breadcrumb'] = '
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb" style="background-color: transparent;">
				<li class="breadcrumb-item" aria-current="page"><a class="silangan-breadcrumb-active" href="Dashboard">Dashboard</a></li>
			</ol>
		</nav>';
		// COUNT ADMIN
		$data['result_cadmin'] =  $this->Model_Selects->GetAdmin();
		// COUNT APPLICANTS
		$data['result_capp'] =  $this->Model_Selects->GetTotalApplicants();
		// COUNT EMPLOYEE
		$data['result_cemployee'] =  $this->Model_Selects->GetEmployee();
		// COUNT Branch
		$data['result_cBranches'] =  $this->Model_Selects->GetBranches();
		// LOGBOOK
		$data['GetLogbook'] =  $this->Model_Selects->GetLogbook();
		// COUNT MONTHLY TOTAl
		$CurrentYear = date('Y');
		$Year = $CurrentYear;
		$Month = date('01');
		$data['CurrentYear'] = $CurrentYear;
		if (isset($_GET['Year'])) {
			$Year = $this->input->get('Year');
			$CountMonthlyTotal =  $this->Model_Selects->CountMonthlyTotal();
			if ($CountMonthlyTotal->num_rows() > 144) { // Truncates cache (Database) after 12 years of history
				$this->Model_Deletes->CleanDashboardMonths($CurrentYear);
				for ($i = 0; $i < 12; $i++) {
						$MonthAdd = date('m', strtotime('+' . $i . ' month', strtotime($Month)));
						$sql = array(
							'Year' => $Year,
							'Month' => $MonthAdd,
							'Total' => '0'
						);
						$this->Model_Inserts->InsertDashboardMonths($sql);
						$this->Model_Inserts->InsertToGraph();
						if ($i == 11) {
							$data['result_monthly'] = $this->Model_Selects->GetMonthlyTotal($Year);
							$data['result_monthly_current_year'] =  $this->Model_Selects->GetMonthlyTotal($CurrentYear);
							$data['SelectedYear'] = $Year;
							$CountTotal = 0;
							foreach ($this->Model_Selects->GetMonthlyTotal($CurrentYear)->result_array() as $row) {
								$CountTotal = $CountTotal + $row['Total'];
							}
							$data['CurrentYearTotal'] = $CountTotal;
							$CountTotal = 0;
							foreach ($this->Model_Selects->GetMonthlyTotal($Year)->result_array() as $row) {
								$CountTotal = $CountTotal + $row['Total'];
							}
							$data['SelectedYearTotal'] = $CountTotal;
							$this->load->view('users/u_dashboard',$data);
						}
					}
			} else {
				$YearChecker =  $this->Model_Selects->GetMonthlyTotal($Year);
				if ($YearChecker->num_rows() < 12) { // Loads faster if already on cache (Database)
					for ($i = 0; $i < 12; $i++) {
						$MonthAdd = date('m', strtotime('+' . $i . ' month', strtotime($Month)));
						$sql = array(
							'Year' => $Year,
							'Month' => $MonthAdd,
							'Total' => '0'
						);
						$this->Model_Inserts->InsertDashboardMonths($sql);
						$this->Model_Inserts->InsertToGraph();
						if ($i == 11) {
							$data['result_monthly'] = $this->Model_Selects->GetMonthlyTotal($Year);
							$data['result_monthly_current_year'] =  $this->Model_Selects->GetMonthlyTotal($CurrentYear);
							$data['SelectedYear'] = $Year;
							$CountTotal = 0;
							foreach ($this->Model_Selects->GetMonthlyTotal($CurrentYear)->result_array() as $row) {
								$CountTotal = $CountTotal + $row['Total'];
							}
							$data['CurrentYearTotal'] = $CountTotal;
							$CountTotal = 0;
							foreach ($this->Model_Selects->GetMonthlyTotal($Year)->result_array() as $row) {
								$CountTotal = $CountTotal + $row['Total'];
							}
							$data['SelectedYearTotal'] = $CountTotal;
							$this->load->view('users/u_dashboard',$data);
						}
					}
				} else {
					if ($CountMonthlyTotal->num_rows() > 144) {
						$this->Model_Deletes->CleanDashboardMonths();
					}
					$this->Model_Inserts->InsertToGraph();
					$data['result_monthly'] = $this->Model_Selects->GetMonthlyTotal($Year);
					$data['result_monthly_current_year'] =  $this->Model_Selects->GetMonthlyTotal($CurrentYear);
					$data['SelectedYear'] = $Year;
					$CountTotal = 0;
					foreach ($this->Model_Selects->GetMonthlyTotal($CurrentYear)->result_array() as $row) {
						$CountTotal = $CountTotal + $row['Total'];
					}
					$data['CurrentYearTotal'] = $CountTotal;
					$CountTotal = 0;
					foreach ($this->Model_Selects->GetMonthlyTotal($Year)->result_array() as $row) {
						$CountTotal = $CountTotal + $row['Total'];
					}
					$data['SelectedYearTotal'] = $CountTotal;
					$this->load->view('users/u_dashboard',$data);
				}
			}
		} else {
			$YearChecker =  $this->Model_Selects->GetMonthlyTotal($CurrentYear);
			if ($YearChecker->num_rows() < 12) { // Cache on first Dashboard visit
				for ($i = 0; $i < 12; $i++) {
					$MonthAdd = date('m', strtotime('+' . $i . ' month', strtotime($Month)));
					$sql = array(
						'Year' => $CurrentYear,
						'Month' => $MonthAdd,
						'Total' => '0'
					);
					$this->Model_Inserts->InsertDashboardMonths($sql);
					$this->Model_Inserts->InsertToGraph();
					if ($i == 11) {
						$data['result_monthly'] = $this->Model_Selects->GetMonthlyTotal($CurrentYear);
						$data['result_monthly_current_year'] =  $this->Model_Selects->GetMonthlyTotal($CurrentYear);
						$data['SelectedYear'] = $CurrentYear;
						$CountTotal = 0;
						foreach ($this->Model_Selects->GetMonthlyTotal($CurrentYear)->result_array() as $row) {
							$CountTotal = $CountTotal + $row['Total'];
						}
						$data['CurrentYearTotal'] = $CountTotal;
						$CountTotal = 0;
						foreach ($this->Model_Selects->GetMonthlyTotal($Year)->result_array() as $row) {
							$CountTotal = $CountTotal + $row['Total'];
						}
						$data['SelectedYearTotal'] = $CountTotal;
						$this->load->view('users/u_dashboard',$data);
					}
				}
			} else {
				$data['result_monthly_current_year'] =  $this->Model_Selects->GetMonthlyTotal($CurrentYear);
				$data['SelectedYear'] = $CurrentYear;
				$CountTotal = 0;
				foreach ($this->Model_Selects->GetMonthlyTotal($CurrentYear)->result_array() as $row) {
					$CountTotal = $CountTotal + $row['Total'];
				}
				$data['CurrentYearTotal'] = $CountTotal;
				$data['SelectedYearTotal'] = $CountTotal;
				$this->load->view('users/u_dashboard',$data);
			}
		}
		
	}
	
	public function V_Applicants()
	{
		unset($_SESSION["bencart"]);
		unset($_SESSION["acadcart"]);
		unset($_SESSION["ref_cart"]);
		unset($_SESSION["emp_cart"]);
		unset($_SESSION["mach_cart"]);

		$header['title'] = 'Applicants | Silangan Lumber';
		$data['T_Header'] = $this->load->view('_template/users/u_header',$header);
		$data['Breadcrumb'] = '
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb" style="background-color: transparent;">
				<li class="breadcrumb-item" aria-current="page"><a href="Employee">Employees</a></li>
				<li class="breadcrumb-item" aria-current="page"><a class="silangan-breadcrumb-active" href="Applicant">Applicants</a></li>
			</ol>
		</nav>';
		$data['get_employee'] = $this->Model_Selects->GetEmployee();
		$data['get_applicant'] = $this->Model_Selects->getApplicant();
		$data['get_ApplicantExpired'] = $this->Model_Selects->getApplicantExpired();
		$data['getBranchOption'] = $this->Model_Selects->getBranchOption();
		$this->load->view('users/u_applicant',$data);

	}
	public function V_ApplicantsExpired()
	{
		unset($_SESSION["bencart"]);
		unset($_SESSION["acadcart"]);
		unset($_SESSION["ref_cart"]);
		unset($_SESSION["emp_cart"]);
		unset($_SESSION["mach_cart"]);

		$header['title'] = 'Expired Contracts | Silangan Lumber';
		$data['T_Header'] = $this->load->view('_template/users/u_header',$header);
		$data['Breadcrumb'] = '
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb" style="background-color: transparent;">
				<li class="breadcrumb-item" aria-current="page"><a href="Employee">Employees</a></li>
				<li class="breadcrumb-item" aria-current="page"><a class="silangan-breadcrumb-active" href="ApplicantsExpired">Expired</a></li>
			</ol>
		</nav>';
		$data['get_employee'] = $this->Model_Selects->GetEmployee();
		$data['get_applicant'] = $this->Model_Selects->getApplicant();
		$data['get_ApplicantExpired'] = $this->Model_Selects->getApplicantExpired();
		$data['getBranchOption'] = $this->Model_Selects->getBranchOption();
		$this->load->view('users/u_applicantexpired',$data);
	}
	public function V_Archived()
	{
		unset($_SESSION["bencart"]);
		unset($_SESSION["acadcart"]);
		unset($_SESSION["ref_cart"]);
		unset($_SESSION["emp_cart"]);
		unset($_SESSION["mach_cart"]);

		$header['title'] = 'Archived | Silangan Lumber';
		$data['T_Header'] = $this->load->view('_template/users/u_header',$header);
		$data['Breadcrumb'] = '
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb" style="background-color: transparent;">
				<li class="breadcrumb-item" aria-current="page"><a href="Employee">Employees</a></li>
				<li class="breadcrumb-item" aria-current="page"><a class="silangan-breadcrumb-active" href="Blacklisted">Blacklisted</a></li>
			</ol>
		</nav>';
		$data['get_applicant'] = $this->Model_Selects->getApplicant();
		$data['get_ApplicantExpired'] = $this->Model_Selects->getApplicantExpired();
		$data['GetArchived'] = $this->Model_Selects->GetApplicantArchived();
		$data['getBranchOption'] = $this->Model_Selects->getBranchOption();
		$this->load->view('users/u_archived',$data);
	}
	public function V_Blacklisted()
	{
		unset($_SESSION["bencart"]);
		unset($_SESSION["acadcart"]);
		unset($_SESSION["ref_cart"]);
		unset($_SESSION["emp_cart"]);
		unset($_SESSION["mach_cart"]);

		$header['title'] = 'Blacklisted | Silangan Lumber';
		$data['T_Header'] = $this->load->view('_template/users/u_header',$header);
		$data['Breadcrumb'] = '
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb" style="background-color: transparent;">
				<li class="breadcrumb-item" aria-current="page"><a href="Employee">Employees</a></li>
				<li class="breadcrumb-item" aria-current="page"><a class="silangan-breadcrumb-active" href="Archived">Archived</a></li>
			</ol>
		</nav>';
		$data['get_applicant'] = $this->Model_Selects->getApplicant();
		$data['get_ApplicantExpired'] = $this->Model_Selects->getApplicantExpired();
		$data['GetBlacklisted'] = $this->Model_Selects->GetApplicantBlacklisted();
		$data['getBranchOption'] = $this->Model_Selects->getBranchOption();
		$this->load->view('users/u_blacklisted',$data);
	}
	public function Employee()
	{
		unset($_SESSION["bencart"]);
		unset($_SESSION["acadcart"]);
		unset($_SESSION["ref_cart"]);
		unset($_SESSION["emp_cart"]);
		unset($_SESSION["mach_cart"]);

		$header['title'] = 'Employees | Silangan Lumber';
		$data['T_Header'] = $this->load->view('_template/users/u_header',$header);
		$data['Breadcrumb'] = '
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb" style="background-color: transparent;">
				<li class="breadcrumb-item" aria-current="page"><a class="silangan-breadcrumb-active" href="Employee">Employees</a></li>
			</ol>
		</nav>';
		$data['get_employee'] = $this->Model_Selects->GetEmployee();
		$data['get_applicant'] = $this->Model_Selects->getApplicant();
		$data['get_ApplicantExpired'] = $this->Model_Selects->getApplicantExpired();
		$data['getBranchOption'] = $this->Model_Selects->getBranchOption();
		$this->load->view('users/u_users',$data);
	}
	public function ViewEmployee()
	{
		unset($_SESSION["bencart"]);
		unset($_SESSION["acadcart"]);
		unset($_SESSION["ref_cart"]);
		unset($_SESSION["emp_cart"]);
		unset($_SESSION["mach_cart"]);

		if (isset($_GET['id'])) {

			$id = $_GET['id'];

			$header['title'] = 'Information | Silangan Lumber';
			$data['T_Header'] = $this->load->view('_template/users/u_header',$header);

			$GetEmployeeDetails = $this->Model_Selects->GetEmployeeDetails($id);

			if ($GetEmployeeDetails->num_rows() > 0) {
				$ged = $GetEmployeeDetails->row_array();
				$data = array(
					'ApplicantNo' => $ged['ApplicantNo'],
					'ApplicantImage' => $ged['ApplicantImage'],
					'EmployeeID' => $ged['EmployeeID'],
					'ApplicantID' => $ged['ApplicantID'],
					'PositionDesired' => $ged['PositionDesired'],
					'PersonRecommending' => $ged['PersonRecommending'],
					'ContractType' => $ged['ContractType'],
					'SalaryType' => $ged['SalaryType'],
					'Rate' => $ged['Rate'],
					'SalaryExpected' => $ged['SalaryExpected'],
					'LastName' => $ged['LastName'],
					'FirstName' => $ged['FirstName'],
					'MiddleInitial' => $ged['MiddleInitial'],
					'Nickname' => $ged['Nickname'],
					'Gender' => $ged['Gender'],
					'Age' => $ged['Age'],
					'Height' => $ged['Height'],
					'Weight' => $ged['Weight'],
					'Religion' => $ged['Religion'],
					'BirthDate' => $ged['BirthDate'],
					'BirthPlace' => $ged['BirthPlace'],
					'MotherName' => $ged['MotherName'],
					'MotherOccupation' => $ged['MotherOccupation'],
					'FatherName' => $ged['FatherName'],
					'FatherOccupation' => $ged['FatherOccupation'],
					'RelName' => $ged['RelName'],
					'RelAddress' => $ged['RelAddress'],
					'RelRelation' => $ged['RelRelation'],
					'Citizenship' => $ged['Citizenship'],
					'CivilStatus' => $ged['CivilStatus'],
					'No_OfChildren' => $ged['No_OfChildren'],
					'Phone_No' => $ged['Phone_No'],
					'Address_Present' => $ged['Address_Present'],
					'Address_Provincial' => $ged['Address_Provincial'],
					'Address_Manila' => $ged['Address_Manila'],

					'SSS_No' => $ged['SSS_No'],
					'EffectiveDateCoverage' => $ged['EffectiveDateCoverage'],
					'ResidenceCertificateNo' => $ged['ResidenceCertificateNo'],
					'TIN' => $ged['TIN'],

					'HDMF' => $ged['HDMF'],

					'PhilHealth' => $ged['PhilHealth'],

					'ATM_No' => $ged['ATM_No'],

					'ConLDOR' => $ged['ConLDOR'],
					'ConMTAA' => $ged['ConMTAA'],
					'CaseAC' => $ged['CaseAC'],

					'Status' => $ged['Status'],

					'Overtime' => $ged['Overtime'],
					'Reassignment' => $ged['Reassignment'],

					'BranchEmployed' => $ged['BranchEmployed'],
					'SpouseName' => $ged['SpouseName'],
					'DateStarted' => $ged['DateStarted'],
					'DateEnds' => $ged['DateEnds'],
					'AppliedOn' => $ged['AppliedOn'],

					'ReminderDate' => $ged['ReminderDate'],
					'ReminderDateString' => $ged['ReminderDateString'],

				);
				$ApplicantID = $ged['ApplicantID'];
				$data['GetBeneficiaries'] = $this->Model_Selects->GetEmployeeBeneficiaries($ApplicantID);
				$data['GetAcadHistory'] = $this->Model_Selects->GetEmployeeAcadhis($ApplicantID);
				$data['GetCharRef'] = $this->Model_Selects->GetEmployeeCharRef($ApplicantID);
				$data['employment_record'] = $this->Model_Selects->GetEmploymentDetails($ApplicantID);
				$data['get_employee'] = $this->Model_Selects->GetEmployee();
				$data['getBranchOption'] = $this->Model_Selects->getBranchOption();
				$data['ShowBranches'] = $this->Model_Selects->GetBranches();
				$data['GetContractHistory'] = $this->Model_Selects->GetContractHistory($ApplicantID);
				$data['GetPreviousContract'] = $this->Model_Selects->GetPreviousContract($ApplicantID);
				$data['GetViolations'] = $this->Model_Selects->GetViolations($ApplicantID);
				$data['GetDocuments'] = $this->Model_Selects->GetDocuments($ApplicantID);
				$data['GetDocumentsViolations'] = $this->Model_Selects->GetDocumentsViolations($ApplicantID);
				$data['GetDocumentsNotes'] = $this->Model_Selects->GetDocumentsNotes($ApplicantID);
				// if ($data['Status'] == 'Employed') {
				// 	$data['Breadcrumb'] = '
				// 	<nav aria-label="breadcrumb">
				// 		<ol class="breadcrumb" style="background-color: transparent;">
				// 			<li class="breadcrumb-item" aria-current="page"><a href="Employee">Employees</a></li>
				// 			<li class="breadcrumb-item" aria-current="page"><a class="silangan-breadcrumb-active" href="ViewEmployee?id=' . $ApplicantID .'">Details</a></li>
				// 		</ol>
				// 	</nav>';
				// } else {
					$data['Breadcrumb'] = '
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb" style="background-color: transparent;">
							<li class="breadcrumb-item" aria-current="page"><a href="Employee">Employees</a></li>
							<li class="breadcrumb-item" aria-current="page"><a class="silangan-breadcrumb-active" href="ViewEmployee?id=' . $ApplicantID .'">Details</a></li>
						</ol>
					</nav>';
				// }
				$this->load->view('users/u_viewemployee',$data);
			}
			else
			{
				redirect('Employee');
			}
		}
		else
		{
			redirect('Employee');
		}
	}
	public function ModifyEmployee()
	{
		unset($_SESSION["bencart"]);
		unset($_SESSION["acadcart"]);
		unset($_SESSION["ref_cart"]);
		unset($_SESSION["emp_cart"]);
		unset($_SESSION["mach_cart"]);

		if (isset($_GET['id'])) {

			$id = $_GET['id'];

			$header['title'] = 'Modify | Silangan Lumber';
			$data['T_Header'] = $this->load->view('_template/users/u_header',$header);

			$GetEmployeeDetails = $this->Model_Selects->GetEmployeeDetails($id);

			if ($GetEmployeeDetails->num_rows() > 0) {
				$ged = $GetEmployeeDetails->row_array();
				$data = array(
					'ApplicantNo' => $ged['ApplicantNo'],
					'ApplicantImage' => $ged['ApplicantImage'],
					'ApplicantID' => $ged['ApplicantID'],
					'EmployeeID' => $ged['EmployeeID'],
					'PositionDesired' => $ged['PositionDesired'],
					'PersonRecommending' => $ged['PersonRecommending'],
					'ContractType' => $ged['ContractType'],
					'SalaryType' => $ged['SalaryType'],
					'Rate' => $ged['Rate'],
					'SalaryExpected' => $ged['SalaryExpected'],
					'LastName' => $ged['LastName'],
					'FirstName' => $ged['FirstName'],
					'MiddleInitial' => $ged['MiddleInitial'],
					'Nickname' => $ged['Nickname'],
					'Gender' => $ged['Gender'],
					'Age' => $ged['Age'],
					'Height' => $ged['Height'],
					'Weight' => $ged['Weight'],
					'Religion' => $ged['Religion'],
					'BirthDate' => $ged['BirthDate'],
					'BirthPlace' => $ged['BirthPlace'],
					'MotherName' => $ged['MotherName'],
					'MotherOccupation' => $ged['MotherOccupation'],
					'FatherName' => $ged['FatherName'],
					'FatherOccupation' => $ged['FatherOccupation'],
					'RelName' => $ged['RelName'],
					'RelAddress' => $ged['RelAddress'],
					'RelRelation' => $ged['RelRelation'],
					'Citizenship' => $ged['Citizenship'],
					'CivilStatus' => $ged['CivilStatus'],
					'SpouseName' => $ged['SpouseName'],
					'No_OfChildren' => $ged['No_OfChildren'],
					'Phone_No' => $ged['Phone_No'],
					'Address_Present' => $ged['Address_Present'],
					'Address_Provincial' => $ged['Address_Provincial'],
					'Address_Manila' => $ged['Address_Manila'],

					'SSS_No' => $ged['SSS_No'],
					'EffectiveDateCoverage' => $ged['EffectiveDateCoverage'],
					'ResidenceCertificateNo' => $ged['ResidenceCertificateNo'],
					'TIN' => $ged['TIN'],

					'HDMF' => $ged['HDMF'],

					'PhilHealth' => $ged['PhilHealth'],

					'ATM_No' => $ged['ATM_No'],
					
					'ConLDOR' => $ged['ConLDOR'],
					'ConMTAA' => $ged['ConMTAA'],
					'CaseAC' => $ged['CaseAC'],

					'Status' => $ged['Status'],

					'Overtime' => $ged['Overtime'],
					'Reassignment' => $ged['Reassignment'],


					'BranchEmployed' => $ged['BranchEmployed'],
					'DateStarted' => $ged['DateStarted'],
					'DateEnds' => $ged['DateEnds'],
					'AppliedOn' => $ged['AppliedOn'],

				);
				$ApplicantID = $ged['ApplicantID'];
				$data['GetBeneficiaries'] = $this->Model_Selects->GetEmployeeBeneficiaries($ApplicantID);
				$data['GetAcadHistory'] = $this->Model_Selects->GetEmployeeAcadhis($ApplicantID);
				$data['GetCharRef'] = $this->Model_Selects->GetEmployeeCharRef($ApplicantID);
				$data['employment_record'] = $this->Model_Selects->GetEmploymentDetails($ApplicantID);
				$data['get_employee'] = $this->Model_Selects->GetEmployee();
				$data['getBranchOption'] = $this->Model_Selects->getBranchOption();
				$data['ShowBranches'] = $this->Model_Selects->GetBranches();
				$data['GetContractHistory'] = $this->Model_Selects->GetContractHistory($ApplicantID);
				if ($data['Status'] == 'Employed') {
					$data['Breadcrumb'] = '
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb" style="background-color: transparent;">
							<li class="breadcrumb-item" aria-current="page"><a href="Employee">Employee</a></li>
							<li class="breadcrumb-item" aria-current="page"><a href="ViewEmployee?id=' . $ApplicantID .'">Details</a></li>
							<li class="breadcrumb-item" aria-current="page"><a class="silangan-breadcrumb-active" href="">Edit</a></li>
						</ol>
					</nav>';
				} else {
					$data['Breadcrumb'] = '
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb" style="background-color: transparent;">
							<li class="breadcrumb-item" aria-current="page"><a href="Employee">Employees</a></li>
							<li class="breadcrumb-item" aria-current="page"><a href="ViewEmployee?id=' . $ApplicantID .'">Details</a></li>
							<li class="breadcrumb-item" aria-current="page"><a class="silangan-breadcrumb-active" href="">Edit</a></li>
						</ol>
					</nav>';
				}
				$this->load->view('users/u_modifyemployee',$data);
			}
			else
			{
				redirect('Employee');
			}
		}
		else
		{
			redirect('Employee');
		}
	}
	public function NewEmployee()
	{
		unset($_SESSION["bencart"]);
		unset($_SESSION["acadcart"]);
		unset($_SESSION["ref_cart"]);
		unset($_SESSION["emp_cart"]);
		unset($_SESSION["mach_cart"]);
		
		$data['getBranchOption'] = $this->Model_Selects->getBranchOption();
		$header['title'] = 'New Employee | Silangan Lumber';
		$data['T_Header'] = $this->load->view('_template/users/u_header',$header);
		$data['Breadcrumb'] = '
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb" style="background-color: transparent;">
				<li class="breadcrumb-item" aria-current="page"><a href="Employee">Employees</a></li>
				<li class="breadcrumb-item" aria-current="page"><a class="silangan-breadcrumb-active" href="NewEmployee">New</a></li>
			</ol>
		</nav>';
		$this->load->view('users/u_addemployee',$data);
	}
	public function View_Admins()
	{
		unset($_SESSION["bencart"]);
		unset($_SESSION["acadcart"]);
		unset($_SESSION["ref_cart"]);
		unset($_SESSION["emp_cart"]);
		unset($_SESSION["mach_cart"]);

		$header['title'] = 'Administrator | Silangan Lumber';
		$data['T_Header'] = $this->load->view('_template/users/u_header',$header);
		$data['Breadcrumb'] = '
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb" style="background-color: transparent;">
				<li class="breadcrumb-item" aria-current="page"><a class="silangan-breadcrumb-active" href="Admin_List">Admins</a></li>
			</ol>
		</nav>';
		$data['ShowAdmin'] = $this->Model_Selects->GetAdmin();
		$this->load->view('users/u_admins',$data);
	}
	public function Branches()
	{
		unset($_SESSION["bencart"]);
		unset($_SESSION["acadcart"]);
		unset($_SESSION["ref_cart"]);
		unset($_SESSION["emp_cart"]);
		unset($_SESSION["mach_cart"]);

		$header['title'] = 'Branches | Silangan Lumber';
		$data['T_Header'] = $this->load->view('_template/users/u_header',$header);
		$data['Breadcrumb'] = '
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb" style="background-color: transparent;">
				<li class="breadcrumb-item" aria-current="page"><a class="silangan-breadcrumb-active" href="Branches">Branches</a></li>
			</ol>
		</nav>';
		$data['ShowBranches'] = $this->Model_Selects->GetBranches();
		$this->load->view('users/u_branches',$data);
	}
	public function PayrollBranches()
	{
		unset($_SESSION["bencart"]);
		unset($_SESSION["acadcart"]);
		unset($_SESSION["ref_cart"]);
		unset($_SESSION["emp_cart"]);
		unset($_SESSION["mach_cart"]);

		$header['title'] = 'Branches | Silangan Lumber';
		$data['T_Header'] = $this->load->view('_template/users/u_header',$header);
		$data['Breadcrumb'] = '
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb" style="background-color: transparent;">
				<li class="breadcrumb-item" aria-current="page"><a class="silangan-breadcrumb-active" href="Payroll">Payroll</a></li>
			</ol>
		</nav>';
		$data['ShowBranches'] = $this->Model_Selects->GetBranches();
		$data['GetLogbookLatestHires'] =  $this->Model_Selects->GetLogbookLatestHires();
		$this->load->view('payroll/p_branches',$data);
	}
	public function Payrollsss()
	{
		unset($_SESSION["acadcart"]);
		unset($_SESSION["emp_cart"]);
		unset($_SESSION["mach_cart"]);

		$id = $_GET['id'];

		$header['title'] = 'Branch Information | Wercher Solutions and Resources Workers Cooperative';
		$data['T_Header'] = $this->load->view('_template/users/u_header',$header);

		$GetWeeklyList = $this->Model_Selects->GetWeeklyList($id);

		$row = $GetWeeklyList->row_array();
		$data = array(
			'BranchID' => $row['BranchID'],
			'ApplicantID' => $row['ApplicantID'],

		);
		$ApplicantID = $row['ApplicantID'];
		$data['GetWeeklyListEmployee'] = $this->Model_Selects->GetWeeklyListEmployee($id);
		
		$data['get_applicantContri'] = $this->Model_Selects->get_applicantContri($id);
		


		$data['IsFromExcel'] = False;
		$data['Breadcrumb'] = '
		<nav aria-label="breadcrumb">
		<ol class="breadcrumb" style="background-color: transparent;">
		<li class="breadcrumb-item" aria-current="page"><a href="Payroll">Payroll</a></li>
		<li class="breadcrumb-item" aria-current="page"><a class="wercher-breadcrumb-active" href="ViewBranch?id=' . $id . '">Details</a></li>
		</ol>
		</nav>';

		// $data['ShowBranchs'] = $this->Model_Selects->GetBranchs();
		$data['GetLogbookLatestHires'] =  $this->Model_Selects->GetLogbookLatestHires();
		$this->load->view('payroll/p_payrolls',$data);
	}
	public function ViewBranch()
	{
		unset($_SESSION["bencart"]);
		unset($_SESSION["acadcart"]);
		unset($_SESSION["ref_cart"]);
		unset($_SESSION["emp_cart"]);
		unset($_SESSION["mach_cart"]);

		if (isset($_GET['id'])) {

			$id = $_GET['id'];

			$header['title'] = 'Branch Information | Silangan Lumber';
			$data['T_Header'] = $this->load->view('_template/users/u_header',$header);

			$GetWeeklyList = $this->Model_Selects->GetWeeklyList($id);

			$row = $GetWeeklyList->row_array();
			$data = array(
				'BranchID' => $row['BranchID'],
				'ApplicantID' => $row['ApplicantID'],

			);
			$ApplicantID = $row['ApplicantID'];
			$data['GetWeeklyList'] = $this->Model_Selects->GetWeeklyList($id);
			$data['GetWeeklyListEmployee'] = $this->Model_Selects->GetWeeklyListEmployee($id);
			// $data['GetWeeklyListEmployeeActive'] = $this->Model_Selects->GetWeeklyListEmployeeActive($id);
			$data['GetBranchID'] = $this->Model_Selects->GetBranchID($id);
			$data['GetWeeklyDates'] = $this->Model_Selects->GetWeeklyDates();
			// $data['GetWeeklyDatesForEmployee'] = $this->Model_Selects->GetWeeklyDatesForEmployee($row['ApplicantID']);
			$data['IsFromExcel'] = False;
			$data['Breadcrumb'] = '
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb" style="background-color: transparent;">
					<li class="breadcrumb-item" aria-current="page"><a href="Payroll">Payroll</a></li>
					<li class="breadcrumb-item" aria-current="page"><a class="silangan-breadcrumb-active" href="ViewBranch?id=' . $id . '">Details</a></li>
				</ol>
			</nav>';
			$this->load->view('payroll/p_viewBranch',$data);
		}
		else
		{
			redirect('Branches');
		}
	}
	public function Experimental()
	{
		unset($_SESSION["bencart"]);
		unset($_SESSION["acadcart"]);
		unset($_SESSION["ref_cart"]);
		unset($_SESSION["emp_cart"]);
		unset($_SESSION["mach_cart"]);

		$header['title'] = 'Experimental | Silangan Lumber';
		$data['T_Header'] = $this->load->view('_template/users/u_header',$header);
		$data['Breadcrumb'] = '
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb" style="background-color: transparent;">
					<li class="breadcrumb-item" aria-current="page"><a class="silangan-breadcrumb-active" href="Experimental">Experimental</a></li>
				</ol>
			</nav>';
		$this->load->library('SimpleXLSX');
		$this->load->view('users/u_experimental',$data);
	}

	// BENEFICIARIES
	public function showBen()
	{

		if (isset($_SESSION['bencart'])) {
			echo '<hr>';
			echo '<h6 class="ml-2"><i class="fas fa-save"></i> New Record</h6>';
			echo '<table class="table table-bordered">
			<thead>
				<th></th>
				<th>Name</th>
				<th>Relationship</th>
				<th>Action</th>
			</thead>
			<tbody>';
			foreach ($_SESSION['bencart'] as $s_da) {
				echo '
				<tr>
				<td>
				'.$s_da['bencart']['BenWhat'] .'
				</td>
				<td>
				'.$s_da['bencart']['BenName'] .'
				</td>
				<td>
				'.$s_da['bencart']['BenRelation'] .'
				</td>
				<td>
					<button id="'.$s_da['bencart']['c_id'].'" class="remoach btn btn-sm btn-danger" type="button"><i class="fas fa-times"></i> Discard</button>
				</td>
				</tr>
				';
			}
			echo '</tbody>
			</table>
			<hr>';
		}
		echo '<button class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target="#benFields"><i class="fas fa-plus"></i> Add Data</button>';
	}
	public function atcBen()
	{
		$min=10000000;
		$max=99999999;
		$rint = random_int($min,$max);

		$BenWhat = $_POST["BenWhat"];
		$BenName = $_POST["BenName"];
		$BenRelation = $_POST["BenRelation"];
		if ($BenWhat == NULL || $BenName == NULL || $BenRelation == NULL) {
			echo "Error";
		}
		else
		{
			foreach ($_SESSION["bencart"] as $s_da => $row) {
				if ($row['bencart']['c_id'] == $rint) {
					exit();
				}
			}
			if (!isset($_SESSION ['bencart'] )) {
				$_SESSION ['bencart'] = array ();
			}
			$data['bencart'] = array(
				'c_id' => $rint,
				'BenWhat' => $BenWhat,
				'BenName' => $BenName,
				'BenRelation' => $BenRelation,
			);
			$_SESSION['bencart'][] = $data;
		}
	}
	public function removeBen()
	{
		foreach ($_SESSION["bencart"] as $s_da => $row) {
			if ($row['bencart']['c_id'] == $_POST['row_id']) {
				unset($_SESSION["bencart"][$s_da]);
				if(empty($_SESSION["bencart"]))
					unset($_SESSION["bencart"]);
			}
		}
	}

	// ACADEMIC HISTORY
	public function showAcad()
	{

		if (isset($_SESSION['acadcart'])) {
			echo '<hr>';
			echo '<h6 class="ml-2"><i class="fas fa-save"></i> New Record</h6>';
			echo '<table class="table table-bordered">
			<thead>
			<th>Level</th>
			<th>School Name</th>
			<th>School Address
			<th>From Year</th>
			<th>To Year</th>
			<th>Highest Degree / Certificate Attained</th>
			<th>Action</th>
			</thead>
			<tbody>';
			foreach ($_SESSION['acadcart'] as $s_da) {
				echo '
				<tr>
				<td>
				'.$s_da['acadcart']['SchoolLevel'] .'
				</td>
				<td>
				'.$s_da['acadcart']['SchoolName'] .'
				</td>
				<td>
				'.$s_da['acadcart']['SchoolAddress'] .'
				</td>
				<td>
				'.$s_da['acadcart']['FromYearSchool'] .'
				</td>
				<td>
				'.$s_da['acadcart']['ToYearSchool'] .'
				</td>
				<td>
				'.$s_da['acadcart']['H_Attained'] .'
				</td>
				<td>
				<button id="'.$s_da['acadcart']['c_id'].'" class="remoach btn btn-sm btn-danger" type="button"><i class="fas fa-times"></i> Discard</button>
				</td>
				</tr>
				';
			}
			echo '</tbody>
			</table>
			<hr>';
		}
		echo '<button class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target="#acadFields"><i class="fas fa-plus"></i> Add Data</button>';
	}
	public function add_to_cart()
	{
		$min=10000000;
		$max=99999999;
		$rint = random_int($min,$max);

		$SchoolLevel = $_POST["SchoolLevel"];
		$SchoolName = $_POST["SchoolName"];
		$SchoolAddress = $_POST["SchoolAddress"];
		$FromYearSchool = $_POST["FromYearSchool"];
		$ToYearSchool = $_POST["ToYearSchool"];
		$H_Attained = $_POST["H_Attained"];
		if ($SchoolLevel == NULL || $SchoolName == NULL || $FromYearSchool == NULL || $ToYearSchool == NULL || $SchoolAddress == NULL || $H_Attained == NULL) {
			echo "Error";
		}
		else
		{
			foreach ($_SESSION["acadcart"] as $s_da => $row) {
				if ($row['acadcart']['c_id'] == $rint) {
					exit();
				}
			}
			if (!isset($_SESSION ['acadcart'] )) {
				$_SESSION ['acadcart'] = array ();
			}
			$data['acadcart'] = array(
				'c_id' => $rint,
				'SchoolLevel' => $SchoolLevel,
				'SchoolName' => $SchoolName,
				'SchoolAddress' => $SchoolAddress,
				'FromYearSchool' => $FromYearSchool,
				'ToYearSchool' => $ToYearSchool,
				'H_Attained' => $H_Attained,
			);
			$_SESSION['acadcart'][] = $data;
		}
	}
	public function removeAcad()
	{
		foreach ($_SESSION["acadcart"] as $s_da => $row) {
			if ($row['acadcart']['c_id'] == $_POST['row_id']) {
				unset($_SESSION["acadcart"][$s_da]);
				if(empty($_SESSION["acadcart"]))
					unset($_SESSION["acadcart"]);
			}
		}
	}

	// EMPLOYMENT RECORD
	public function add_toemp()
	{
		$min=10000000;
		$max=99999999;
		$rint = random_int($min,$max);

		$EmployeerName = $_POST["EmployeerName"];
		$emAddress = $_POST["emAddress"];
		$PeriodCovered = $_POST["PeriodCovered"];
		$Position = $_POST["Position"];
		$Salary = $_POST["Salary"];
		$cos = $_POST["cos"];
		if ($EmployeerName == NULL || $emAddress == NULL || $PeriodCovered == NULL || $Position == NULL || $Salary == NULL || $cos == NULL) {
			echo "Error";
		}
		else
		{
			foreach ($_SESSION["emp_cart"] as $s_da => $row) {
				if ($row['emp_cart']['emp_id'] == $rint) {
					exit();
				}
			}
			if (!isset($_SESSION ['emp_cart'] )) {
				$_SESSION ['emp_cart'] = array ();
			}
			$data['emp_cart'] = array(
				'emp_id' => $rint,
				'EmployeerName' => $EmployeerName,
				'emAddress' => $emAddress,
				'PeriodCovered' => $PeriodCovered,
				'Position' => $Position,
				'Salary' => $Salary,
				'cos' => $cos,
			);
			$_SESSION['emp_cart'][] = $data;
		}
	}
	public function showSkills()
	{

		if (isset($_SESSION['emp_cart'])) {
			echo '<hr>';
			echo '<h6 class="ml-2"><i class="fas fa-save"></i> New Record</h6>';
			echo '<table class="table table-bordered">
			<thead>
			<th>Name</th>
			<th>Address</th>
			<th>Period Covered</th>
			<th>Position</th>
			<th>Salary</th>
			<th>Cause of Separation</th>

			<th>Action</th>
			</thead>
			<tbody>';
			foreach ($_SESSION['emp_cart'] as $s_da) {
				echo '
				<tr>
				<td>
				'.$s_da['emp_cart']['EmployeerName'] .'
				</td>
				<td>
				'.$s_da['emp_cart']['emAddress'] .'
				</td>
				<td>
				'.$s_da['emp_cart']['PeriodCovered'] .'
				</td>
				<td>
				'.$s_da['emp_cart']['Position'] .'
				</td>
				<td>
				'.$s_da['emp_cart']['Salary'] .'
				</td>
				<td>
				'.$s_da['emp_cart']['cos'] .'
				</td>
				<td>
				<button id="'.$s_da['emp_cart']['emp_id'].'" class="remoaemop btn btn-sm btn-danger" type="button"><i class="fas fa-times"></i> Discard</button>
				</td>
				</tr>
				';
			}
			echo '</tbody>
			</table>
			<hr>';
		}
		echo '<button class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target="#skillsFields"><i class="fas fa-plus"></i> Add Data</button>';
	}
	public function removeemp()
	{
		foreach ($_SESSION["emp_cart"] as $s_da => $row) {
			if ($row['emp_cart']['emp_id'] == $_POST['row_id']) {
				unset($_SESSION["emp_cart"][$s_da]);
				if(empty($_SESSION["emp_cart"]))
					unset($_SESSION["emp_cart"]);
			}
		}
	}

	// CHARACTER REFERENCES
	public function showRef()
	{

		if (isset($_SESSION['ref_cart'])) {
			echo '<hr>';
			echo '<h6 class="ml-2"><i class="fas fa-save"></i> New Record</h6>';
			echo '<table class="table table-bordered">
			<thead>
				<th>Name</th>
				<th>Position</th>
				<th>Company / Address</th>
				<th>Action</th>
			</thead>
			<tbody>';
			foreach ($_SESSION['ref_cart'] as $s_da) {
				echo '
				<tr>
					<td>
					'.$s_da['ref_cart']['RefName'] .'
					</td>
					<td>
					'.$s_da['ref_cart']['RefPosition'] .'
					</td>
					<td>
					'.$s_da['ref_cart']['CompanyAddress'] .'
					</td>
					<td>
					<button id="'.$s_da['ref_cart']['c_id'].'" class="remoach btn btn-sm btn-danger" type="button"><i class="fas fa-times"></i> Discard</button>
					</td>
				</tr>
				';
			}
			echo '</tbody>
			</table>
			<hr>';
		}
		echo '<button class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target="#refFields"><i class="fas fa-plus"></i> Add Data</button>';
	}
	public function atcRef()
	{
		$min=10000000;
		$max=99999999;
		$rint = random_int($min,$max);

		$RefName = $_POST["RefName"];
		$Position = $_POST["RefPosition"];
		$CompanyAddress = $_POST["CompanyAddress"];
		if ($RefName == NULL || $Position == NULL || $CompanyAddress == NULL) {
			echo "Error";
		}
		else
		{
			foreach ($_SESSION["ref_cart"] as $s_da => $row) {
				if ($row['ref_cart']['c_id'] == $rint) {
					exit();
				}
			}
			if (!isset($_SESSION ['ref_cart'] )) {
				$_SESSION ['ref_cart'] = array ();
			}
			$data['ref_cart'] = array(
				'c_id' => $rint,
				'RefName' => $RefName,
				'RefPosition' => $Position,
				'CompanyAddress' => $CompanyAddress,
			);
			$_SESSION['ref_cart'][] = $data;
		}
	}
	public function removeRef()
	{
		foreach ($_SESSION["ref_cart"] as $s_da => $row) {
			if ($row['ref_cart']['c_id'] == $_POST['row_id']) {
				unset($_SESSION["ref_cart"][$s_da]);
				if(empty($_SESSION["ref_cart"]))
					unset($_SESSION["ref_cart"]);
			}
		}
	}
	public function Logout()
	{
		session_destroy();
	}
}
