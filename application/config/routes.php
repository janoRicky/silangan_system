<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Main_Controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['Dashboard'] = 'Main_Controller/Dashboard';
$route['Employee'] = 'Main_Controller/Employee';
$route['ViewEmployee'] = 'Main_Controller/ViewEmployee';
$route['ModifyEmployee'] = 'Main_Controller/ModifyEmployee';
$route['Applicant'] = 'Main_Controller/V_Applicants';
$route['ApplicantsExpired'] = 'Main_Controller/V_ApplicantsExpired';
$route['NewEmployee'] = 'Main_Controller/NewEmployee';
$route['Admin_List'] = 'Main_Controller/View_Admins';
$route['Employers'] = 'Main_Controller/Employers';
$route['ModifyEmployer'] = 'Main_Controller/ModifyEmployer';
$route['ModifyBranch'] = 'Main_Controller/ModifyBranch';
$route['Experimental'] = 'Main_Controller/Experimental';
$route['Archived'] = 'Main_Controller/V_Archived';
$route['Blacklisted'] = 'Main_Controller/V_Blacklisted';

$route['Payroll'] = 'Main_Controller/PayrollBranches';
$route['ViewBranch'] = 'Main_Controller/ViewBranch';
$route['Payrollsss'] = 'Main_Controller/Payrollsss';

$route['sss_table'] = 'Main_Controller/sss_table';
$route['hdmf_table'] = 'Main_Controller/hdmf_table';
$route['philhealth_table'] = 'Main_Controller/philhealth_table';
$route['tax_table'] = 'Main_Controller/tax_table';


// LOGIN
$route['LoginValidation'] = 'Login_Controller/LoginValidation';
// LOGIN
$route['Logout'] = 'Main_Controller/Logout';
// CREATE
$route['addem'] = 'Add_Controller/addem';
$route['addNewEmployee'] = 'Add_Controller/addNewEmployee';
$route['Add_NewAdmin'] = 'Add_Controller/Add_NewAdmin';
$route['Add_NewEmployer'] = 'Add_Controller/Add_NewEmployer';
$route['Add_NewBranch'] = 'Add_Controller/Add_NewBranch';
$route['AddSupDoc'] = 'Add_Controller/AddSupDoc';

$route['add_newcontri_SSS'] = 'Add_Controller/add_newcontri_SSS';
$route['add_newcontri_HDMF'] = 'Add_Controller/add_newcontri_HDMF';
$route['add_newcontri_PhilHealth'] = 'Add_Controller/add_newcontri_PhilHealth';
$route['add_newcontri_Tax'] = 'Add_Controller/add_newcontri_Tax';

$route['generate_payslip'] = 'Add_Controller/generate_payslip';






// DELETE
$route['RemoveEmployee'] = 'Delete_Controller/RemoveEmployee';
$route['RemoveAdmin'] = 'Delete_Controller/RemoveAdmin';
$route['RemoveEmployer'] = 'Delete_Controller/RemoveEmployer';
$route['RemoveBranch'] = 'Delete_Controller/RemoveBranch';

$route['remove_contri_SSS'] = 'Delete_Controller/remove_contri_SSS';
$route['remove_contri_HDMF'] = 'Delete_Controller/remove_contri_HDMF';
$route['remove_contri_PhilHealth'] = 'Delete_Controller/remove_contri_PhilHealth';
$route['remove_contri_Tax'] = 'Delete_Controller/remove_contri_Tax';


// UPDATE
$route['EmployApplicant'] = 'Update_Controller/EmployApplicant';
$route['ExtendContract'] = 'Update_Controller/ExtendContract';
$route['UpdateEmployee'] = 'Update_Controller/UpdateEmployee';
$route['ReassignAdmin'] = 'Update_Controller/ReassignAdmin';
$route['UpdateEmployer'] = 'Update_Controller/UpdateEmployer';
$route['UpdateBranch'] = 'Update_Controller/UpdateBranch';
$route['AddNote'] = 'Update_Controller/AddNote';
$route['AddNoteDocuments'] = 'Update_Controller/AddNoteDocuments';
$route['SetReminder'] = 'Update_Controller/SetReminder';
$route['BlacklistEmployee'] = 'Update_Controller/BlacklistEmployee';
$route['RestoreEmployee'] = 'Update_Controller/RestoreEmployee';
$route['SetWeeklyHours'] = 'Update_Controller/SetWeeklyHours';
$route['ViewBranchEmployees'] = 'Update_Controller/ViewBranchEmployees';
$route['ImportExcel'] = 'Update_Controller/ImportExcel';
$route['update_drates'] = 'Update_Controller/update_drates';



$route['TerminateContract'] = 'Update_Controller/TerminateContract';

// EXPORT
$route['export_payslip'] = 'PhpOffice_Controller/export_payslip';


// TCPDF
$route['GeneratePaySlip'] = 'Tcpdf_Controller/GeneratePaySlip';

// NEW UPDATE
$route['v_importexceldata'] = 'Update_Controller/v_importexceldata';
$route['UpdatethisAttRecord'] = 'Update_Controller/UpdatethisAttRecord';
$route['GetDataByApplicantID'] = 'Main_Controller/GetDataByApplicantID';
$route['ViewThisAttendance'] = 'Main_Controller/ViewThisAttendance';
$route['GetDateByApplicantID'] = 'Main_Controller/GetDateByApplicantID';

$route['day_rates'] = 'Main_Controller/day_rates';

