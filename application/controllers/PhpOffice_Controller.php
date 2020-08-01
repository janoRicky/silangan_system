<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class PhpOffice_Controller extends CI_Controller {
	public function __construct() {
		parent::__construct();

		$this->load->model('Model_Selects');
	}
	public function ExportFrom_To() {

        
		$branch_id = $this->input->post('id',true);

		$f_date = $this->input->post('f_date',true);
		$t_date = $this->input->post('t_date',true);

    	####### Get Applicant details
		$getApplicantDetID = $this->Model_Selects->getApplicantDetID($branch_id);
        ####### Get branch details
        $GetDetails_Branch = $this->Model_Selects->GetDetails_Branch($branch_id);
        $neBranchDet = $GetDetails_Branch->row_array();
		####### Initiate Spreadsheets
        $spreadsheet = new Spreadsheet(); 
        $sheet = $spreadsheet->getActiveSheet();

        ####### Header
        $sheet->mergeCells('A3:A4');
        $sheet->setCellValue('A3', 'ApplicantID');
        $sheet->setCellValue('C3', 'Date');
        $sheet->mergeCells('B3:B4');
        $sheet->setCellValue('B3', 'Name');

        ####### Fill excel with data
        $i=5;
        foreach ($getApplicantDetID->result_array() as $row) {

        	$sheet->getColumnDimension('A')->setAutoSize(true);
            $sheet->setCellValue('A'.$i, $row['ApplicantID']);
            $sheet->getColumnDimension('B')->setAutoSize(true);
            $sheet->setCellValue('B'.$i, $row['LastName'].' '.$row['FirstName'].', '.$row['MiddleInitial']);

        	$i++;

        	$begin = new DateTime($f_date);
        	$end = new DateTime($t_date.'+ 1day');

        	$interval = DateInterval::createFromDateString('1 day');
        	$period = new DatePeriod($begin, $interval, $end);

        	$sheet->getColumnDimension('A')->setAutoSize(true);

        	$a = 'C';
        	foreach ($period as $dt) {
        		$sheet->getColumnDimension($a)->setAutoSize(true);
        		$sheet->setCellValue($a.'4', $dt->format("m-d-Y"));
        		$a++;
        	}        
        }
        ####### Instantiate Xlsx
        $writer = new Xlsx($spreadsheet);

        ####### Set filename
        $dt = new DateTime('now', new DateTimezone('Asia/Manila'));
        $filename = 'Generate '.$neBranchDet['Name'].' excel date files - '.$dt->format('F j, Y, g_i a');

        ####### Generate file
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
        header('Cache-Control: max-age=0');
        $writer->save('php://output');
    }
    public function importExcel_format()
    {
    	# code...
    }
}