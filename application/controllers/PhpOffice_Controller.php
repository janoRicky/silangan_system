<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Cell\DataType;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;

class PhpOffice_Controller extends CI_Controller {
	public function __construct() {
		parent::__construct();

		$this->load->model('Model_Selects');
	}

	public function ExportFrom_To() {


		$branch_id = $this->input->post('id',true);
        $mode = $this->input->post('Mode',true);
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
        $sheet->mergeCells('A1:J1');
        $styleArrayTitle = array(
            'font' => array(
                'bold' => true,
                'color' => array('rgb' => '161617'),
                'size' => 12,
                'name' => 'Verdana'
            ));
        $sheet->getStyle('A1')->applyFromArray($styleArrayTitle);
        $sheet->getColumnDimension('A')->setAutoSize(true);
        $sheet->getColumnDimension('B')->setAutoSize(true);
        $sheet->getColumnDimension('C')->setAutoSize(true);
        $sheet->getColumnDimension('D')->setAutoSize(true);

        ##### CELL VALUES
        $sheet->setCellValue('A1', 'Branch Information | Silangan System');
        $sheet->setCellValue('A2', $branch_id);
        $sheet->setCellValue('B2', $mode);
        $sheet->setCellValue('A3', 'ApplicantID');
        $sheet->setCellValue('B3', 'Name');
        $sheet->setCellValue('C3', 'Salary ( ₱ )');
        $sheet->setCellValue('D3', 'Date');

        ####### Fill excel with data
        $i=4;
        foreach ($getApplicantDetID->result_array() as $row) {

        	$sheet->getColumnDimension('A')->setAutoSize(true);
            $sheet->setCellValue('A'.$i, $row['ApplicantID']);
            $sheet->getColumnDimension('B')->setAutoSize(true);
            $sheet->setCellValue('B'.$i, $row['LastName'].' '.$row['FirstName'].', '.$row['MiddleInitial']);
            $sheet->getColumnDimension('B')->setAutoSize(true);
            $sheet->setCellValue('C'.$i, 'SAMPLE');

            $i++;

            $begin = new DateTime($f_date);
            $end = new DateTime($t_date.'+ 1day');

            $interval = DateInterval::createFromDateString('1 day');
            $period = new DatePeriod($begin, $interval, $end);

            $sheet->getColumnDimension('A')->setAutoSize(true);

            $a = 'D';
            foreach ($period as $dt) {
                $sheet->getColumnDimension($a)->setAutoSize(true);
                $sheet->setCellValue($a.'3', $dt->format('Y-m-d'));
                $a++;
            }        
        }
        $totaCol =  $sheet->getHighestColumn().'3';

        $sheet->setCellValue($totaCol , 'Total');
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

    public function export_payslip() {

        $branch_id = $this->input->post('h_id',true);

        $fdate = $this->input->post('fdate',true);
        $tdate = $this->input->post('tdate',true);

        // CONVERT DATE
        $nf_date = date("d-m-yy", strtotime($fdate));
        $nt_date = date("d-m-yy", strtotime($tdate));


        $getPayslipFromto = $this->Model_Selects->getPayslipFromto($branch_id,$nf_date,$nt_date);
        $getAllApplicantName = $this->Model_Selects->getAllApplicantName();
        $GetDetails_Branch = $this->Model_Selects->GetDetails_Branch($branch_id);
        $neBranchDet = $GetDetails_Branch->row_array();

        $spreadsheet = new Spreadsheet(); 
        $sheet = $spreadsheet->getActiveSheet();


        $sheet->mergeCells('A1:J1');
        $styleArrayTitle = array(
            'font' => array(
                'bold' => true,
                'color' => array('rgb' => '161617'),
                'size' => 12,
                'name' => 'Verdana'
            ));

        $sheet->getStyle('A1')->applyFromArray($styleArrayTitle);
        $sheet->getColumnDimension('A')->setAutoSize(true);
        $sheet->getColumnDimension('B')->setAutoSize(true);
        $sheet->getColumnDimension('C')->setAutoSize(true);
        $sheet->getColumnDimension('D')->setAutoSize(true);

        $sheet->setCellValue('A1', 'Payslip from '.$fdate.' to '.$tdate.' | Silangan System');
        $sheet->setCellValue('A2', 'ApplicantID');
        $sheet->setCellValue('B2', 'Name');
        $sheet->setCellValue('C2', 'Net Pay ( ₱ )');
        $sheet->setCellValue('D2', 'Date');


        $i=3;
        foreach ($getPayslipFromto->result_array() as $row) {

            $sheet->getColumnDimension('A')->setAutoSize(true);
            $sheet->setCellValue('A'.$i, $row['ApplicantID']);

            foreach ($getAllApplicantName->result_array() as $drow) {
                if ($drow['ApplicantID'] == $row['ApplicantID']) {

                    $sheet->getColumnDimension('B')->setAutoSize(true);
                    $sheet->setCellValue('B'.$i, $drow['LastName'].', '.$drow['FirstName'].', '.$drow['MiddleInitial']);
                }

            }

            $sheet->getColumnDimension('C')->setAutoSize(true);
            $sheet->setCellValue('C'.$i, $row['net_pay']);
            $sheet->getColumnDimension('D')->setAutoSize(true);
            $sheet->setCellValue('D'.$i, $row['Date_Generated']);

            $i++;
        }

        $writer = new Xlsx($spreadsheet);

        $dt = new DateTime('now', new DateTimezone('Asia/Manila'));
        $filename = 'Generate '.$neBranchDet['Name'].' excel date files - '.$dt->format('F j, Y, g_i a');

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
        header('Cache-Control: max-age=0');
        $writer->save('php://output');
    }
}