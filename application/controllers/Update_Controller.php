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

			if ($ApplicantID == NULL || $BranchID == NULL) {
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
						// date_default_timezone_set('Asia/Manila');
						// $LogbookCurrentTime = date('Y-m-d h:i:s A');
						// $LogbookType = 'Employment';
						// $LogbookEvent = 'Applicant ID ' . $Temp_ApplicantID .' has been employed to Branch ID ' . $BranchID . ' for ';
						// if($H_Years != 0) {
						// 	$LogbookEvent = $LogbookEvent . $H_Years;
						// 	if($H_Years == 1) {
						// 		$LogbookEvent = $LogbookEvent . ' year, ';
						// 	} else {
						// 		$LogbookEvent = $LogbookEvent . ' years, ';
						// 	}
						// }
						// if($H_Months != 0) {
						// 	$LogbookEvent = $LogbookEvent . $H_Months;
						// 	if($H_Months == 1) {
						// 		$LogbookEvent = $LogbookEvent . ' month, ';
						// 	} else {
						// 		$LogbookEvent = $LogbookEvent . ' months, ';
						// 	}
						// }
						// if($H_Days != 0) {
						// 	$LogbookEvent = $LogbookEvent . $H_Days;
						// 	if($H_Days == 1) {
						// 		$LogbookEvent = $LogbookEvent . ' day, ';
						// 	} else {
						// 		$LogbookEvent = $LogbookEvent . ' days, ';
						// 	}
						// }
						// $LogbookEvent = substr($LogbookEvent, 0, -2) . '!';
						// $LogbookLink = base_url() . 'ViewEmployee?id=' . $Temp_ApplicantID;
						// $data = array(
						// 	'Time' => $LogbookCurrentTime,
						// 	'Type' => $LogbookType,
						// 	'Event' => $LogbookEvent,
						// 	'Link' => $LogbookLink,
						// );
						// $LogbookInsert = $this->Model_Inserts->InsertLogbook($data);
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

			if ($ApplicantID == NULL) {
				$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><h5><i class="fas fa-times"></i> Something\'s wrong, Please try again! (Error: Extend Contract) A:' . $ApplicantID . ' D:' . $E_Days . ' H:' . $E_Months . ' Y:' . $E_Years . ' </h5></div>');
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
						// date_default_timezone_set('Asia/Manila');
						// $LogbookCurrentTime = date('Y-m-d h:i:s A');
						// $LogbookType = 'Update';
						// $LogbookEvent = 'Applicant ID ' . $ApplicantID .' has their contract extended by ';
						// if($E_Years != 0) {
						// 	$LogbookEvent = $LogbookEvent . $E_Years;
						// 	if($E_Years == 1) {
						// 		$LogbookEvent = $LogbookEvent . ' year, ';
						// 	} else {
						// 		$LogbookEvent = $LogbookEvent . ' years, ';
						// 	}
						// }
						// if($E_Months != 0) {
						// 	$LogbookEvent = $LogbookEvent . $E_Months;
						// 	if($E_Months == 1) {
						// 		$LogbookEvent = $LogbookEvent . ' month, ';
						// 	} else {
						// 		$LogbookEvent = $LogbookEvent . ' months, ';
						// 	}
						// }
						// if($E_Days != 0) {
						// 	$LogbookEvent = $LogbookEvent . $E_Days;
						// 	if($E_Days == 1) {
						// 		$LogbookEvent = $LogbookEvent . ' day, ';
						// 	} else {
						// 		$LogbookEvent = $LogbookEvent . ' days, ';
						// 	}
						// }
						// $LogbookEvent = substr($LogbookEvent, 0, -2) . '!';
						// $LogbookLink = base_url() . 'ViewEmployee?id=' . $ApplicantID . '#Contract';
						// $data = array(
						// 	'Time' => $LogbookCurrentTime,
						// 	'Type' => $LogbookType,
						// 	'Event' => $LogbookEvent,
						// 	'Link' => $LogbookLink,
						// );
						// $LogbookInsert = $this->Model_Inserts->InsertLogbook($data);
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
		$PositionDesired = $this->input->post('PositionDesired');
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

		if ($PositionDesired == NULL || $LastName == NULL || $FirstName == NULL || $MI == NULL) {
			$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><h5><i class="fas fa-times"></i> All fields are required!</h5></div>');
			$data = array(
				'EmployeeID' => $EmployeeID,
				'PositionDesired' => $PositionDesired,
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

				if (!$_FILES['pImage']['name'] == '') {
					if (! $this->upload->do_upload('pImage'))
					{
						$this->session->set_flashdata('prompts', '<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><h5><i class="fas fa-times"></i> '.$this->upload->display_errors().'</h5></div>');
						redirect($_SERVER['HTTP_REFERER']);
					}
					else
					{
						$pImage = base_url().'uploads/'.$ApplicantID.'/'.$this->upload->data('file_name');
					}
				}
				// INSERT EMPLOYEE
				$data = array(
					'ApplicantImage' => $pImage,
					'ApplicantID' => $ApplicantID,
					'EmployeeID' => $EmployeeID,
					'PositionDesired' => $PositionDesired,
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
					// date_default_timezone_set('Asia/Manila');
					// $LogbookCurrentTime = date('Y-m-d h:i:s A');
					// $LogbookType = 'Update';
					// $LogbookEvent = 'Updated details on Person ID ' . $ApplicantID . '.';
					// $LogbookLink = base_url() . 'ViewEmployee?id=' . $ApplicantID;
					// $data = array(
					// 	'Time' => $LogbookCurrentTime,
					// 	'Type' => $LogbookType,
					// 	'Event' => $LogbookEvent,
					// 	'Link' => $LogbookLink,
					// );
					// $LogbookInsert = $this->Model_Inserts->InsertLogbook($data);
					redirect($_SERVER['HTTP_REFERER']);
				}
				else
				{
					$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><h5><i class="fas fa-times"></i> Something\'s wrong!</h5></div>');
					redirect($_SERVER['HTTP_REFERER']);
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
						$LogbookLink = base_url() . 'ViewEmployee?id=' . $ApplicantID;
						$data = array(
							'Time' => $LogbookCurrentTime,
							'Type' => $LogbookType,
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
				// $LogbookLink = base_url() . 'ViewEmployee?id=' . $ApplicantID;
				// $data = array(
				// 	'Time' => $LogbookCurrentTime,
				// 	'Type' => $LogbookType,
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
				// $LogbookLink = base_url() . 'ViewEmployee?id=' . $ApplicantID;
				// $data = array(
				// 	'Time' => $LogbookCurrentTime,
				// 	'Type' => $LogbookType,
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
			
			foreach ($GetWeeklyDates->result_array() as $nrow):
				$ArrayInt++;
				$Type = $this->input->post('Type_' . $nrow['Time'],TRUE);
				$Hours = $this->input->post('Hours_' . $nrow['Time'],TRUE);
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
					$GrossPay = $total_hoursperday * $dayRate;

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
							// $LogbookLink = base_url() . 'ViewBranch?id=' . $Temp_ApplicantID;
							// $LogbookLink = base_url() . 'Branches';
							// $data = array(
							// 	'Time' => $LogbookCurrentTime,
							// 	'Type' => $LogbookType,
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

			$Checkkkkkk = $this->Model_Selects->Checkkkkkk($ApplicantID);

			if ($Checkkkkkk->num_rows() > 0) {
				$gross_pay = $this->Model_Selects->GetempGP($ApplicantID);
				
				$getsssRa = $this->Model_Selects->getsssRa();
				$GetTotalH = $this->Model_Selects->GetTotalH($ApplicantID);
				$GetTotalOt = $this->Model_Selects->GetTotalOt($ApplicantID);

				foreach ($getsssRa->result_array() as $row) {
					if ($gross_pay >= $row['f_range'] && $gross_pay <= $row['t_range']) {
						$sss_contri = $row['contribution'];
					}
					else
					{
						$sss_contri = 0;
					}
				}
				$net_pay = $gross_pay - $sss_contri;
				date_timezone_set('Asia/Manila');
				$c_month = date('Y/m/d');
				$data = array(
					'BranchID' => $BranchID,
					'ApplicantID' => $ApplicantID,
					'gross_pay' => round($gross_pay,2),
					'sss_contri' => $sss_contri,
					'TotalHours' => $GetTotalH,
					'TotaOT' => $GetTotalOt,
					'net_pay' => round($net_pay,2),
					'c_week' => $_SESSION['Modeeee'],
					'c_month' => $c_month,
				);
				$this->Model_Inserts->Insertttttt($data);
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
			if ($diff > 7) {
				$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><h5><i class="fas fa-times"></i> Error: Date Range for weekly must be lower than 1 week</h5></div>');
				redirect($_SERVER['HTTP_REFERER']);
			} //velseif ($diff > 180 && $diff < 730) {
			// 	$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #FFA500;"><h5><i class="fas fa-exclamation-triangle"></i> Note: You are viewing at a huge date range, performance may get slower than usual</h5></div>');
			// }
			// TODO: Clean & optimize this. May cause lag on huge database.
			$this->Model_Updates->UpdateWeeklyHoursCurrent();
			$this->Model_Deletes->CleanWeeklyDates();
			$HoursHolidays = array('01-01', '04-09', '04-10', '05-01', '06-12', '08-31', '11-30', '12-25', '12-30'); // MONTH - DAY
			$SpecialHolidays = array('01-25', '02-25', '04-11', '08-21', '11-01', '11-02', '12-08', '12-24', '12-31'); // MONTH - DAY

			for ($i = 0; $i <= $diff; $i++) {
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
					redirect('ViewBranch?id=' . $BranchID);
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
				
				$dim = $xlsx->dimension();
				$cols = $dim[0];
				$RowCount = 0;
				$ColCount = 0;
				$ApplicantsArray = array();

				foreach ( $xlsx->rows() as $k => $r ):
					if ($k == 0) continue; // skip first row
					// echo '<tr class="clickable-row" data-toggle="modal" data-target="#HoursWeeklyModal">';
					for ( $i = 0; $i < $cols; $i ++ ) {
						if ($RowCount == 0){
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
									// if (isset($Holiday)) {
									// 	$data['Holiday'] = '1';
									// } else {
									// 	$data['Holiday'] = NULL;
									// }
									// if (isset($Special)) {
									// 	$data['Special'] = '1';
									// } else {
									// 	$data['Special'] = NULL;
									// }
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
						// echo '<td><i class="Hours_' . ( isset( $r[ $i ] ) ? $r[ $i ] : '&nbsp;' ) . '"></i>' . ( isset( $r[ $i ] ) ? $r[ $i ] : '&nbsp;' ) . '</td>';
						$ColCount++;
					}
					// echo '</tr>';
					$RowCount++;
					$ColCount = 0;
				endforeach;
				if ($RowCount <= $xlsx->rows()) {
					$ApplicantsArray = serialize($ApplicantsArray);
					$this->session->set_flashdata('ApplicantsArray', $ApplicantsArray);
					redirect('ViewBranch?id=excel');
				}
				$this->load->view('_template/users/u_redirecting');
				// echo '</table>';
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
								// $LogbookLink = base_url() . 'ViewEmployee?id=' . $ApplicantID;
								// $data = array(
								// 	'Time' => $LogbookCurrentTime,
								// 	'Type' => $LogbookType,
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
		$Name = $this->input->post('Name');
		$Address = $this->input->post('Address');
		$ContactNumber = $this->input->post('ContactNumber');
		$EmployeeIDSuffix = $this->input->post('EmployeeIDSuffix');

		if ($EmployerID == NULL || $Name == NULL || $Address == NULL || $ContactNumber == NULL || $EmployeeIDSuffix == NULL) {
			$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><h5><i class="fas fa-times"></i> All fields are required!</h5></div>');
			$data = array(
				'BranchID' => $BranchID,
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
			$data = array(
				'EmployerID' => $EmployerID,
				'Name' => $Name,
				'Address' => $Address,
				'ContactNumber' => $ContactNumber,
				'EmployeeIDSuffix' => $EmployeeIDSuffix,
			);
			$updatedBranch = $this->Model_Updates->UpdateBranch($BranchID, $data);
			if ($updatedBranch) {
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
}