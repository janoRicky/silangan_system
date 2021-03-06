<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_Controller extends CI_Controller {


	public function __construct() {
		parent::__construct();

		$this->load->model('Model_Selects');
		$this->load->model('Model_Inserts');
		$this->load->model('Model_Updates');

		date_default_timezone_set('Asia/Manila');
	}
	public function addNewEmployee()
	{
		# PERSONAL INFORMATION
		$pImage = $this->input->post('pImageChecker');
		$PositionGroup = $this->input->post('PositionGroup');
		$PersonRecommending = $this->input->post('PersonRecommending');
		$ContractType = $this->input->post('ContractType');
		$SalaryType = $this->input->post('SalaryType');
		$Rate = $this->input->post('Rate');
		$AppliedOn = $this->input->post('AppliedOn');
		$SalaryExpected = $this->input->post('Rate');
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
		$MotherName = $this->input->post('MotherName');
		$MotherOccupation = $this->input->post('MotherOccupation');
		$FatherName = $this->input->post('FatherName');
		$FatherOccupation = $this->input->post('FatherOccupation');
		$RelName = $this->input->post('RelName');
		$RelAddress = $this->input->post('RelAddress');
		$RelRelation = $this->input->post('RelRelation');
		$Citizenship = $this->input->post('Citizenship');
		$CivilStatus = $this->input->post('CivilStatus');
		$SpouseName = $this->input->post('SpouseName');
		$No_Children = $this->input->post('No_Children');
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
		
		$BranchID = $this->input->post('BranchID');
		$H_Years = $this->input->post('H_Years');
		$H_Months = $this->input->post('H_Months');
		$H_Days = $this->input->post('H_Days');
		$EmployeeID = $this->input->post('EmployeeID');
		
		$BioID = $this->input->post('BioID');
		$TimeIn1 = $this->input->post('TimeIn1');
		$TimeOut1 = $this->input->post('TimeOut1');
		$TimeIn2 = $this->input->post('TimeIn2');
		$TimeOut2 = $this->input->post('TimeOut2');

		$BioIDCheck = $this->Model_Selects->getApplicantBioID($BioID);


		# ADDRESSES
		$Address_Present = $this->input->post('Address_Present');
		$Address_Provincial = $this->input->post('Address_Provincial');
		$Address_Manila = $this->input->post('Address_Manila');

		if ($PositionGroup == NULL || $ContractType == NULL || $SalaryType == NULL || $Rate == NULL || $LastName == NULL || $FirstName == NULL || $MI == NULL || $Gender == NULL || $Age == NULL || $Height == NULL || $Weight == NULL || $Religion == NULL || $bDate == NULL || $bPlace == NULL || $Citizenship == NULL || $CivilStatus == NULL || $No_Children == NULL || $PhoneNumber == NULL || $Address_Present == NULL || $MotherName == NULL || $MotherOccupation == NULL || $FatherName == NULL || $FatherOccupation == NULL || $BranchID == NULL || $BioIDCheck->num_rows() > 0) {

			if ($BioIDCheck->num_rows() > 0) {
				$this->session->set_flashdata('prompts', array('error', 'BioID exists!'));
			} else {
				$this->session->set_flashdata('prompts', array('error', 'All fields are required!'));
			}
			
			$data = array(
				'PositionGroup' => $PositionGroup,
				'PersonRecommending' => $PersonRecommending,
				'ContractType' => $ContractType,
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
				'MotherName' => $MotherName,
				'MotherOccupation' => $MotherOccupation,
				'FatherName' => $FatherName,
				'FatherOccupation' => $FatherOccupation,
				'RelName' => $RelName,
				'RelAddress' => $RelAddress,
				'RelRelation' => $RelRelation,
				'Citizenship' => $Citizenship,
				'CivilStatus' => $CivilStatus,
				'SpouseName' => $SpouseName,
				'No_Children' => $No_Children,
				'PhoneNumber' => $PhoneNumber,
				'SSS' => $SSS,
				'SSS_Effective' => $SSS_Effective,
				'RCN' => $RCN,
				'TIN' => $TIN,

				'HDMF' => $HDMF,
				'ATM_No' => $ATM_No,

				'PhilHealth' => $PhilHealth,
				
				'ConLDOR' => $ConLDOR,
				'ConMTAA' => $ConMTAA,
				'CaseAC' => $CaseAC,

				'BranchID' => $BranchID,
				'EmployeeID' => $EmployeeID,
				'H_Years' => $H_Years,
				'H_Months' => $H_Months,
				'H_Days' => $H_Days,

				'Address_Present' => $Address_Present,
				'Address_Provincial' => $Address_Provincial,
				'Address_Manila' => $Address_Manila,

				'BioID' => $BioID,
				'TimeIn1' => $TimeIn1,
				'TimeOut1' => $TimeOut1,
				'TimeIn2' => $TimeIn2,
				'TimeOut2' => $TimeOut2,
			);
			$this->session->set_flashdata($data);
			redirect('NewEmployee');
		}
		else
		{
			$cc = $this->db->count_all('applicants');
			$ccc = $cc + 1;
			$coun = str_pad($ccc,5,0,STR_PAD_LEFT);
			$id = '-A';
			$customid = $coun.$id;
			$ApplicantID = $customid;
			// Check Employee if exist
			$chkem = $this->Model_Selects->CheckEmployee($ApplicantID);
			if ($chkem->num_rows() > 0) {
				$this->session->set_flashdata('prompts', array('error', 'Employee ID exist!'));
				redirect('NewEmployee');
			}
			else
			{
				$config['upload_path']          = './uploads/'.$customid;
				$config['allowed_types']        = 'gif|jpg|png';
				$config['max_size']             = 2000;
				$config['max_width']            = 2000;
				$config['max_height']           = 2000;

				$this->load->library('upload', $config);
				if (!is_dir('uploads'))
				{
					mkdir('./uploads', 0777, true);
				}
				if (!is_dir('uploads/' . $customid))
				{
					mkdir('./uploads/' . $customid, 0777, true);
					$dir_exist = false;
				}
				if ($pImage != NULL) {
					if ( ! $this->upload->do_upload('pImage'))
					{
						$this->session->set_flashdata('prompts', array('error', $this->upload->display_errors()));
						redirect('NewEmployee');
					}
					else
					{
						$pImage = 'uploads/'.$customid.'/'.$this->upload->data('file_name');
					}
				} else {
					$DiceRoll = rand(1, 3);
					if ($DiceRoll == 1) {
						$pImage = 'assets/img/silangan_noimage_blue.png';
					}
					if ($DiceRoll == 2) {
						$pImage = 'assets/img/silangan_noimage_green.png';
					}
					if ($DiceRoll == 3) {
						$pImage = 'assets/img/silangan_noimage_purple.png';
					}
				}
				// INSERT EMPLOYEE
				$data = array(
					'ApplicantImage' => $pImage,
					'ApplicantID' => $customid,
					'PositionGroup' => $PositionGroup,
					'PersonRecommending' => $PersonRecommending,
					'ContractType' => $ContractType,
					'SalaryType' => $SalaryType,
					'Rate' => $Rate,
					'SalaryExpected' => $SalaryExpected,
					'LastName' => ucfirst($LastName),
					'FirstName' => ucfirst($FirstName),
					'MiddleInitial' => ucfirst($MI),
					'Nickname' => $Nickname,
					'Gender' => $Gender,
					'Age' => $Age,
					'Height' => $Height,
					'Weight' => $Weight,
					'Religion' => $Religion,
					'BirthDate' => $bDate,
					'BirthPlace' => $bPlace,
					'MotherName' => $MotherName,
					'MotherOccupation' => $MotherOccupation,
					'FatherName' => $FatherName,
					'FatherOccupation' => $FatherOccupation,
					'RelName' => $RelName,
					'RelAddress' => $RelAddress,
					'RelRelation' => $RelRelation,
					'Citizenship' => $Citizenship,
					'CivilStatus' => $CivilStatus,
					'SpouseName' => $SpouseName,
					'No_OfChildren' => $No_Children,
					
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

					'PhilHealth' => $PhilHealth,

					'ConLDOR' => $ConLDOR,
					'ConMTAA' => $ConMTAA,
					'CaseAC' => $CaseAC,

					'Overtime' => $Overtime,
					'Reassignment' => $Reassignment,

					'Status' => 'Applicant',
					'AppliedOn' => $AppliedOn,

					'BioID' => $BioID,
					'TimeIn1' => $TimeIn1,
					'TimeOut1' => $TimeOut1,
					'TimeIn2' => $TimeIn2,
					'TimeOut2' => $TimeOut2,
				);
				$addedEmployee = $this->Model_Inserts->AddThisEmployee($data);
				if ($addedEmployee == TRUE) {
					if (isset($_SESSION["bencart"])) {
						foreach ($_SESSION["bencart"] as $s_da) {
							$data = array(
								'ApplicantID' => $customid,
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
								'ApplicantID' => $customid,
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
								'ApplicantID' => $customid,
								'RefName' => $s_da['ref_cart']['RefName'],
								'RefPosition' => $s_da['ref_cart']['RefPosition'],
								'CompanyAddress' => $s_da['ref_cart']['CompanyAddress']

							);
							$this->Model_Inserts->InsertCharRef($data);
						}
					}
					if (isset($_SESSION["emp_cart"])) {
						foreach ($_SESSION["emp_cart"] as $s_da) {
							$data = array(
								'ApplicantID' => $customid,
								'Name' => $s_da['emp_cart']['EmployerName'],
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

			// Add Contract -Start
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

					if ($ApplicantID == NULL) {
						$this->session->set_flashdata('prompts', array('error', 'Something\'s wrong, Please try again!'));
						redirect('NewEmployee');
					}
					else
					{
						$CheckApplicant = $this->Model_Selects->CheckApplicant($ApplicantID);
						if ($CheckApplicant->num_rows() > 0) {
							$row = $CheckApplicant->row_array();

							

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
								'SalaryExpected' => $SalaryExpected,
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
									$this->session->set_flashdata('prompts', array('success', 'New Employee added!'));

									// LOGBOOK
									
									$LogbookCurrentTime = date('Y-m-d h:i:s A');
									$LogbookType = 'New';
									$LogbookEvent = 'New Employee added! (Name: ' . ucfirst($row['LastName']) . ', ' . ucfirst($row['FirstName']) .  ' ' . ucfirst($row['MiddleInitial']) .  '. | Position: ' . $PositionGroup . ')';
									$LogbookLink = 'ViewEmployee?id=' . $customid;
									$data = array(
										'Time' => $LogbookCurrentTime,
										'Type' => $LogbookType,
										'AdminID' => $_SESSION["AdminID"],
										'Event' => $LogbookEvent,
										'Link' => $LogbookLink,
									);
									$LogbookInsert = $this->Model_Inserts->InsertLogbook($data);
							}
							else
							{
								$this->session->set_flashdata('prompts', array('error', 'Something\'s wrong, Please try again!'));
								redirect('NewEmployee');
							}
						}
						else
						{
							$this->session->set_flashdata('prompts', array('error', 'Something\'s wrong, Please try again!'));
							redirect('NewEmployee');
						}
					}

			// Add Contract -END
					redirect('Employee');
				}
				else
				{
					$this->session->set_flashdata('prompts', array('error', 'Something\'s wrong, Please try again!'));
					redirect('NewEmployee');
				}
			}
		}
	}
	public function Add_NewAdmin()
	{
		$AdminLevel = $this->input->post('AdminLevel',TRUE);
		$BranchID = $this->input->post('BranchID',TRUE);
		$Position = $this->input->post('Position',TRUE);
		$AdminID = $this->input->post('AdminID',TRUE);
		$Password = $this->input->post('Password',TRUE);
		$FirstName = $this->input->post('FirstName',TRUE);
		$MiddleIN = $this->input->post('MiddleIN',TRUE);
		$LastName = $this->input->post('LastName',TRUE);
		$Gender = $this->input->post('Gender',TRUE);

		if ($AdminLevel == NULL || $BranchID == NULL || $Position == NULL || $AdminID == NULL || $Password == NULL || $FirstName == NULL || $MiddleIN == NULL || $LastName == NULL || $Gender == NULL) {
			$this->session->set_flashdata('prompts', array('error', 'All fields are required!'));
			redirect('Admin_List');
		}
		else
		{
			$CheckAdminID = $this->Model_Selects->CheckAdminID($AdminID);
			if ($CheckAdminID->num_rows() > 0) {
				$this->session->set_flashdata('prompts', array('error', 'Admin exist!'));
				redirect('Admin_List');
			}
			else
			{
				$now = new DateTime();
				$now->setTimezone(new DateTimeZone('Asia/Manila'));
				$DateAdded = $now->format('g:i A');

				$En_Password = password_hash($Password, PASSWORD_BCRYPT);
				$DateAdded = time();
				$data = array(
					'AdminLevel' => $AdminLevel,
					'BranchID' => $BranchID,
					'Position' => $Position,
					'AdminID' => $AdminID,
					'Password' => $En_Password,
					'FirstName' => $FirstName,
					'MiddleInitial' => $MiddleIN,
					'LastName' => $LastName,
					'Gender' => $Gender,
					'DateAdded' => $DateAdded,
				);
				$InsertAdmin = $this->Model_Inserts->InsertAdmin($data);
				if ($InsertAdmin == TRUE) {
					$this->session->set_flashdata('prompts', array('success', 'New Admin added!'));

					// LOGBOOK
					
					$LogbookCurrentTime = date('Y-m-d h:i:s A');
					$LogbookType = 'New';
					$LogbookEvent = 'New Admin added! (Name: ' . ucfirst($LastName) . ', ' . ucfirst($FirstName) .  ' ' . ucfirst($MiddleIN) .  '. | Position: ' . $Position . ')';
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
					$this->session->set_flashdata('prompts', array('error', 'Something\'s wrong, Please try again!'));
					redirect('Admin_List');
				}
			}
		}
		
	}
	public function Add_NewEmployer()
	{
		$EmployerLastName = $this->input->post('EmployerLastName',TRUE);
		$EmployerFirstName = $this->input->post('EmployerFirstName',TRUE);
		$EmployerMI = $this->input->post('EmployerMI',TRUE);
		$EmployerContact = $this->input->post('EmployerContact',TRUE);
		$EmployerArea = $this->input->post('EmployerArea',TRUE);
		$EmployerAddress = $this->input->post('EmployerAddress',TRUE);

		if ( $EmployerLastName == NULL || $EmployerFirstName == NULL || $EmployerMI == NULL || $EmployerArea == NULL || $EmployerAddress == NULL || $EmployerContact == NULL ) {
			$this->session->set_flashdata('prompts', array('error', 'All fields are required!'));
			redirect('Employers');
		}
		else
		{
			$data = array(
				'LastName' => $EmployerLastName,
				'FirstName' => $EmployerFirstName,
				'MiddleInitial' => $EmployerMI,
				'ContactNumber' => $EmployerContact,
				'Area' => $EmployerArea,
				'Address' => $EmployerAddress,
				'Status' => 'Active',
			);
			$InsertNewEmployer = $this->Model_Inserts->InsertNewEmployer($data);
			if ($InsertNewEmployer == TRUE) {
				$this->session->set_flashdata('prompts', array('success', 'New Branch added!'));

				// LOGBOOK
				
				$LogbookCurrentTime = date('Y-m-d h:i:s A');
				$LogbookType = 'New';
				$LogbookEvent = 'New Employer added! (Name: ' . ucfirst($EmployerLastName) . ', ' . ucfirst($EmployerFirstName) .  ' ' . ucfirst($EmployerMI) . '.)';
				$LogbookLink = 'Employers';
				$data = array(
					'Time' => $LogbookCurrentTime,
					'Type' => $LogbookType,
					'AdminID' => $_SESSION["AdminID"],
					'Event' => $LogbookEvent,
					'Link' => $LogbookLink,
				);
				$LogbookInsert = $this->Model_Inserts->InsertLogbook($data);

				redirect('Employers');
			}
			else
			{
				$this->session->set_flashdata('prompts', array('error', 'Something\'s wrong, Please try again!'));
				redirect('Employers');
			}
			
		}
	}
	public function Add_NewBranch()
	{
		$EmployerID = $this->input->post('EmployerID',TRUE);
		$pImage = $this->input->post('pImageChecker',TRUE);
		$BranchName = $this->input->post('BranchName',TRUE);
		$BranchAddress = $this->input->post('BranchAddress',TRUE);
		$BranchContact = $this->input->post('BranchContact',TRUE);
		$EmployeeIDSuffix = $this->input->post('EmployeeIDSuffix',TRUE);

		// color parts
		$colors = array("NavbarBG", "NavbarColor", "MainBG", "MainColor", "SidebarBG", "SidebarColor", "Borders");

		if ($pImage == NULL || $EmployerID == NULL || $BranchName == NULL || $BranchAddress == NULL || $BranchContact == NULL || $EmployeeIDSuffix == NULL ) {
			$this->session->set_flashdata('prompts', array('error', 'All fields are required!'));
			$data = array(
				'BranchName' => $BranchName,
				'BranchAddress' => $BranchAddress,
				'BranchContact' => $BranchContact,
				'EmployeeIDSuffix' => $EmployeeIDSuffix,
			);
			foreach ($colors as $key => $val) {
				$data['brcol' . $val] = $this->input->post('brcol' . $val,TRUE);
			}
			$this->session->set_flashdata($data);

			redirect('Employers?employerID=' . $EmployerID);
		}
		else
		{
			$CheckBranch = $this->Model_Selects->CheckBranch($BranchName);
			$GetEmployerByID = $this->Model_Selects->GetEmployerByID($EmployerID);
			if ($CheckBranch->num_rows() > 0) {
				$this->session->set_flashdata('prompts', array('error', 'Branch exist!'));
				redirect('Employers?employerID=' . $EmployerID);
			}
			elseif ($GetEmployerByID->num_rows() < 1) {
				$this->session->set_flashdata('prompts', array('error', 'Employer does not exist!'));
				redirect('Employers');
			}
			else
			{
				if (!$_FILES['pImage']['name'] == '') {
					$customid = str_pad(($this->db->count_all('branches') + 1),5,0,STR_PAD_LEFT) . "-B";

					$config['file_name']          = 'b_icon-'.$_FILES['pImage']['name'];
					$config['upload_path']          = './uploads/'.$customid;
					$config['allowed_types']        = 'gif|jpg|png';
					$config['max_size']             = 2000;
					$config['max_width']            = 2000;
					$config['max_height']           = 2000;

					$this->load->library('upload', $config);
					if (!is_dir('uploads'))
					{
						mkdir('./uploads', 0777, true);
					}
					if (!is_dir('uploads/' . $customid))
					{
						mkdir('./uploads/' . $customid, 0777, true);
						$dir_exist = false;
					}
					if ( ! $this->upload->do_upload('pImage'))
					{
						$this->session->set_flashdata('prompts', array('error', $this->upload->display_errors()));
						redirect('Employers');
					}
					else
					{
						$pImage = 'uploads/'.$customid.'/'.$this->upload->data('file_name');
					}
				}

				$data = array(
					'EmployerID' => $EmployerID,
					'BranchIcon' => $pImage,
					'Name' => $BranchName,
					'Address' => $BranchAddress,
					'ContactNumber' => $BranchContact,
					'EmployeeIDSuffix' => $EmployeeIDSuffix,
					'Status' => 'Active',
				);
				$InsertNewBranch = $this->Model_Inserts->InsertNewBranch($data);

				// get new branch ID
				$newBranchID = $this->db->insert_id();
				// insert colors
				$dataColors = array();
				foreach ($colors as $key => $val) {
					// set current colors
					$dataColors[] = array(
						'BranchID' => $newBranchID,
						'Part' => $val,
						'HexColor' => $this->input->post('brcol' . $val,TRUE),
					);
					// set default colors
					$dataColors[] = array(
						'BranchID' => $newBranchID,
						'Part' => 'default_' . $val,
						'HexColor' => $this->input->post('brcol' . $val,TRUE),
					);
				}
				$this->Model_Inserts->InsertBranchColors($dataColors);

				if ($InsertNewBranch) {
					$this->session->set_flashdata('prompts', array('success', 'New Branch added!'));
					
					// LOGBOOK
					
					$LogbookCurrentTime = date('Y-m-d h:i:s A');
					$LogbookType = 'New';
					$LogbookEvent = 'New Branch added! (Name: ' . $BranchName . ' | Contact: ' . $BranchContact . ')';
					$LogbookLink = 'Employers';
					$data = array(
						'Time' => $LogbookCurrentTime,
						'Type' => $LogbookType,
						'AdminID' => $_SESSION["AdminID"],
						'Event' => $LogbookEvent,
						'Link' => $LogbookLink,
					);
					$LogbookInsert = $this->Model_Inserts->InsertLogbook($data);

					redirect('Employers?employerID=' . $EmployerID);
				}
				else
				{
					$this->session->set_flashdata('prompts', array('error', 'Something\'s wrong, Please try again!'));
					redirect('Employers?employerID=' . $EmployerID);
				}
			}
		}
	}
	public function AddSupDoc()
	{
		$ApplicantID = $this->input->post('ApplicantID',TRUE);
		$Subject = $this->input->post('Subject',TRUE);
		$Description = $this->input->post('Description',TRUE);
		$Remarks = $this->input->post('Remarks',TRUE);
		$Type = $this->input->post('Type',TRUE);

		if ($ApplicantID == NULL || $Subject == NULL || $Description == NULL || $Remarks == NULL || $Type == NULL) {
			$this->session->set_flashdata('prompts', array('error', 'Something\'s wrong, Please try again!'));
			redirect('Employee');
		}
		else
		{
			// Preview Image File Upload
			$config['upload_path']          = './uploads/'.$ApplicantID;
			$config['allowed_types']        = 'pdf';
			$config['max_size']             = 12800;
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

			// TODO: Add restrictions to deny /uploads/ access.
			// PDF File Upload
			if ( ! $this->upload->do_upload('pFile')) {
				$this->session->set_flashdata('prompts', array('error', $pFile . ' PDF upload: '.$this->upload->display_errors().' This function is not yet implemented. Click the blue "Choose a PDF file button" instead.'));
				redirect('Employee');
				exit();
			} else {
				$pFile = 'uploads/'.$ApplicantID.'/'.$this->upload->data('file_name');
				$pFileName = $this->upload->data('file_name');
				if (strlen($pFileName) > 15) {
					$pFileName = substr($pFileName, 0, 15);
					$pFileName = $pFileName . '...';
				}
				$data = array(
					'ApplicantID' => $ApplicantID,
					'Doc_File' => $pFile,
					'Doc_FileName' => $pFileName,
					'Type' => $Type,
					'Subject' => $Subject,
					'Description' => $Description,
					'Remarks' => $Remarks,
					'DateAdded' => date('Y-m-d'),
				);
				$AddDocuments = $this->Model_Inserts->AddDocuments($data);
				if ($AddDocuments) {
					$this->session->set_flashdata('prompts', array('success', 'Document added!'));
					redirect('ViewEmployee?id=' . $ApplicantID . '#Documents');
				}
				else
				{
					$this->session->set_flashdata('prompts', array('error', 'Something\'s wrong, Please try again!'));
					redirect('Employee');
				}
			}
		}
	}
	public function add_newcontri_SSS()
	{
		$f_range = $this->input->post('f_range',TRUE);
		$t_range = $this->input->post('t_range',TRUE);
		$contribution_er = $this->input->post('contribution_er',TRUE);
		$contribution_ee = $this->input->post('contribution_ee',TRUE);
		$contribution_ec = $this->input->post('contribution_ec',TRUE);
		$total = $this->input->post('total',TRUE);
		$total_with_ec = $this->input->post('total_with_ec',TRUE);

		if ($f_range == NULL || $t_range == NULL || $contribution_er == NULL || $contribution_ee == NULL || $contribution_ec == NULL || $total == NULL || $total_with_ec == NULL) {
			$this->session->set_flashdata('prompts', array('error', 'All fields are required!'));
			redirect('sss_table');
		} else {
			$data = array(
				'f_range' => $f_range,
				't_range' => $t_range,
				'contribution_er' => $contribution_er,
				'contribution_ee' => $contribution_ee,
				'contribution_ec' => $contribution_ec,
				'total' => $total,
				'total_with_ec' => $total_with_ec,
			);
			$contri_add_SSS = $this->Model_Inserts->contri_add_SSS($data);

			if ($contri_add_SSS == TRUE) {
				$this->session->set_flashdata('prompts', array('success', 'Row added!'));

				// LOGBOOK
				
				$LogbookCurrentTime = date('Y-m-d h:i:s A');
				$LogbookType = 'New';
				$LogbookEvent = 'New SSS Row added! (Range: ' . $f_range . ' - ' . $t_range . ')';
				$LogbookLink = 'sss_table';
				$data = array(
					'Time' => $LogbookCurrentTime,
					'Type' => $LogbookType,
					'AdminID' => $_SESSION["AdminID"],
					'Event' => $LogbookEvent,
					'Link' => $LogbookLink,
				);
				$LogbookInsert = $this->Model_Inserts->InsertLogbook($data);

				redirect('sss_table');
			}
			else
			{
				$this->session->set_flashdata('prompts', array('error', 'Something\'s wrong, Please try again!'));
				redirect('sss_table');
			}
		}
	}
	public function add_newcontri_HDMF()
	{
		$f_range = $this->input->post('f_range',TRUE);
		$t_range = $this->input->post('t_range',TRUE);
		$contribution_er = $this->input->post('contribution_er',TRUE);
		$contribution_ee = $this->input->post('contribution_ee',TRUE);
		$total = $this->input->post('total',TRUE);

		if ($f_range == NULL || $t_range == NULL || $contribution_er == NULL || $contribution_ee == NULL || $total == NULL) {
			$this->session->set_flashdata('prompts', array('error', 'All fields are required!'));
			redirect('hdmf_table');
		} else {
			$data = array(
				'f_range' => $f_range,
				't_range' => $t_range,
				'contribution_er' => $contribution_er,
				'contribution_ee' => $contribution_ee,
				'total' => $total,
			);
			$contri_add_HDMF = $this->Model_Inserts->contri_add_HDMF($data);

			if ($contri_add_HDMF == TRUE) {
				$this->session->set_flashdata('prompts', array('success', 'Row added!'));

				// LOGBOOK
				
				$LogbookCurrentTime = date('Y-m-d h:i:s A');
				$LogbookType = 'New';
				$LogbookEvent = 'New HDMF Row added! (Range: ' . $f_range . ' - ' . $t_range . ')';
				$LogbookLink = 'hdmf_table';
				$data = array(
					'Time' => $LogbookCurrentTime,
					'Type' => $LogbookType,
					'AdminID' => $_SESSION["AdminID"],
					'Event' => $LogbookEvent,
					'Link' => $LogbookLink,
				);
				$LogbookInsert = $this->Model_Inserts->InsertLogbook($data);

				redirect('hdmf_table');
			}
			else
			{
				$this->session->set_flashdata('prompts', array('error', 'Something\'s wrong, Please try again!'));
				redirect('hdmf_table');
			}
		}
	}
	public function add_newcontri_PhilHealth()
	{
		$f_range = $this->input->post('f_range',TRUE);
		$t_range = $this->input->post('t_range',TRUE);
		$contribution_rate = $this->input->post('contribution_rate',TRUE);
		$contribution_ee = $this->input->post('contribution_ee',TRUE);

		if ($f_range == NULL || $t_range == NULL || $contribution_rate == NULL || $contribution_ee == NULL) {
			$this->session->set_flashdata('prompts', array('error', 'All fields are required!'));
			redirect('philhealth_table');
		} else {
			$data = array(
				'f_range' => $f_range,
				't_range' => $t_range,
				'contribution_rate' => $contribution_rate,
				'contribution_ee' => $contribution_ee,
			);
			$contri_add_PhilHealth = $this->Model_Inserts->contri_add_PhilHealth($data);

			if ($contri_add_PhilHealth == TRUE) {
				$this->session->set_flashdata('prompts', array('success', 'Row added!'));

				// LOGBOOK
				
				$LogbookCurrentTime = date('Y-m-d h:i:s A');
				$LogbookType = 'New';
				$LogbookEvent = 'New PhilHealth Row added! (Range: ' . $f_range . ' - ' . $t_range . ')';
				$LogbookLink = 'philhealth_table';
				$data = array(
					'Time' => $LogbookCurrentTime,
					'Type' => $LogbookType,
					'AdminID' => $_SESSION["AdminID"],
					'Event' => $LogbookEvent,
					'Link' => $LogbookLink,
				);
				$LogbookInsert = $this->Model_Inserts->InsertLogbook($data);

				redirect('philhealth_table');
			}
			else
			{
				$this->session->set_flashdata('prompts', array('error', 'Something\'s wrong, Please try again!'));
				redirect('philhealth_table');
			}
		}
	}
	public function add_newcontri_Tax()
	{
		$f_range = $this->input->post('f_range',TRUE);
		$t_range = $this->input->post('t_range',TRUE);
		$tax = $this->input->post('tax',TRUE);
		$tax_rate = $this->input->post('tax_rate',TRUE);

		if ($f_range == NULL || $t_range == NULL || $tax == NULL || $tax_rate == NULL) {
			$this->session->set_flashdata('prompts', array('error', 'All fields are required!'));
			redirect('tax_table');
		} else {
			$data = array(
				'f_range' => $f_range,
				't_range' => $t_range,
				'tax' => $tax,
				'tax_rate' => $tax_rate,
			);
			$contri_add_Tax = $this->Model_Inserts->contri_add_Tax($data);

			if ($contri_add_Tax == TRUE) {
				$this->session->set_flashdata('prompts', array('success', 'Row added!'));

				// LOGBOOK
				
				$LogbookCurrentTime = date('Y-m-d h:i:s A');
				$LogbookType = 'New';
				$LogbookEvent = 'New Tax Row added! (Range: ' . $f_range . ' - ' . $t_range . ')';
				$LogbookLink = 'tax_table';
				$data = array(
					'Time' => $LogbookCurrentTime,
					'Type' => $LogbookType,
					'AdminID' => $_SESSION["AdminID"],
					'Event' => $LogbookEvent,
					'Link' => $LogbookLink,
				);
				$LogbookInsert = $this->Model_Inserts->InsertLogbook($data);

				redirect('tax_table');
			}
			else
			{
				$this->session->set_flashdata('prompts', array('error', 'Something\'s wrong, Please try again!'));
				redirect('tax_table');
			}
		}
	}
	public function generate_payslip()
	{
		if (isset($_POST['row_id']) == NULL) {
			echo 'PROMPT EMPTY ERRORS';
			exit();
		}
		$id = $_POST['row_id'];
		foreach($id as $key => $n) {
		  echo $id[$key];
		}
	}
}
