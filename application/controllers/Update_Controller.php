<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update_Controller extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->model('Model_Selects');
		$this->load->model('Model_Inserts');
		$this->load->model('Model_Deletes');
		$this->load->model('Model_Updates');
	}
	public function EmployApplicant()
	{
		if (isset($_POST['ApplicantID'])) {
			$ApplicantID = $this->input->post('ApplicantID',FALSE); // TODO: (Dec 12, 2019) Changed from TRUE to FALSE > No XSS filtering.
			$BranchID = $this->input->post('BranchID',TRUE);
			$H_Days = $this->input->post('H_Days',TRUE);
			$H_Months = $this->input->post('H_Months',TRUE);
			$H_Years = $this->input->post('H_Years',TRUE);
			$Salary = $this->input->post('Salary',TRUE);
			$EmployeeID = $this->input->post('EmployeeID',TRUE);
			if($H_Days == NULL) {
				$H_Days = 0;
			}
			if($H_Months == NULL) {
				$H_Months = 0;
			}
			if($H_Years == NULL) {
				$H_Years = 0;
			}
			$Temp_ApplicantID = $ApplicantID;
			$Temp_ApplicantID++;

			if ($ApplicantID == NULL || $BranchID == NULL || $EmployeeID == NULL) {
				$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><h5><i class="fas fa-times"></i> Something\'s wrong, Please try again! (Error: Missing Field/s) A:' . $ApplicantID . ' C:' . $BranchID .' D:' . $H_Days . ' H:' . $H_Months . ' Y:' . $H_Years . ' </h5></div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
			else
			{
				$CheckApplicant = $this->Model_Selects->CheckApplicant($ApplicantID);
				if ($CheckApplicant->num_rows() > 0) {
					$row = $CheckApplicant->row_array();

					date_default_timezone_set('Asia/Manila');

					$DateStarted = date('Y-m-d h:i:s A');

					if ($H_Months == NULL) {
						$DateEnds = date('Y-m-d h:i:s A', strtotime('+0 months', strtotime($DateStarted)));
					} else {
						$DateEnds = date('Y-m-d h:i:s A', strtotime('+'.$H_Months.' months', strtotime($DateStarted)));
					}
					if ($H_Days == NULL) {
						$DateEnds = date('Y-m-d h:i:s A', strtotime('+0 days', strtotime($DateEnds)));
					} else {
						$DateEnds = date('Y-m-d h:i:s A', strtotime('+'.$H_Days.' days', strtotime($DateEnds)));
					}
					if ($H_Years == NULL) {
						$DateEnds = date('Y-m-d h:i:s A', strtotime('+0 days', strtotime($DateEnds)));
					} else {
						$DateEnds = date('Y-m-d h:i:s A', strtotime('+'.$H_Years.' years', strtotime($DateEnds)));
					}

					$data = array(
						'EmployeeID' => $EmployeeID,
						'BranchEmployed' => $BranchID,
						'DateStarted' => $DateStarted,
						'DateEnds' => $DateEnds,
						'Salary' => $Salary,
					);
					$EmployNewApplicant = $this->Model_Updates->EmployNewApplicant($Temp_ApplicantID,$ApplicantID,$data);
					$data = array(
						'BranchID' => $BranchID,
						'FirstName' => $row['FirstName'],
						'MiddleInitial' => $row['MiddleInitial'],
						'LastName' => $row['LastName'],
						'SalaryExpected' => $row['SalaryExpected'],
					);
					$EmployNewApplicant = $this->Model_Inserts->InsertToBranch($BranchID,$Temp_ApplicantID,$data);
					if ($EmployNewApplicant == TRUE) {
						$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #45C830;"><h5><i class="fas fa-check"></i> Applicant employed!</h5></div>');

						// LOGBOOK
						$GetBranchInfo = $this->Model_Selects->GetBranchDet($BranchID);
						$BranchInfo = $GetBranchInfo->row_array();
						date_default_timezone_set('Asia/Manila');
						$LogbookCurrentTime = date('Y-m-d h:i:s A');
						$LogbookType = 'Employment';
						$LogbookEvent = 'Applicant ID ' . $ApplicantID .' has been employed to Branch ' . $BranchInfo['Name'] . ' for ';
						if($H_Years != 0) {
							$LogbookEvent = $LogbookEvent . $H_Years;
							if($H_Years == 1) {
								$LogbookEvent = $LogbookEvent . ' year, ';
							} else {
								$LogbookEvent = $LogbookEvent . ' years, ';
							}
						}
						if($H_Months != 0) {
							$LogbookEvent = $LogbookEvent . $H_Months;
							if($H_Months == 1) {
								$LogbookEvent = $LogbookEvent . ' month, ';
							} else {
								$LogbookEvent = $LogbookEvent . ' months, ';
							}
						}
						if($H_Days != 0) {
							$LogbookEvent = $LogbookEvent . $H_Days;
							if($H_Days == 1) {
								$LogbookEvent = $LogbookEvent . ' day, ';
							} else {
								$LogbookEvent = $LogbookEvent . ' days, ';
							}
						}
						$LogbookEvent = substr($LogbookEvent, 0, -2) . '!';
						$LogbookLink = 'ViewEmployee?id=' . $ApplicantID;
						$data = array(
							'Time' => $LogbookCurrentTime,
							'Type' => $LogbookType,
							'AdminID' => $_SESSION["AdminID"],
							'Event' => $LogbookEvent,
							'Link' => $LogbookLink,
						);
						$LogbookInsert = $this->Model_Inserts->InsertLogbook($data);

						redirect($_SERVER['HTTP_REFERER']);
					}
					else
					{
						$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><h5><i class="fas fa-times"></i> Something\'s wrong, Please try agains!</h5></div>');
						redirect($_SERVER['HTTP_REFERER']);
					}
				}
				else
				{
					$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><h5><i class="fas fa-times"></i> Something\'s wrong, Please try againss!</h5></div>');
					redirect($_SERVER['HTTP_REFERER']);
				}
			}
		}
		else
		{
			$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><h5><i class="fas fa-times"></i> Something\'s wrong, Please try againsss!</h5></div>');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}
	public function ExtendContract()
	{
		if (isset($_POST['ApplicantID'])) {
			$ApplicantID = $this->input->post('ApplicantID',FALSE); // TODO: (Dec 12, 2019) Changed from TRUE to FALSE > No XSS filtering.
			$E_CurrentDate = $this->input->post('E_CurrentDate',TRUE);
			$E_Days = $this->input->post('E_Days',TRUE);
			$E_Months = $this->input->post('E_Months',TRUE);
			$E_Years = $this->input->post('E_Years',TRUE);

			if ($E_CurrentDate == NULL || $ApplicantID == NULL) {
				$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><h5><i class="fas fa-times"></i> Something\'s wrong, Please try again! (Error: Extend Contract) </h5></div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
			elseif ($E_Days + $E_Months + $E_Years < 1) {
				redirect($_SERVER['HTTP_REFERER']);
			}
			else
			{
				$CheckApplicant = $this->Model_Selects->CheckApplicant($ApplicantID);
				if ($CheckApplicant->num_rows() > 0) {

					date_default_timezone_set('Asia/Manila');

					if ($E_Months == NULL) {
						$DateEnds = date('Y-m-d h:i:s A', strtotime('+0 months', strtotime($E_CurrentDate)));
					} else {
						$DateEnds = date('Y-m-d h:i:s A', strtotime('+'.$E_Months.' months', strtotime($E_CurrentDate)));
					}
					if ($E_Days == NULL) {
						$DateEnds = date('Y-m-d h:i:s A', strtotime('+0 days', strtotime($DateEnds)));
					} else {
						$DateEnds = date('Y-m-d h:i:s A', strtotime('+'.$E_Days.' days', strtotime($DateEnds)));
					}
					if ($E_Years == NULL) {
						$DateEnds = date('Y-m-d h:i:s A', strtotime('+0 days', strtotime($DateEnds)));
					} else {
						$DateEnds = date('Y-m-d h:i:s A', strtotime('+'.$E_Years.' years', strtotime($DateEnds)));
					}

					$data = array(
						'DateEnds' => $DateEnds,
					);
					$EmployNewApplicant = $this->Model_Updates->ExtendContract($ApplicantID,$data);
					if ($EmployNewApplicant == TRUE) {
						$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #45C830;"><h5><i class="fas fa-check"></i> Contract Extended to ' . $DateEnds . '!</h5></div>');

						// LOGBOOK
						date_default_timezone_set('Asia/Manila');
						$LogbookCurrentTime = date('Y-m-d h:i:s A');
						$LogbookType = 'Update';
						$LogbookEvent = 'Applicant ID ' . $ApplicantID .' has their contract extended by ';
						if($E_Years != 0) {
							$LogbookEvent = $LogbookEvent . $E_Years;
							if($E_Years == 1) {
								$LogbookEvent = $LogbookEvent . ' year, ';
							} else {
								$LogbookEvent = $LogbookEvent . ' years, ';
							}
						}
						if($E_Months != 0) {
							$LogbookEvent = $LogbookEvent . $E_Months;
							if($E_Months == 1) {
								$LogbookEvent = $LogbookEvent . ' month, ';
							} else {
								$LogbookEvent = $LogbookEvent . ' months, ';
							}
						}
						if($E_Days != 0) {
							$LogbookEvent = $LogbookEvent . $E_Days;
							if($E_Days == 1) {
								$LogbookEvent = $LogbookEvent . ' day, ';
							} else {
								$LogbookEvent = $LogbookEvent . ' days, ';
							}
						}
						$LogbookEvent = substr($LogbookEvent, 0, -2) . '!';
						$LogbookLink = 'ViewEmployee?id=' . $ApplicantID . '#Contract';
						$data = array(
							'Time' => $LogbookCurrentTime,
							'Type' => $LogbookType,
							'AdminID' => $_SESSION["AdminID"],
							'Event' => $LogbookEvent,
							'Link' => $LogbookLink,
						);
						$LogbookInsert = $this->Model_Inserts->InsertLogbook($data);

						redirect($_SERVER['HTTP_REFERER'] . '#Contract');
					}
					else
					{
						$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><h5><i class="fas fa-times"></i> Something\'s wrong, Please try agains!</h5></div>');
						redirect($_SERVER['HTTP_REFERER']);
					}
				}
				else
				{
					$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><h5><i class="fas fa-times"></i> Something\'s wrong, Please try againss!</h5></div>');
					redirect($_SERVER['HTTP_REFERER']);
				}
			}
		}
		else
		{
			$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><h5><i class="fas fa-times"></i> Something\'s wrong, Please try againsss!</h5></div>');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}
	public function UpdateEmployee()
	{
		$ApplicantID = $this->input->post('M_ApplicantID');
		$EmployeeID = $this->input->post('EmployeeID');
		$pImage = $this->input->post('M_ApplicantImage');
		# PERSONAL INFORMATION
		$PositionGroup = $this->input->post('PositionGroup');
		$ContractType = $this->input->post('ContractType');
		$PersonRecommending = $this->input->post('PersonRecommending');
		$SalaryType = $this->input->post('SalaryType');
		$Rate = $this->input->post('Rate');
		$SalaryExpected = $this->input->post('SalaryExpected');
		$LastName = $this->input->post('LastName');
		$FirstName = $this->input->post('FirstName');
		$MI = $this->input->post('MI');
		$Nickname = $this->input->post('Nickname');
		$Gender = $this->input->post('Gender');
		$Age = $this->input->post('Age');
		$Height = $this->input->post('Height');
		$Weight = $this->input->post('Weight');
		$Religion = $this->input->post('Religion');
		
		$bDate = $this->input->post('bDate');
		$bPlace = $this->input->post('bPlace');
		$Citizenship = $this->input->post('Citizenship');
		$CivilStatus = $this->input->post('CivilStatus');
		$SpouseName = $this->input->post('SpouseName');
		$No_Children = $this->input->post('No_Children');
		$PhoneNumber = $this->input->post('PhoneNumber');


		$MotherName = $this->input->post('MotherName');
		$MotherOccupation = $this->input->post('MotherOccupation');
		$FatherName = $this->input->post('FatherName');
		$FatherOccupation = $this->input->post('FatherOccupation');
		$RelName = $this->input->post('RelName');
		$RelAddress = $this->input->post('RelAddress');
		$RelRelation = $this->input->post('RelRelation');
		$PhoneNumber = $this->input->post('PhoneNumber');
		$PhoneNumber = $this->input->post('PhoneNumber');
		$PhoneNumber = $this->input->post('PhoneNumber');
		# DOCUMENTS
		$SSS = $this->input->post('SSS');
		$SSS_Effective = $this->input->post('SSS_Effective');
		$RCN = $this->input->post('RCN');
		$TIN = $this->input->post('TIN');

		$HDMF = $this->input->post('HDMF');

		$PhilHealth = $this->input->post('PhilHealth');
		$ATM_No = $this->input->post('ATM_No');

		$ConLDOR = $this->input->post('ConLDOR');
		$ConMTAA = $this->input->post('ConMTAA');
		$CaseAC = $this->input->post('CaseAC');

		$Overtime = $this->input->post('Overtime');
		$Reassignment = $this->input->post('Reassignment');

		$AppliedOn = $this->input->post('AppliedOn');

		# ADDRESSES
		$Address_Present = $this->input->post('Address_Present');
		$Address_Provincial = $this->input->post('Address_Provincial');
		$Address_Manila = $this->input->post('Address_Manila');

		if ($pImage == NULL || $PositionGroup == NULL || $LastName == NULL || $FirstName == NULL || $MI == NULL) {
			$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><h5><i class="fas fa-times"></i> All fields are required!</h5></div>');
			$data = array(
				'EmployeeID' => $EmployeeID,
				'PositionGroup' => $PositionGroup,
				'ContractType' => $ContractType,
				'PersonRecommending' => $PersonRecommending,
				'SalaryType' => $SalaryType,
				'Rate' => $Rate,
				'SalaryExpected' => $SalaryExpected,
				'LastName' => $LastName,
				'FirstName' => $FirstName,
				'MI' => $MI,
				'Nickname' => $Nickname,
				'Gender' => $Gender,
				'Age' => $Age,
				'Height' => $Height,
				'Weight' => $Weight,
				'Religion' => $Religion,
				'bDate' => $bDate,
				'bPlace' => $bPlace,
				'Citizenship' => $Citizenship,
				'CivilStatus' => $CivilStatus,
				'SpouseName' => $SpouseName,
				'No_Children' => $No_Children,
				'PhoneNumber' => $PhoneNumber,

				'MotherName' => $MotherName,
				'MotherOccupation' => $MotherOccupation,
				'FatherName' => $FatherName,
				'FatherOccupation' => $FatherOccupation,
				'RelName' => $RelName,
				'RelAddress' => $RelAddress,
				'RelRelation' => $RelRelation,

				'SSS' => $SSS,
				'SSS_Effective' => $SSS_Effective,
				'RCN' => $RCN,
				'TIN' => $TIN,

				'HDMF' => $HDMF,
				'ATM_No' => $ATM_No,

				'ConLDOR' => $ConLDOR,
				'ConMTAA' => $ConMTAA,
				'CaseAC' => $CaseAC,

				'Overtime' => $Overtime,
				'Reassignment' => $Reassignment,

				'PhilHealth' => $PhilHealth,
				

				'Address_Present' => $Address_Present,
				'Address_Provincial' => $Address_Provincial,
				'Address_Manila' => $Address_Manila,
			);
			$this->session->set_flashdata($data);
			redirect($_SERVER['HTTP_REFERER']);
		}
		else
		{
			if (!$_FILES['pImage']['name'] == '') {
				$config['upload_path']          = './uploads/'.$ApplicantID;
				$config['allowed_types']        = 'gif|jpg|png';
				$config['max_size']             = 2000;
				$config['max_width']            = 2000;
				$config['max_height']           = 2000;

				$this->load->library('upload', $config);
				if (!is_dir('uploads'))
				{
					mkdir('./uploads', 0777, true);
				}
				if (!is_dir('uploads/' . $ApplicantID))
				{
					mkdir('./uploads/' . $ApplicantID, 0777, true);
					$dir_exist = false;
				}

				if (! $this->upload->do_upload('pImage'))
				{
					$this->session->set_flashdata('prompts', '<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><h5><i class="fas fa-times"></i> '.$this->upload->display_errors().'</h5></div>');
					redirect($_SERVER['HTTP_REFERER']);
				}
				else
				{
					$pImage = 'uploads/'.$ApplicantID.'/'.$this->upload->data('file_name');
				}
			}
				// INSERT EMPLOYEE
			$data = array(
				'ApplicantImage' => $pImage,
				'ApplicantID' => $ApplicantID,
				'EmployeeID' => $EmployeeID,
				'PositionGroup' => $PositionGroup,
				'ContractType' => $ContractType,
				'PersonRecommending' => $PersonRecommending,
				'SalaryType' => $SalaryType,
				'Rate' => $Rate,
				'SalaryExpected' => $SalaryExpected,
				'LastName' => ucfirst($LastName),
				'FirstName' => ucfirst($FirstName),
				'MiddleInitial' => ucfirst($MI),
				'Nickname' => ucfirst($Nickname),
				'Gender' => $Gender,
				'Age' => $Age,
				'Height' => $Height,
				'Weight' => $Weight,
				'Religion' => $Religion,
				'BirthDate' => $bDate,
				'BirthPlace' => $bPlace,
				'Citizenship' => $Citizenship,
				'CivilStatus' => $CivilStatus,
				'SpouseName' => $SpouseName,
				'No_OfChildren' => $No_Children,

				'MotherName' => $MotherName,
				'MotherOccupation' => $MotherOccupation,
				'FatherName' => $FatherName,
				'FatherOccupation' => $FatherOccupation,
				'RelName' => $RelName,
				'RelAddress' => $RelAddress,
				'RelRelation' => $RelRelation,

				'Address_Present' => $Address_Present,
				'Address_Provincial' => $Address_Provincial,
				'Address_Manila' => $Address_Manila,

				'Phone_No' => $PhoneNumber,

				'SSS_No' => $SSS,
				'EffectiveDateCoverage' => $SSS_Effective,
				'ResidenceCertificateNo' => $RCN,
				'TIN' => $TIN,

				'HDMF' => $HDMF,
				'ATM_No' => $ATM_No,

				'ConLDOR' => $ConLDOR,
				'ConMTAA' => $ConMTAA,
				'CaseAC' => $CaseAC,

				'Overtime' => $Overtime,
				'Reassignment' => $Reassignment,

				'PhilHealth' => $PhilHealth,

				'AppliedOn' => $AppliedOn,
			);
			$addedEmployee = $this->Model_Updates->UpdateEmployee($ApplicantID, $data);
			if ($addedEmployee == TRUE) {

				$BenCheckbox = $this->input->post('BenCheckbox');
				$listCheck = "'" . implode("','", $BenCheckbox) . "'";
				$this->Model_Deletes->RemoveBeneficiary($listCheck);

				$AcadHCheckbox = $this->input->post('AcadHCheckbox');
				$listCheck = "'" . implode("','", $AcadHCheckbox) . "'";
				$this->Model_Deletes->RemoveAcadHistory($listCheck);

				$CharRefCheckbox = $this->input->post('CharRefCheckbox');
				$listCheck = "'" . implode("','", $CharRefCheckbox) . "'";
				$this->Model_Deletes->RemoveCharRef($listCheck);

				$EmpRecordCheckbox = $this->input->post('EmpRecordCheckbox');
				$listCheck = "'" . implode("','", $EmpRecordCheckbox) . "'";
				$this->Model_Deletes->RemoveEmpRecord($listCheck);

				if (isset($_SESSION["bencart"])) {
					foreach ($_SESSION["bencart"] as $s_da) {
						$data = array(
							'ApplicantID' => $ApplicantID,
							'BenWhat' => $s_da['bencart']['BenWhat'],
							'BenName' => $s_da['bencart']['BenName'],
							'BenRelation' => $s_da['bencart']['BenRelation'],

						);
						$this->Model_Inserts->InsertBen($data);
					}
				}
				if (isset($_SESSION["acadcart"])) {
					foreach ($_SESSION["acadcart"] as $s_da) {
						$data = array(
							'ApplicantID' => $ApplicantID,
							'Level' => $s_da['acadcart']['SchoolLevel'],
							'SchoolName' => $s_da['acadcart']['SchoolName'],
							'SchoolAddress' => $s_da['acadcart']['SchoolAddress'],
							'DateStarted' => $s_da['acadcart']['FromYearSchool'],
							'DateEnds' => $s_da['acadcart']['ToYearSchool'],
							'HighDegree' => $s_da['acadcart']['H_Attained'],

						);
						$this->Model_Inserts->InsertAcadH($data);
					}
				}
				if (isset($_SESSION["ref_cart"])) {
					foreach ($_SESSION["ref_cart"] as $s_da) {
						$data = array(
							'ApplicantID' => $ApplicantID,
							'RefName' => $s_da['ref_cart']['RefName'],
							'RefPosition' => $s_da['ref_cart']['RefPosition'],
							'CompanyAddress' => $s_da['ref_cart']['CompanyAddress'],
						);
						$this->Model_Inserts->InsertCharRef($data);
					}
				}
				if (isset($_SESSION["emp_cart"])) {
					foreach ($_SESSION["emp_cart"] as $s_da) {
						$data = array(
							'ApplicantID' => $ApplicantID,
							'Name' => $s_da['emp_cart']['EmployeerName'],
							'Address' => $s_da['emp_cart']['emAddress'],
							'PeriodCovered' => $s_da['emp_cart']['PeriodCovered'],
							'Position' => $s_da['emp_cart']['Position'],
							'Salary' => $s_da['emp_cart']['Salary'],
							'CauseOfSeparation' => $s_da['emp_cart']['cos'],

						);
						$this->Model_Inserts->InsertEmploymentRecord($data);
					}
				}
				unset($_SESSION["bencart"]);
				unset($_SESSION["acadcart"]);
				unset($_SESSION["ref_cart"]);
				unset($_SESSION["emp_cart"]);
				unset($_SESSION["mach_cart"]);

				$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #45C830;"><h5><i class="fas fa-check"></i> Details updated!</h5></div>');

				// LOGBOOK
				date_default_timezone_set('Asia/Manila');
				$LogbookCurrentTime = date('Y-m-d h:i:s A');
				$LogbookType = 'Update';
				$LogbookEvent = 'Updated details on Employee ID ' . $ApplicantID . '.';
				$LogbookLink = 'ViewEmployee?id=' . $ApplicantID;
				$data = array(
					'Time' => $LogbookCurrentTime,
					'Type' => $LogbookType,
					'AdminID' => $_SESSION["AdminID"],
					'Event' => $LogbookEvent,
					'Link' => $LogbookLink,
				);
				$LogbookInsert = $this->Model_Inserts->InsertLogbook($data);

				redirect($_SERVER['HTTP_REFERER']);
			}
			else
			{
				$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><h5><i class="fas fa-times"></i> Something\'s wrong!</h5></div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}
	}
	public function ReassignAdmin()
	{
		$AdminNo = $this->input->post('R_AdminNo',TRUE);
		$BranchID = $this->input->post('R_BranchID',TRUE);

		if ($BranchID == NULL) {
			$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><h5><i class="fas fa-times"></i> Something\'s wrong, Please try again! </h5></div>');
			redirect('Admin_List');
		}
		else
		{
			$CheckAdminNo = $this->Model_Selects->CheckAdminNo($AdminNo);
			if ($CheckAdminNo->num_rows() > 0) {
				$data = array(
					'BranchID' => $BranchID,
				);
				$UpdateAdminInfo = $this->Model_Updates->UpdateAdmin($AdminNo,$data);

				$GetBranchInfo = $this->Model_Selects->GetBranchDet($BranchID);
				$BranchInfo = $GetBranchInfo->row_array();

				if ($_SESSION["AdminNo"] == $AdminNo && $_SESSION["BranchID"] != $BranchID) {
					$dataSession['BranchID'] = $BranchID;
					$dataSession['BranchName'] = $BranchInfo['Name'];
					$dataSession['BranchIcon'] = $BranchInfo['BranchIcon'];
					$dataSession['Colors'] = $this->Model_Selects->getBranchColors($BranchID,FALSE)->result_array();

					$this->session->set_userdata($dataSession);
				}

				if ($UpdateAdminInfo) {
					$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #45C830;"><h5><i class="fas fa-check"></i> Admin Reassigned!</h5></div>');

					// LOGBOOK
					date_default_timezone_set('Asia/Manila');
					$LogbookCurrentTime = date('Y-m-d h:i:s A');
					$LogbookType = 'Update';
					$LogbookEvent = 'Admin #' . $AdminNo . '\'s branch reassigned to ' . $BranchInfo['Name'] . '.';
					$LogbookLink = 'Admin_List';
					$data = array(
						'Time' => $LogbookCurrentTime,
						'Type' => $LogbookType,
						'AdminID' => $_SESSION["AdminID"],
						'Event' => $LogbookEvent,
						'Link' => $LogbookLink,
					);
					$LogbookInsert = $this->Model_Inserts->InsertLogbook($data);

					redirect('Admin_List');
				}
				else
				{
					$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><h5><i class="fas fa-times"></i> Something\'s wrong, Please try agains!</h5></div>');
					redirect('Admin_List');
				}
			}
			else
			{
				$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><h5><i class="fas fa-times"></i> Something\'s wrong, Please try againss!</h5></div>');
				redirect('Admin_List');
			}
		}
	}
	public function AddNote()
	{
		if (isset($_POST['Note'])) {
			$Note = $this->input->post('Note',TRUE);
			// LOGBOOK
			date_default_timezone_set('Asia/Manila');
			$LogbookCurrentTime = date('Y-m-d h:i:s A');
			$LogbookType = 'Note';
			$data = array(
				'Time' => $LogbookCurrentTime,
				'Type' => $LogbookType,
				'AdminID' => $_SESSION["AdminID"],
				'Event' => $Note,
			);
			$LogbookInsert = $this->Model_Inserts->InsertLogbook($data);
			redirect(base_url() . 'Dashboard#Logbook');

		}
	}
	public function AddNoteDocuments()
	{
		if (isset($_POST['NoteDocuments'])) {
			$ApplicantID = $this->input->post('ApplicantID',TRUE);
			$Note = $this->input->post('NoteDocuments',TRUE);
			$this->Model_Inserts->InsertDocumentsNote($ApplicantID, $Note);
			// LOGBOOK
			// date_default_timezone_set('Asia/Manila');
			// $LogbookCurrentTime = date('Y-m-d h:i:s A');
			// $LogbookType = 'Note';
			// $data = array(
			// 	'Time' => $LogbookCurrentTime,
			// 	'Type' => $LogbookType,
			// 'AdminID' => $_SESSION["AdminID"],
			// 	'Event' => 'Added new note for ' . $ApplicantID . '.',
			// );
			// $LogbookInsert = $this->Model_Inserts->InsertLogbook($data);
			redirect(base_url() . 'ViewEmployee?id=' . $ApplicantID . '#Documents');

		}
	}
	public function SetReminder()
	{
		if (isset($_POST['ApplicantID'])) {
			$ApplicantID = $this->input->post('ApplicantID',FALSE); // TODO: (Dec 12, 2019) Changed from TRUE to FALSE > No XSS filtering.
			$R_Type = $this->input->post('R_Type',TRUE);
			$R_Days = $this->input->post('R_Days',TRUE);
			$R_Months = $this->input->post('R_Months',TRUE);
			$R_Years = $this->input->post('R_Years',TRUE);
			$ReminderDateString = "";
			if ($R_Years != 0) {
				if ($R_Years == 1) {
					$ReminderDateString = $R_Years . ' year';
				} else {
					$ReminderDateString = $R_Years . ' years';
				}
				if ($R_Months != 0 || $R_Days != 0) {
					$ReminderDateString = $ReminderDateString . ', ';
				}
			}
			if ($R_Months != 0) {
				if ($R_Months == 1) {
					$ReminderDateString = $ReminderDateString . $R_Months . ' month';
				} else {
					$ReminderDateString = $ReminderDateString . $R_Months . ' months';
				}
				if ($R_Days != 0) {
					$ReminderDateString = $ReminderDateString . ', ';
				}
			}
			if ($R_Days != 0) {
				if ($R_Days == 1) {
					$ReminderDateString = $ReminderDateString . $R_Days . ' day';
				} else {
					$ReminderDateString = $ReminderDateString . $R_Days . ' days';
				}
			}
			$ReminderDate = 0;

			if ($ApplicantID == NULL) {
				$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><h5><i class="fas fa-times"></i> Something\'s wrong, Please try again! (Error: Extend Contract) A:' . $ApplicantID . ' D:' . $E_Days . ' H:' . $E_Months . ' Y:' . $E_Years . ' </h5></div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
			else
			{
				$CheckApplicant = $this->Model_Selects->CheckApplicant($ApplicantID);
				if ($CheckApplicant->num_rows() > 0) {

					date_default_timezone_set('Asia/Manila');

					if ($R_Months == NULL) {
						$ReminderDate = $ReminderDate + 0;
					} else {
						$ReminderDate = $ReminderDate + ($R_Months * 2629743);
					}
					if ($R_Days == NULL) {
						$ReminderDate = $ReminderDate + 0;
					} else {
						$ReminderDate = $ReminderDate + ($R_Days * 86400);
					}
					if ($R_Years == NULL) {
						$ReminderDate = $ReminderDate + 0;
					} else {
						$ReminderDate = $ReminderDate + ($R_Years * 31556926);
					}

					$data = array(
						'ReminderType' => $R_Type,
						'ReminderDate' => $ReminderDate,
						'ReminderDateString' => $ReminderDateString,
						'ReminderLocked' => 'No',
					);
					$SetReminder = $this->Model_Inserts->InsertReminder($ApplicantID,$data);
					if ($SetReminder == TRUE) {
						$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #45C830;"><h5><i class="fas fa-check"></i> Reminder set!</h5></div>');
						// LOGBOOK
						date_default_timezone_set('Asia/Manila');
						$LogbookCurrentTime = date('Y-m-d h:i:s A');
						$LogbookType = 'New';
						$LogbookEvent = 'A reminder has been set for ID ' . $ApplicantID .', alerting after ';
						if($R_Years != 0) {
							$LogbookEvent = $LogbookEvent . $R_Years;
							if($R_Years == 1) {
								$LogbookEvent = $LogbookEvent . ' year, ';
							} else {
								$LogbookEvent = $LogbookEvent . ' years, ';
							}
						}
						if($R_Months != 0) {
							$LogbookEvent = $LogbookEvent . $R_Months;
							if($R_Months == 1) {
								$LogbookEvent = $LogbookEvent . ' month, ';
							} else {
								$LogbookEvent = $LogbookEvent . ' months, ';
							}
						}
						if($R_Days != 0) {
							$LogbookEvent = $LogbookEvent . $R_Days;
							if($R_Days == 1) {
								$LogbookEvent = $LogbookEvent . ' day, ';
							} else {
								$LogbookEvent = $LogbookEvent . ' days, ';
							}
						}
						$LogbookEvent = substr($LogbookEvent, 0, -2) . '!';
						$LogbookLink = 'ViewEmployee?id=' . $ApplicantID;
						$data = array(
							'Time' => $LogbookCurrentTime,
							'Type' => $LogbookType,
							'AdminID' => $_SESSION["AdminID"],
							'Event' => $LogbookEvent,
							'Link' => $LogbookLink,
						);
						$LogbookInsert = $this->Model_Inserts->InsertLogbook($data);
						redirect($_SERVER['HTTP_REFERER']);
					}
					else
					{
						$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><h5><i class="fas fa-times"></i> Something\'s wrong, Please try agains!</h5></div>');
						redirect($_SERVER['HTTP_REFERER']);
					}
				}
				else
				{
					$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><h5><i class="fas fa-times"></i> Something\'s wrong, Please try againss!</h5></div>');
					redirect($_SERVER['HTTP_REFERER']);
				}
			}
		}
		else
		{
			$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><h5><i class="fas fa-times"></i> Something\'s wrong, Please try againsss!</h5></div>');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}
	public function BlacklistEmployee()
	{
		$ApplicantID = $this->input->get('id');
		if (!isset($_GET['id'])) {
			redirect('Employee');
		}
		else
		{
			$Removethis = $this->Model_Updates->BlacklistEmployee($ApplicantID);
			if ($Removethis == TRUE) {
				$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #45C830;"><h5><i class="fas fa-check"></i> Employee ID ' . $ApplicantID . ' has been blacklisted.</h5></div>');
				// LOGBOOK
				// date_default_timezone_set('Asia/Manila');
				// $LogbookCurrentTime = date('Y-m-d h:i:s A');
				// $LogbookType = 'Archival';
				// $LogbookEvent = 'Employee ID ' . $ApplicantID .' has been blacklisted.';
				// $LogbookLink = 'ViewEmployee?id=' . $ApplicantID;
				// $data = array(
				// 	'Time' => $LogbookCurrentTime,
				// 	'Type' => $LogbookType,
				// 'AdminID' => $_SESSION["AdminID"],
				// 	'Event' => $LogbookEvent,
				// 	'Link' => $LogbookLink,
				// );
				// $LogbookInsert = $this->Model_Inserts->InsertLogbook($data);
				if (isset($_SERVER['HTTP_REFERER'])) {
					redirect($_SERVER['HTTP_REFERER']);
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
	}
	public function RestoreEmployee()
	{
		$ApplicantID = $this->input->get('id');
		if (!isset($_GET['id'])) {
			redirect('Employee');
		}
		else
		{
			$Removethis = $this->Model_Updates->RestoreEmployee($ApplicantID);
			if ($Removethis == TRUE) {
				$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #45C830;"><h5><i class="fas fa-check"></i> Employee ID ' . $ApplicantID . ' has been restored as an Applicant.</h5></div>');
				// LOGBOOK
				// date_default_timezone_set('Asia/Manila');
				// $LogbookCurrentTime = date('Y-m-d h:i:s A');
				// $LogbookType = 'Update';
				// $LogbookEvent = 'Employee ID ' . $ApplicantID .' has been restored as an Applicant.';
				// $LogbookLink = 'ViewEmployee?id=' . $ApplicantID;
				// $data = array(
				// 	'Time' => $LogbookCurrentTime,
				// 	'Type' => $LogbookType,
				// 'AdminID' => $_SESSION["AdminID"],
				// 	'Event' => $LogbookEvent,
				// 	'Link' => $LogbookLink,
				// );
				// $LogbookInsert = $this->Model_Inserts->InsertLogbook($data);
				if (isset($_SERVER['HTTP_REFERER'])) {
					redirect($_SERVER['HTTP_REFERER']);
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
	}
	public function SetWeeklyHours()
	{
		if (isset($_POST['ApplicantID'])) {

			$ApplicantID = $this->input->post('ApplicantID',FALSE); // TODO: (Dec 12, 2019) Changed from TRUE to FALSE > No XSS filtering.
			$BranchID = $this->input->post('BranchID',TRUE);
			$GetWeeklyDates = $this->Model_Selects->GetWeeklyDates();
			$ArrayInt = 0;
			$ArrayLength = $GetWeeklyDates->num_rows();
			$DeductionOption=$this->input->post('DeductionOption',TRUE); //0 no deduction, 1 with deduction, 2 deferred deductions 
			$cutoffMode=$this->input->post('CutoffMode',TRUE);
			$HoursTotal=0;
			$gross_pay=0;


			foreach ($GetWeeklyDates->result_array() as $nrow):
				$ArrayInt++;
				$Type = $this->input->post('Type_' . $nrow['Time'],TRUE);
				$Hours = $this->input->post('Hours_' . $nrow['Time'],TRUE);
				$HoursTotal+=$Hours;
				$Overtime = $this->input->post('OTHours_' . $nrow['Time'],TRUE);
				$NightHours = $this->input->post('NightHours_' . $nrow['Time'],TRUE);
				$NightOvertime = $this->input->post('NightOTHours_' . $nrow['Time'],TRUE);
				$Remarks = $this->input->post('Remarks_' . $nrow['Time'],TRUE);
				// BENEFITS
				$HDMF = $this->input->post('HDMF_' . $nrow['Time'],TRUE);
				$Philhealth = $this->input->post('Philhealth_' . $nrow['Time'],TRUE);
				$SSS = $this->input->post('SSS_' . $nrow['Time'],TRUE);
				$Tax = $this->input->post('Tax_' . $nrow['Time'],TRUE);

				$Date = $this->input->post($nrow['Time'],TRUE);

				$total_hoursperday = $this->input->post('total_hoursperday_' . $nrow['Time'],TRUE);
				$dayRate = $this->input->post('dayRate_' . $nrow['Time'],TRUE);
				$TdRate = $this->input->post('TdRate_' . $nrow['Time'],TRUE);



				if($Hours == NULL) {
					$Hours = 0;
				}
				if($Overtime == NULL) {
					$Overtime = 0;
				}

				if ($ApplicantID == NULL) {
					$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><h5><i class="fas fa-times"></i> Something\'s wrong, Please try again! (Error: Missing Field/s)</h5></div>');
					redirect($_SERVER['HTTP_REFERER']);
				}
				else
				{

					date_default_timezone_set('Asia/Manila');

					$data = array(
						'BranchID' => $BranchID,
						'Date' => $Date,
						'Hours' => $Hours,
						'Overtime' => $Overtime,
						'NightHours' => $NightHours,
						'NightOvertime' => $NightOvertime,
						'Remarks' => $Remarks,
						'Type' => $Type,
						'HDMF' => $HDMF,
						'Philhealth' => $Philhealth,
						'SSS' => $SSS,
						'Tax' => $Tax,
						'day_pay' => $TdRate,

					);

					$UpdateWeeklyHours = $this->Model_Updates->UpdateWeeklyHours($ApplicantID,$data);
					if ($UpdateWeeklyHours == TRUE) {
						if ($ArrayInt >= $ArrayLength) {
							$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #45C830;"><h5><i class="fas fa-check"></i> Updated!</h5></div>');
							// LOGBOOK
							// date_default_timezone_set('Asia/Manila');
							// $LogbookCurrentTime = date('Y-m-d h:i:s A');
							// $LogbookType = 'Update';
							// $LogbookEvent = 'Updated weekly hours for ' . $ApplicantID . '.';
							// $LogbookLink = 'ViewBranch?id=' . $Temp_ApplicantID;
							// $LogbookLink = 'Branches';
							// $data = array(
							// 	'Time' => $LogbookCurrentTime,
							// 	'Type' => $LogbookType,
							// 'AdminID' => $_SESSION["AdminID"],
							// 	'Event' => $LogbookEvent,
							// 	'Link' => $LogbookLink,
							// );
							// $LogbookInsert = $this->Model_Inserts->InsertLogbook($data);

						}
					}
					else
					{
						$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><h5><i class="fas fa-times"></i> Something\'s wrong, Please try agains!</h5></div>');

					}
				}
			endforeach;

			
			//cutoffMode
			//get employee hours
			$EmployeeHoursList = $this->Model_Selects->GetEmployeeHours($ApplicantID);

			if ($EmployeeHoursList->num_rows() > 0) {
				$sss_contri = 0;
				$hdmf_contri = 0;
				$hdmf_rate=0.0;
				$philhealth_contri = 0;
				$philhealth_percentage = 0;
				$tax = 0;
				$totalDeduction=0;
				$net_pay=0;
				$cutoffTaxDivider=0;

				$employees = $this->Model_Selects->CheckEmployee($ApplicantID);
				$employee=$employees->result_array()[0];
				$employeeSalary = $employee["SalaryExpected"];

				
				# if(cutoffMode==0)//weekly
				if($cutoffMode=='Weekly')//weekly
				{
					$gross_pay = $this->Model_Selects->GetempGP($ApplicantID);
				}
				# else if(cutoffMode==1)//semi monthly
				else if($cutoffMode=='Semi-Monthly')//semi monthly
				{
					$semiMonthlyTotalSalary=$employeeSalary/2;		   //total salary per half of month
					$semiMonthlyHourRate= $semiMonthlyTotalSalary/96;  //including saturdays. otherwise it would just be 80
					$semiMonthlyDeductedHours=96-$HoursTotal;		   //difference of supposed total hours of half a month (96) and total hours worked
					$semiMonthlyDeductedHoursTotalRate=$semiMonthlyDeductedHours * $semiMonthlyHourRate; //rate to be deducted from total amount

					if($semiMonthlyDeductedHoursTotalRate<=0) //no absences or cases where it has 31st day in month
					{
						$gross_pay=$semiMonthlyTotalSalary;

					}
					else //normal. subtract absents and leaves
					{
						$gross_pay=$semiMonthlyTotalSalary-$semiMonthlyDeductedHoursTotalRate;

					}
				}
				#else if(cutoffMode==2)
				else if ($cutoffMode=='Monthly')
				{
					$monthlyHourRate= $employeeSalary/192;
					$monthlyDeductedHours = 192-$HoursTotal;
					$monthlyDeductedHoursTotalRate = $monthlyDeductedHours * $monthlyHourRate;

					if($monthlyDeductedHoursTotalRate<=0) //no absences or cases where it has 31st day in month
					{
						$gross_pay=$employeeSalary;

					}
					else //normal. subtract absents and leaves
					{
						$gross_pay=$employeeSalary-$monthlyDeductedHoursTotalRate;

					}
				}

				$GetTotalH = $this->Model_Selects->GetTotalH($ApplicantID);
				$GetTotalOt = $this->Model_Selects->GetTotalOt($ApplicantID);

				


				$sssTable = $this->Model_Selects->GetAllSSSTable();
				$hdmfTable = $this->Model_Selects->GetAllHDMFTable();
				$philhealthTable = $this->Model_Selects->GetAllPhilHealthTable();
				//$philhealthTable = $this->Model_Selects->GetAllTaxTable();


			if($DeductionOption==1 || $DeductionOption==2)//if with deductions or deferred 
			{

				foreach ($sssTable->result_array() as $row) {
					if ($employeeSalary >= $row['f_range'] && $employeeSalary <= $row['t_range']) {
						$sss_contri = $row['contribution_ee'];
					}
				}

				foreach ($hdmfTable->result_array() as $row) {
					if ($employeeSalary >= $row['f_range'] && $employeeSalary <= $row['t_range']) {
						$hdmf_rate= $row['contribution_ee'];
					}
				}
				

				$philhealthArray=$philhealthTable->result_array();

				if ($employeeSalary >= $philhealthArray[0]['f_range'] && $employeeSalary <= $philhealthArray[0]['t_range'])
				{
					$philhealth_percentage=300;
				}
				else if($employeeSalary >= $philhealthArray[1]['f_range'] && $employeeSalary <= $philhealthArray[1]['t_range'])
				{
					$philhealth_percentage=($employeeSalary * 0.03);

				}
				else
				{
					$philhealth_percentage=1800;
				}


				
				#if($cutoffMode==0)//weekly
				if($cutoffMode=='Weekly')
				{
					$cutoffTaxDivider=4;
				}
				#else if($cutoffMode==1)//semi monthly
				else if($cutoffMode=='Semi-Monthly')
				{
					$cutoffTaxDivider=2;
				}
				#else if($cutoffMode==2) //monthly
				else if($cutoffMode=='Monthly')
				{
					$cutoffTaxDivider=1;
				}

				$sss_contri = $sss_contri/$cutoffTaxDivider;
				$hdmf_contri =($employeeSalary*$hdmf_rate)/$cutoffTaxDivider;
				$philhealth_contri=$philhealth_percentage/$cutoffTaxDivider;
				


				


				//tax
				$year=date("Y");
				$annualSalary=$employeeSalary*12;
				if($year<=2022)
				{
					if($annualSalary<=250000) //Not over P250,000 -- 0%
					{
						$tax=0; 
					}
					else if($annualSalary>=250000.01 && $annualSalary <= 400000) 	//Over P250,000 but not over P400,000 -- 20% of the excess over P250,000
					{
						$tax=((($annualSalary-250000)*0.2)/12)/$cutoffTaxDivider;
					} 
					else if($annualSalary>=400000.01 && $annualSalary <= 800000) 	//Over P400,000 but not over P800,000 -- P30,000 + 25% of the excess over P400,000
					{
						$tax=((30000+(($annualSalary-400000)*0.25))/12)/$cutoffTaxDivider; 		 	//divided into 12 for monthly, then divided by 4 for weekly, 2 for semi monthly, 1 for monthly
					}
					else if($annualSalary>=800000.01 && $annualSalary <= 2000000) 	//Over P800,000 but not over P2,000,000 -- P130,000 + 30% of the excess over P800,000
					{
						$tax=((130000+(($annualSalary-800000)*0.3))/12)/$cutoffTaxDivider; 		  	//divided into 12 for monthly, then divided by 4 for weekly, 2 for semi monthly, 1 for monthly
					}
					else if($annualSalary>=2000000.01 && $annualSalary <= 8000000) 	//Over P2,000,000 but not over P8,000,000 -- P490,000 + 32% of the excess over P2,000,000
					{
						$tax=((490000+(($annualSalary-2000000)*0.32))/12)/$cutoffTaxDivider; 		//divided into 12 for monthly, then divided by 4 for weekly, 2 for semi monthly, 1 for monthly
					}
					else 															//Over P8,000,000 -- P2,410,000 + 35% of the excess over P8,000,000
					{
						$tax=((2410000+(($annualSalary-8000000)*0.35))/12)/$cutoffTaxDivider; 		//divided into 12 for monthly, then divided by 4 for weekly, 2 for semi monthly, 1 for monthly
					}

				}
				else
				{
					if($annualSalary<=250000) //Not over P250,000 -- 0%
					{
						$tax=0; 
					}
					else if($annualSalary>=250000.01 && $annualSalary <= 400000) 	//Over P250,000 but not over P400,000 -- 15% of the excess over P250,000
					{
						$tax=((($annualSalary-250000)*0.15)/12)/$cutoffTaxDivider;
					} 
					else if($annualSalary>=400000.01 && $annualSalary <= 800000) 	//Over P400,000 but not over P800,000 -- P22,500 + 20% of the excess over P400,000
					{
						$tax=((22500+(($annualSalary-400000)*0.20))/12)/$cutoffTaxDivider; 		 	//divided into 12 for monthly, then divided by 4 for weekly, 2 for semi monthly, 1 for monthly
					}
					else if($annualSalary>=800000.01 && $annualSalary <= 2000000) 	//Over P800,000 but not over P2,000,000 -- P102,500 + 25% of the excess over P800,000
					{
						$tax=((102500+(($annualSalary-800000)*0.25))/12)/$cutoffTaxDivider; 		  	//divided into 12 for monthly, then divided by 4 for weekly, 2 for semi monthly, 1 for monthly
					}
					else if($annualSalary>=2000000.01 && $annualSalary <= 8000000) 	//Over P2,000,000 but not over P8,000,000 -- P402,500 + 30% of the excess over P2,000,000
					{
						$tax=((402500+(($annualSalary-2000000)*0.30))/12)/$cutoffTaxDivider; 		//divided into 12 for monthly, tthen divided by 4 for weekly, 2 for semi monthly, 1 for monthly
					}
					else 															//Over P8,000,000 -- P2,202,500 + 35% of the excess over P8,000,000
					{
						$tax=((202500+(($annualSalary-8000000)*0.35))/12)/$cutoffTaxDivider; 		//divided into 12 for monthly, then divided by 4 for weekly, 2 for semi monthly, 1 for monthly
					}
				}

				$totalDeduction=$sss_contri + $hdmf_contri + $philhealth_contri + $tax;
				if($DeductionOption==1)
				{
					$net_pay = $gross_pay - $totalDeduction;
				}
				else if ($DeductionOption==2)
				{

					$deferedid= "DEF_". com_create_guid();
					$this->Model_Inserts->AddEmployeeDeferredDeductions($deferedid,$ApplicantID,$totalDeduction,date());
				}

				

			}
			else
			{
				$net_pay = $gross_pay;
			}

			$data = array(
				'BranchID' => $BranchID,
				'ApplicantID' => $ApplicantID,
				'gross_pay' => round($gross_pay,2),
				'sss_contri' => $sss_contri,
				'hdmf_contri' => $hdmf_contri,
				'philhealth_contri' => $philhealth_contri,
				'tax' => $tax,
				'TotalHours' => $GetTotalH,
				'TotaOT' => $GetTotalOt,
				'net_pay' => $net_pay,
				'tota_deduc' => $totalDeduction,
				'Mode' => $cutoffMode,
				'Date_Generated' => date('d-m-yy')
			);

			$this->Model_Inserts->InsertTrackingTable($data);
		}

		redirect($_SERVER['HTTP_REFERER']);
	}
	else
	{
		$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><h5><i class="fas fa-times"></i> Something\'s wrong, Please try againsss!</h5></div>');
		redirect($_SERVER['HTTP_REFERER']);
	}
}
	public function ViewBranchEmployees() // Date Range
	{
		$BranchID = $this->input->post('ViewBranchID',FALSE); // TODO: (Dec 12, 2019) Changed from TRUE to FALSE > No XSS filtering.
		$Mode = $this->input->post('Mode',TRUE);
		$FromDate = $this->input->post('FromDate',TRUE);
		$ToDate = $this->input->post('ToDate',TRUE);
		// $Year = substr($FromDate, 0, 4);
		// $Month = substr($FromDate, 5);
		// $Month = substr($Month, 0, 2);
		// $Day = substr($FromDate, -2);

		if ($Mode == NULL || $FromDate == NULL || $ToDate == NULL) {
			$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><h5><i class="fas fa-times"></i> Error: Date range must be valid</h5></div>');
			redirect($_SERVER['HTTP_REFERER']);
		}

		if ($BranchID == NULL) {
			$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><h5><i class="fas fa-times"></i> Something\'s wrong, Please try again! (Error: Missing Branch ID)</h5></div>');
			redirect($_SERVER['HTTP_REFERER']);
		}
		else
		{
			date_default_timezone_set('Asia/Manila');
			$date1 = new DateTime($FromDate);
			$date2 = new DateTime($ToDate);

			$diff = $date2->diff($date1)->format("%a");

			// if ($diff <= 7) {
			// 	$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><h5><i class="fas fa-times"></i> Error: Date Range for weekly must be lower than 1 week</h5></div>');
			// 	redirect($_SERVER['HTTP_REFERER']);
			// }
			 //velseif ($diff > 180 && $diff < 730) {
			// 	$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #FFA500;"><h5><i class="fas fa-exclamation-triangle"></i> Note: You are viewing at a huge date range, performance may get slower than usual</h5></div>');
			// }
			// TODO: Clean & optimize this. May cause lag on huge database.
			
			$this->Model_Updates->UpdateWeeklyHoursCurrent();
			$this->Model_Deletes->CleanWeeklyDates();
			$HoursHolidays = array('01-01', '04-09', '04-10', '05-01', '06-12', '08-31', '11-30', '12-25', '12-30'); // MONTH - DAY
			$SpecialHolidays = array('01-25', '02-25', '04-11', '08-21', '11-01', '11-02', '12-08', '12-24', '12-31'); // MONTH - DAY

			for ($i = 1; $i <= $diff; $i++) {
				$Date = date('Y-m-d', strtotime('+' . $i . ' day', strtotime($FromDate)));
				$DateChecker = new DateTime($Date);
				if (in_array($DateChecker->format('m-d'), $HoursHolidays)) {
					$Type = 'Holiday';
				} elseif (in_array($DateChecker->format('m-d'), $SpecialHolidays)) {
					$Type = 'Special';
				} else {
					$Type = 'Normal';
				}
				$data = array(
					'Time' => $Date,
					'Current' => 'Current',
				);
				$BranchViewTime = $this->Model_Inserts->InsertDummyHours($data);
				if ($BranchViewTime && $i == $diff) {
					redirect('ViewBranch?id=' . $BranchID . "&Mode=" . $Mode );
				}
			}
		}
	}
	public function ImportExcel()
	{
		$BranchID = $this->input->post('ExcelBranchID',FALSE); // TODO: (Dec 12, 2019) Changed from TRUE to FALSE > No XSS filtering.
		$File = $_FILES['file'];
		date_default_timezone_set('Asia/Manila');
		// $this->load->library('SimpleXLSX');
		if ( $xlsx = SimpleXLSX::parse( $File['tmp_name'] ) ) {
			$arsss = $xlsx->rows();

			$id = $arsss[1][0]; // ID
			$mode = $arsss[1][1]; // MODE

			$dim = $xlsx->dimension();
			$cols = $dim[0];
			$RowCount = 0;
			$ColCount = 0;
			$ApplicantsArray = array();

			foreach ( $xlsx->rows() as $k => $r ):
				if ($k == 0) continue; // skip first row
				// echo '<tr class="clickable-row" data-toggle="modal" data-target="#HoursWeeklyModal">';
				for ( $i = 0; $i < $cols; $i ++ ) {
					if ($RowCount == 1){
						if ($ColCount == 3) {
							$StartingDate = ( isset( $r[ $i ] ) ? $r[ $i ] : '&nbsp;' );

							$this->Model_Updates->UpdateWeeklyHoursCurrent();
							$this->Model_Deletes->CleanWeeklyDates();
							$HoursHolidays = array('01-01', '04-09', '04-10', '05-01', '06-12', '08-31', '11-30', '12-25', '12-30'); // MONTH - DAY
							$SpecialHolidays = array('01-25', '02-25', '04-11', '08-21', '11-01', '11-02', '12-08', '12-24', '12-31'); // MONTH - DAY

							for ($i = 0; $i <= $cols - 5; $i++) {
								$Date = date('Y-m-d', strtotime('+' . $i . ' day', strtotime($StartingDate)));
								$DateChecker = new DateTime($Date);
								if (in_array($DateChecker->format('m-d'), $HoursHolidays)) {
									$Type = 'Holiday';
								} elseif (in_array($DateChecker->format('m-d'), $SpecialHolidays)) {
									$Type = 'Special';
								} else {
									$Type = 'Normal';
								}
								$data = array(
									'Time' => $Date,
									'Current' => 'Current',
								);
								$BranchViewTime = $this->Model_Inserts->InsertDummyHours($data);
							}

						}

					}
					if ($RowCount >= 1) {
						if ($ColCount == 0) {
							$ApplicantID = ( isset( $r[ $i ] ) ? $r[ $i ] : '&nbsp;' );
							array_push($ApplicantsArray, $ApplicantID);
						}
						if ($ColCount == 1) {
							$Name = ( isset( $r[ $i ] ) ? $r[ $i ] : '&nbsp;' );
						}
						if ($ColCount == 2) {
							$Salary = ( isset( $r[ $i ] ) ? $r[ $i ] : '&nbsp;' );
						}
						if ($ColCount >= 3 && $ColCount < $cols - 1) {
							$GetWeeklyDates = $this->Model_Selects->GetWeeklyDates();
							// foreach ($GetWeeklyDates->result_array($ColCount - 3) as $nrow):
							// 	echo $nrow['Time'];
							// endforeach;

							// Attempt at an Excel format. TODO: Fix later.
							$Split = explode('/', ( isset( $r[ $i ] ) ? $r[ $i ] : '&nbsp;' ));
							// if ($Split[0] == 'N') {
							// 	$Type = 'Normal';
							// } elseif ($Split[0] == 'R') {
							// 	$Type = 'Rest Day';
							// } elseif ($Split[0] == 'H') {
							// 	$Type = 'Holiday';
							// } elseif ($Split[0] == 'S') {
							// 	$Type = 'Special';
							// } else {
							// 	$Type = 'Unknown';
							// }

							// if ( $Split[0] > 8) {
							// 		$otValue = $Split[0] - 8;
							// 	}
							// 	else
							// 	{
							// 		$otValue = 0;
							// 	}
							// 	if ( $Split[0] > 8) {
							// 		$rHours = 8;
							// 	}
							// 	else
							// 	{
							// 		$rHours = $Split[0];
							// 	}
							$rHours = $Split[0];
							$data = array(
								'BranchID' => $BranchID,
								'Date' => $GetWeeklyDates->result_array()[$ColCount - 3]['Time'],
								'Hours' => $rHours
							);
							$UpdateWeeklyHours = $this->Model_Updates->UpdateWeeklyHoursFromImport($ApplicantID,$data);
							// echo '------------- <br>';
							// echo 'Applicant ID: ' . $ApplicantID . '<br>';
							// echo 'Name: ' . $Name . '<br>';
							// echo 'Salary: ' . $Salary . '<br>';
							// echo 'Date: ' . $GetWeeklyDates->result_array()[$ColCount - 3]['Time'] . '<br>';
							// echo 'Hours: ' . ( isset( $r[ $i ] ) ? $r[ $i ] : '&nbsp;' ) . '<br>';
							// echo '------------- <br>';
						}
					}
					$ColCount++;
				}

				$RowCount++;
				$ColCount = 0;
			endforeach;
			if ($RowCount <= $xlsx->rows()) {
				$ApplicantsArray = serialize($ApplicantsArray);
				$this->session->set_userdata('ApplicantsArray', $ApplicantsArray);
				redirect('ViewBranch?id='.$id.'&Mode='.$mode);
			}
			$this->load->view('_template/users/u_redirecting');
			
		} else {
			$Error = SimpleXLSX::parseError();
			$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><h5><i class="fas fa-times"></i> Error: ' . $Error . '</h5></div>');
			redirect($_SERVER['HTTP_REFERER']);

		}
		
		
		
		// $date1 = new DateTime($FromDate);
		// $date2 = new DateTime($ToDate);

		// $diff = $date2->diff($date1)->format("%a");
		// if ($diff > 730) {
		// 	$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><h5><i class="fas fa-times"></i> Error: Date Range for weekly must be lower than 2 years</h5></div>');
		// 	redirect($_SERVER['HTTP_REFERER']);
		// } elseif ($diff > 180 && $diff < 730) {
		// 	$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #FFA500;"><h5><i class="fas fa-exclamation-triangle"></i> Note: You are viewing at a huge date range, performance may get slower than usual</h5></div>');
		// }
		// // TODO: Clean & optimize this. May cause lag on huge database.
		// $this->Model_Updates->UpdateWeeklyHoursCurrent();
		// $this->Model_Deletes->CleanWeeklyDates();
		// for ($i = 0; $i <= $diff; $i++) {
		// 	if ($Day < 10 && $i != 0) {
		// 		$Date = $Year . '-' . $Month . '-' . '0' . $Day;
		// 	} else {
		// 		$Date = $Year . '-' . $Month . '-' . $Day;
		// 	}
		// 	$data = array(
		// 		'Time' => $Date,
		// 		'Current' => 'Current',
		// 	);
		// 	$BranchViewTime = $this->Model_Inserts->InsertBranchViewTime($data);
		// 	$Day++;
		// 	if ($BranchViewTime && $i == $diff) {
		// 		redirect('ViewBranch?id=' . $BranchID);
		// 	}
		// }
	}

	public function TerminateContract() {

		$ApplicantID = $this->input->get('id');
		if (!isset($_GET['id'])) {
			redirect('Employee');
		}
		else
		{
			date_default_timezone_set('Asia/Manila');

			$CheckEmployee = $this->Model_Selects->CheckEmployee($ApplicantID);
			$GetBranch = $this->Model_Selects->getBranchOption();

			if ($CheckEmployee->num_rows() > 0) {
				foreach ($CheckEmployee->result_array() as $row) {
					foreach ($GetBranch->result_array() as $nrow) {
						if ($row['BranchEmployed'] == $nrow['BranchID']) {
							$BranchName = $nrow['Name'];

							$data = array(
								'ApplicantID' => $ApplicantID,
								'PreviousDateStarted' => $row['DateStarted'],
								'PreviousDateEnds' => $row['DateEnds'],
								'Branch' => $BranchName,
								'Notes' => 'Terminated at ' . date('Y-m-d h:i:s A'),
							);
							$InsertContractHistory = $this->Model_Inserts->InsertContractHistory($data);
							$ApplicantExpired = $this->Model_Updates->ApplicantExpired($ApplicantID);
							if ($ApplicantExpired == TRUE) {
								$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #45C830;"><h5><i class="fas fa-check"></i> Employee ' . $ApplicantID . "'s contract has been terminated!</h5></div>");
							// LOGBOOK
							// $LogbookCurrentTime = date('Y-m-d h:i:s A');
							// $LogbookType = 'Update';
							// $LogbookEvent = "Employee " . $ApplicantID . "'s contract has been terminated!";
							// $LogbookLink = 'ViewEmployee?id=' . $ApplicantID;
							// $data = array(
							// 	'Time' => $LogbookCurrentTime,
							// 	'Type' => $LogbookType,
								// 'AdminID' => $_SESSION["AdminID"],
							// 	'Event' => $LogbookEvent,
							// 	'Link' => $LogbookLink,
							// );
							// $LogbookInsert = $this->Model_Inserts->InsertLogbook($data);
								redirect('ApplicantsExpired');
							}
							else
							{
								$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><h5><i class="fas fa-times"></i> Something\'s wrong, Please try agains!</h5></div>');
							}
						}
					}
				}
			}
			else
			{
				$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><h5><i class="fas fa-times"></i> Something\'s wrong, Please try againss!</h5></div>');
			}
		}
	}
	public function UpdateEmployer()
	{
		$EmployerID = $this->input->post('M_EmployerID');
		$LastName = $this->input->post('LastName');
		$FirstName = $this->input->post('FirstName');
		$MiddleInitial = $this->input->post('MiddleInitial');
		$ContactNumber = $this->input->post('ContactNumber');
		$Area = $this->input->post('Area');
		$Address = $this->input->post('Address');

		if ($LastName == NULL || $FirstName == NULL || $MiddleInitial == NULL || $ContactNumber == NULL || $Area == NULL || $Address == NULL) {
			$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><h5><i class="fas fa-times"></i> All fields are required!</h5></div>');
			$data = array(
				'EmployerID' => $EmployerID,
				'LastName' => $LastName,
				'FirstName' => $FirstName,
				'MiddleInitial' => $MiddleInitial,
				'ContactNumber' => $ContactNumber,
				'Area' => $Area,
				'Address' => $Address,
			);
			$this->session->set_flashdata($data);
			redirect($_SERVER['HTTP_REFERER']);
		}
		else
		{
			$data = array(
				'LastName' => $LastName,
				'FirstName' => $FirstName,
				'MiddleInitial' => $MiddleInitial,
				'ContactNumber' => $ContactNumber,
				'Area' => $Area,
				'Address' => $Address,
			);
			$updatedEmployer = $this->Model_Updates->UpdateEmployer($EmployerID, $data);
			if ($updatedEmployer) {
				$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #45C830;"><h5><i class="fas fa-check"></i> Details updated!</h5></div>');
				redirect("Employers");
			}
			else
			{
				$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><h5><i class="fas fa-times"></i> Something\'s wrong!</h5></div>');
				redirect("Employers");
			}
		}
	}
	public function UpdateBranch()
	{
		$BranchID = $this->input->post('M_BranchID');
		$EmployerID = $this->input->post('EmployerID');
		$pImage = $this->input->post('M_BranchIcon');
		$Name = $this->input->post('Name');
		$Address = $this->input->post('Address');
		$ContactNumber = $this->input->post('ContactNumber');
		$EmployeeIDSuffix = $this->input->post('EmployeeIDSuffix');

		// color parts
		$colors = array("NavbarBG", "NavbarColor", "MainBG", "Borders");

		if ($pImage == NULL || $EmployerID == NULL || $Name == NULL || $Address == NULL || $ContactNumber == NULL || $EmployeeIDSuffix == NULL) {
			$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><h5><i class="fas fa-times"></i> All fields are required!</h5></div>');
			$data = array(
				'EmployerID' => $EmployerID,
				'Name' => $Name,
				'Address' => $Address,
				'ContactNumber' => $ContactNumber,
				'EmployeeIDSuffix' => $EmployeeIDSuffix,
			);
			$this->session->set_flashdata($data);
			redirect($_SERVER['HTTP_REFERER']);
		}
		else
		{
			if (!$_FILES['pImage']['name'] == '') {
				$custombranchid = str_pad($BranchID,5,0,STR_PAD_LEFT) . '-B';

				$config['file_name']          = 'b_icon-'.$_FILES['pImage']['name'];
				$config['upload_path']          = './uploads/'.$custombranchid;
				$config['allowed_types']        = 'gif|jpg|png';
				$config['max_size']             = 2000;
				$config['max_width']            = 2000;
				$config['max_height']           = 2000;

				$this->load->library('upload', $config);
				if (!is_dir('uploads'))
				{
					mkdir('./uploads', 0777, true);
				}
				if (!is_dir('uploads/' . $custombranchid))
				{
					mkdir('./uploads/' . $custombranchid, 0777, true);
				}

				if (!$this->upload->do_upload('pImage'))
				{
					$this->session->set_flashdata('prompts', '<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><h5><i class="fas fa-times"></i> '.$this->upload->display_errors().'</h5></div>');
					redirect($_SERVER['HTTP_REFERER']);
				}
				else
				{
					$pImage = 'uploads/'.$custombranchid.'/'.$this->upload->data('file_name');

					// delete unused files in the upload folder
					$dir = './uploads/'.$custombranchid.'/';
					$folderfiles = get_filenames($dir);
					foreach ($folderfiles as $val) {
						$file = $dir . $val;
						if ($file != ('./'.$pImage) && substr($val,0,7) == 'b_icon-' && is_readable($file)) {
							unlink($file);
						}
					}
				}
			}


			$data = array(
				'EmployerID' => $EmployerID,
				'BranchIcon' => $pImage,
				'Name' => $Name,
				'Address' => $Address,
				'ContactNumber' => $ContactNumber,
				'EmployeeIDSuffix' => $EmployeeIDSuffix,
			);
			$updatedBranch = $this->Model_Updates->UpdateBranch($BranchID, $data);

			$dataColors = array();
			// update current colors
			foreach ($colors as $key => $val) {
				$dataColors[] = array(
					'Part' => $val,
					'HexColor' => $this->input->post('brcol' . $val,TRUE),
				);
			}
			$sColors = $dataColors;
			// update default colors
			foreach ($colors as $key => $val) {
				$dataColors[] = array(
					'Part' => 'default_' . $val,
					'HexColor' => $this->input->post('brcoldefault_' . $val,TRUE),
				);
			}
			$this->Model_Updates->UpdateBranchColors($BranchID,$dataColors);

			// update session values
			if ($_SESSION["BranchID"] == $BranchID) {
				$dataSession['BranchName'] = $Name;
				$dataSession['BranchIcon'] = $pImage;
				$dataSession['Colors'] = $sColors;
				
				$this->session->set_userdata($dataSession);
			}

			if ($updatedBranch) {
				$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #45C830;"><h5><i class="fas fa-check"></i> Details updated!</h5></div>');
				redirect("ModifyBranch?id=" . $BranchID);
			}
			else
			{
				$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><h5><i class="fas fa-times"></i> Something\'s wrong!</h5></div>');
				redirect("Employers");
			}
		}
	}
	public function v_importexceldata()
	{
		include 'vendor/autoload.php';

		if($_FILES["file"]["name"] != '')
		{
			$allowed_extension = array('xls', 'csv', 'xlsx');
			$file_array = explode(".", $_FILES["file"]["name"]);
			$file_extension = end($file_array);
			$BranchID = $this->input->post('ExcelBranchID');

			if(in_array($file_extension, $allowed_extension))
			{
				$file_name = time() . '.' . $file_extension;
				move_uploaded_file($_FILES['file']['tmp_name'], $file_name);
				$file_type = \PhpOffice\PhpSpreadsheet\IOFactory::identify($file_name);
				$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($file_type);

				$spreadsheet = $reader->load($file_name);

				unlink($file_name);

				$data = $spreadsheet->getSheet(3)->toArray();


				foreach($data as $row) {
					if ($row[0] <= 0) continue;

					$data = array(
						'ApplicantID' => $row[0],
						'Date_Time' => $row[3],
					);

					$CheckDataImported = $this->Model_Selects->CheckDataImported($data);

					$am_in = $row[4];
					$am_out = $row[5];
					$pm_in = $row[6];
					$pm_out = $row[7];

					if ($am_in != NULL AND $am_out == NULL AND $pm_in == NULL AND $pm_out != NULL) {		## NO BREAK BETWEEN AM IN AND PM OUT

						$totaldiff = abs(strtotime($am_in) - strtotime($pm_out));
						$mins = $totaldiff/60;	## total mins
						$totalhours = $mins/60;	## total hours
						$remmins = $mins%60;	## total remainder
						$total_regpay = $mins;

						$nam_in = str_pad($am_in,5,"0",STR_PAD_LEFT);
						$nam_out = NULL;
						$npm_in = NULL;
						$npm_out = str_pad($pm_out,5,"0",STR_PAD_LEFT);

						$row_status = 0; // NEED UPDATES

					}
					elseif ($am_in == NULL AND $am_out == NULL AND $pm_in != NULL AND $pm_out != NULL) {		## HALFDAY PM
						$totaldiff = abs(strtotime($pm_in) - strtotime($pm_out));
						$mins = $totaldiff/60;	## total mins
						$totalhours = $mins/60;	## total hours
						$remmins = $mins%60;	## total remainder
						$total_regpay = $mins;

						$nam_in = NULL;
						$nam_out = NULL;
						$npm_in = str_pad($pm_in,5,"0",STR_PAD_LEFT);
						$npm_out = str_pad($pm_out,5,"0",STR_PAD_LEFT);

						$row_status = 0; // NEED UPDATES
					}
					elseif ($am_in != NULL AND $am_out != NULL AND $pm_in == NULL AND $pm_out == NULL) {		## HALFDAY AM
						$totaldiff = abs(strtotime($am_in) - strtotime($am_out));
						$mins = $totaldiff/60;	## total mins
						$totalhours = $mins/60;	## total hours
						$remmins = $mins%60;	## total remainder
						$total_regpay = $mins;
						$nam_in = str_pad($am_in,5,"0",STR_PAD_LEFT);
						$nam_out = str_pad($am_out,5,"0",STR_PAD_LEFT);
						$npm_in = NULL;
						$npm_out = NULL;

						$row_status = 0; // NEED UPDATES
					}
					elseif ($am_in == null || $am_out == null || $pm_in == null || $pm_out == null) {		## ABSENT AM AND PM BLANK

						$total_regpay = null;
						$nam_in = null;
						$nam_out = null;
						$npm_in = NULL;
						$npm_out = NULL;

						$row_status = 2; // ABSENT
					}
					elseif ($am_in != null || $am_out != null || $pm_in != null || $pm_out != null)
					{
						$diff_am = abs(strtotime($am_in) - strtotime($am_out));
						$diff_pm = abs(strtotime($pm_in) - strtotime($pm_out));

						$tmins_am = $diff_am/60;
						$tmins_pm = $diff_pm/60;


						$hours_am = $tmins_am/60;
						$hours_pm = $tmins_pm/60;

						$mins_am = $tmins_am%60;
						$mins_pm = $tmins_pm%60;

						$total_regpay =$tmins_am + $tmins_pm;
						$nam_in = str_pad($am_in,5,"0",STR_PAD_LEFT);
						$nam_out = str_pad($am_out,5,"0",STR_PAD_LEFT);
						$npm_in = str_pad($pm_in,5,"0",STR_PAD_LEFT);
						$npm_out = str_pad($pm_out,5,"0",STR_PAD_LEFT);

						$row_status = 0; // NEED UPDATES
					}
					if ($row[12] == null) {
						$note = 'No existing note.';
					}
					else
					{
						$note = $row[12];
					}
					if (isset($am_in)) {
						$shift_type = 'day';
					}
					else
					{
						$shift_type = 'night';
					}
					if ($total_regpay > 480) {
						$overtime = ($total_regpay - 480);
						$total_regpay = 480;

						$Current_Rate = 400 / 8;
						$overtime_H = $overtime / 60;
						$Ot_Earned = ($Current_Rate * $overtime_H) *  1.25; 

						$Day_Earned = ($total_regpay / 60 ) * $Current_Rate;
					}
					else
					{
						$Current_Rate = 400 / 8;
						$overtime = 0;
						$total_regpay = $total_regpay;
						$Ot_Earned = 0;
						$Day_Earned = ($total_regpay / 60 ) * $Current_Rate;
					}

					if ($CheckDataImported->num_rows() > 0) {

						$ApplicantID = $row[0];
						$Date_Time = $row[3];

						$data = array(
							'Name' => $row[1],
							'BranchID' => $row[2],
							'Timein_AM' => $nam_in,
							'Timeout_AM' => $nam_out,
							'Timein_PM' => $npm_in,
							'Timeout_PM' => $npm_out,
							'Late_Time' => $row[8],
							'Leave_Early' => $row[9],
							'Absence_Time' => $row[10],
							'Total_BYmin' => $total_regpay,
							'Note' => $note,

							'shift_type' => $shift_type,
							'regular_day' => 'no',
							'sp_day' => 'no',
							'nh_day' => 'no',
							'overtime' => $overtime,

							'Day_Earned' => $Day_Earned,
							'Ot_Earned' => $Ot_Earned,

							'row_status' => $row_status,

						);

						$UpdateDatafromBio = $this->Model_Inserts->UpdateDatafromBio($ApplicantID,$Date_Time,$data);
					}
					else
					{

						$data = array(
							'ApplicantID' => $row[0],
							'Name' => $row[1],
							'BranchID' => $row[2],
							'Date_Time' => $row[3],

							'Timein_AM' => $nam_in,
							'Timeout_AM' => $nam_out,
							'Timein_PM' => $npm_in,
							'Timeout_PM' => $npm_out,

							// 'Late_Time' => floor($row[8]/60)." hr ".($row[8]%60)." min",
							'Late_Time' => $row[8],
							'Leave_Early' => $row[9],
							'Absence_Time' => $row[10],
							'Total_BYmin' => $total_regpay,
							'Note' => $note,

							'shift_type' => $shift_type,
							// days option
							'regular_day' => 'no',
							'sp_day' => 'no',
							'nh_day' => 'no',
							'overtime' => $overtime,

							'Day_Earned' => $Day_Earned,
							'Ot_Earned' => $Ot_Earned,

							'row_status' => 0,
						);
						$InsertDatafromBio = $this->Model_Inserts->InsertDatafromBio($data);
					}
				}

				redirect('ViewBranch?id='.$BranchID.'&Mode=monthly');
			}
			else
			{
				$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><h5><i class="fas fa-times"></i> Error: Only .xls .csv or .xlsx file allowed</h5></div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}
		else
		{
			$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><h5><i class="fas fa-times"></i> Error: Please Select File</h5></div>');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}
	public function UpdatethisAttRecord()
	{

		$date_id = $this->input->post('date_id');
		$ApplicantID = $this->input->post('ApplicantID');
		$startDate = $this->input->post('startDate');
		$EndDate = $this->input->post('EndDate');
		$shift_type = $this->input->post('shift_type');
		$am_in = $this->input->post('time_inam');
		$am_out = $this->input->post('time_outam');
		$pm_in = $this->input->post('time_inpm');
		$pm_out = $this->input->post('time_outpm');
		$regular_day = $this->input->post('regular_day');
		$sp_day = $this->input->post('sp_day');
		$Note = $this->input->post('note');
		$row_status = 1;

		if ($regular_day == 'yes') {	### HOLIDAYS
			$regular_day = 'yes';
		} else {
			$regular_day = 'no';
		}
		if ($sp_day == 'yes') {	### HOLIDAYS
			$sp_day = 'yes';
		} else {
			$sp_day = 'no';
		}

		$CheckEmployeeOT = $this->Model_Selects->CheckEmployeeOT($ApplicantID);	### EMPLOYEE DATA
		if ($CheckEmployeeOT->Overtime == 'Yes') {	### CHECK OVERTIME
			$otAvailable = 'yes';
		}
		else
		{
			$otAvailable = 'no';
		}

		$getRegularshift = $this->Model_Selects->getRegularshift();	### REGULAR SHIFT
		$getREGholiday = $this->Model_Selects->getREGholiday();	### REGULAR HOLIDAY
		$getSpecialRate = $this->Model_Selects->getSpecialRate();	### SPECIAL HOLIDAY
		$getOTrates = $this->Model_Selects->getOTrates();	### OVERTIME RATE
		
		if ($am_in != NULL AND $am_out == NULL AND$pm_in == NULL AND $pm_out != NULL) {		## NO BREAK BETWEEN AM IN AND PM OUT

			$totaldiff = abs(strtotime($am_in) - strtotime($pm_out));
			$mins = $totaldiff/60;	## total mins
			$totalhours = $mins/60;	## total hours
			$remmins = $mins%60;	## total remainder
			$total_regpay = $mins;

			$nam_in = str_pad($am_in,5,"0",STR_PAD_LEFT);
			$nam_out = NULL;
			$npm_in = NULL;
			$npm_out = str_pad($pm_out,5,"0",STR_PAD_LEFT);
		}
		elseif ($am_in == NULL AND $am_out == NULL AND $pm_in != NULL AND $pm_out != NULL) {		## HALFDAY PM
			$totaldiff = abs(strtotime($pm_in) - strtotime($pm_out));
			$mins = $totaldiff/60;	## total mins
			$totalhours = $mins/60;	## total hours
			$remmins = $mins%60;	## total remainder
			$total_regpay = $mins;

			$nam_in = NULL;
			$nam_out = NULL;
			$npm_in = str_pad($pm_in,5,"0",STR_PAD_LEFT);
			$npm_out = str_pad($pm_out,5,"0",STR_PAD_LEFT);
		}
		elseif ($am_in != NULL AND $am_out != NULL AND $pm_in == NULL AND $pm_out == NULL) {		## HALFDAY AM
			$totaldiff = abs(strtotime($am_in) - strtotime($am_out));
			$mins = $totaldiff/60;	## total mins
			$totalhours = $mins/60;	## total hours
			$remmins = $mins%60;	## total remainder
			$total_regpay = $mins;
			$nam_in = str_pad($am_in,5,"0",STR_PAD_LEFT);
			$nam_out = str_pad($am_out,5,"0",STR_PAD_LEFT);
			$npm_in = NULL;
			$npm_out = NULL;
		}
		elseif ($am_in < 1 AND $am_out < 1 AND $pm_in < 1 AND $pm_out < 1) {		## ABSENT AM AND PM BLANK

			if ($regular_day == 'yes') {	### HOLIDAYS
				$total_regpay = 480;
			} else {
				$total_regpay = null;
			}
			
			$nam_in = null;
			$nam_out = null;
			$npm_in = NULL;
			$npm_out = NULL;
			$row_status = 2;
		}
		elseif (isset($am_in) AND isset($am_out) AND isset($pm_in) AND isset($pm_out))
		{
			$diff_am = abs(strtotime($am_in) - strtotime($am_out));
			$diff_pm = abs(strtotime($pm_in) - strtotime($pm_out));

			$tmins_am = $diff_am/60;
			$tmins_pm = $diff_pm/60;


			$hours_am = $tmins_am/60;
			$hours_pm = $tmins_pm/60;

			$mins_am = $tmins_am%60;
			$mins_pm = $tmins_pm%60;

			$total_regpay =$tmins_am + $tmins_pm;
			$nam_in = str_pad($am_in,5,"0",STR_PAD_LEFT);
			$nam_out = str_pad($am_out,5,"0",STR_PAD_LEFT);
			$npm_in = str_pad($pm_in,5,"0",STR_PAD_LEFT);
			$npm_out = str_pad($pm_out,5,"0",STR_PAD_LEFT);
		}

		if ($otAvailable == 'yes') {
			if ($total_regpay > 480) {
				$overtime = ($total_regpay - 480);
			}
			else
			{
				$overtime = 0;
			}
		}
		else
		{
			$overtime = 0;
		}

		$cur_rate = $CheckEmployeeOT->Rate;	### DAY RATE EX: 400
		$ncrate = $cur_rate / 8; ### EX:	400 / 8 = 50

		if ($shift_type == 'day') {	### SHIFT DAY OR NIGHT
			$shift_type = 'day';
			$shiftVal = $getRegularshift->day_shift;
		} else {
			$shift_type = 'night';
			$shiftVal = $getRegularshift->night_shift;
		}

		$ncrate = $ncrate * $shiftVal; ### HOURLY RATE = RATE PER HOUR * SHIFT VALUE (DAY OR NIGHT)
		
		if ($regular_day == 'yes') {	### IF REGULAR HOLIDAY
			if ($shift_type == 'day') {
				$ncrate = $ncrate * $getREGholiday->day_shift;
			}
			else
			{
				$ncrate = $ncrate * $getREGholiday->night_shift;
			}
		}
		if ($sp_day == 'yes') {	### IF REGULAR HOLIDAY
			if ($shift_type == 'day') {
				$ncrate = $ncrate * $getSpecialRate->day_shift;
			}
			else
			{
				$ncrate = $ncrate * $getSpecialRate->night_shift;
			}
		}

		$Day_Earned = ($total_regpay / 60) * $ncrate; ### EX: (480/60) * RATE PER HOUR
		$data = array(
			
			'Timein_AM' => $nam_in,
			'Timeout_AM' => $nam_out,
			'Timein_PM' => $npm_in,
			'Timeout_PM' => $npm_out,
			'Total_BYmin' => $total_regpay,
			'shift_type' => $shift_type,
			'regular_day' => $regular_day,
			'sp_day' => $sp_day,
			'overtime' => $overtime,
			'row_status' => $row_status,
			'Note' => $Note,
			'Day_Earned' => $Day_Earned,
		);
		$UpdateArecord = $this->Model_Updates->UpdateArecord($date_id,$data);
		if ($UpdateArecord == 'success') {
			$this->session->set_flashdata('alert_error','update_success');
			redirect('ViewThisAttendance?ApplicantID='.$ApplicantID.'&startDate='.$startDate.'&EndDate='.$EndDate);
		} else {
			$this->session->set_flashdata('alert_error','update_error');
			redirect('ViewThisAttendance?ApplicantID='.$ApplicantID.'&startDate='.$startDate.'&EndDate='.$EndDate);
		}
	}
	public function update_drates()
	{
		$id = $this->input->post('id');
		$day_shift = $this->input->post('day_shift');
		$night_shift = $this->input->post('night_shift');
		if (!is_numeric($day_shift)) {
			$this->session->set_flashdata('prompt_status','Please input valid value!');
			redirect($_SERVER['HTTP_REFERER']);
		}
		if (!is_numeric($night_shift)) {
			$this->session->set_flashdata('prompt_status','Please input valid value!');
			redirect($_SERVER['HTTP_REFERER']);
		}
		if ($id != NULL OR $day_shift != NULL OR $night_shift != NULL) {
			$data = array(
				'day_shift' => $day_shift,
				'night_shift' => $night_shift,
			);
			$update_thisdrates = $this->Model_Updates->update_thisdrates($id,$data);
			if ($update_thisdrates == 'success') {
				$this->session->set_flashdata('prompt_status','Rate updated');
				redirect($_SERVER['HTTP_REFERER']);
			}
			else
			{
				$this->session->set_flashdata('prompt_status','Please input valid value!');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}
		else
		{
			$this->session->set_flashdata('prompt_status','Please input valid value!');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}
}