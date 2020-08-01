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

    	####### Get branch details
		$getApplicantDetID = $this->Model_Selects->getApplicantDetID($branch_id);

		####### Initiate Spreadsheets
        $spreadsheet = new Spreadsheet(); 
        $sheet = $spreadsheet->getActiveSheet();

        ####### Header
        $sheet->mergeCells('A3:A4');
        $sheet->setCellValue('A3', 'ApplicantID');
        $sheet->setCellValue('B3', 'Date');

        ####### Fill excel with data
        $i=5;
        foreach ($getApplicantDetID->result_array() as $row) {

        	$sheet->getColumnDimension('A')->setAutoSize(true);
        	$sheet->setCellValue('A'.$i, $row['ApplicantID']);
        	$i++;

        	$begin = new DateTime($f_date);
        	$end = new DateTime($t_date.'+ 1day');

        	$interval = DateInterval::createFromDateString('1 day');
        	$period = new DatePeriod($begin, $interval, $end);

        	$sheet->getColumnDimension('A')->setAutoSize(true);

        	$a = 'B';
        	foreach ($period as $dt) {
        		$sheet->getColumnDimension($a)->setAutoSize(true);
        		$sheet->setCellValue($a.'4', $dt->format("m-d-Y"));
        		$a++;
        	}        
        }
        ####### Instantiate Xlsx
        $writer = new Xlsx($spreadsheet);

        ####### Set filename
        $filename = 'date-formatsssssss';

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