<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Controller extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Model_Selects');
	}
	public function LoginValidation()
	{
		$UserName = $this->input->post('UserName',TRUE);
		$Password = $this->input->post('Password',TRUE);
		if ($UserName == NULL || $Password == NULL) {
			$p_text = '<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><i class="fas fa-times fa-fw"></i> Input Username and Password!</div>';
			$this->session->set_flashdata('prompts_login',$p_text);
			redirect(base_url());
		}
		else
		{
			$CheckAdminCred = $this->Model_Selects->CheckAdminCred($UserName);
			if ($CheckAdminCred->num_rows() > 0) {
				$d_row = $CheckAdminCred->row_array();
				if (password_verify($Password, $d_row['Password'])) {
					// get branch icon
					$GetBranchInfo = $this->Model_Selects->GetBranchDet($d_row['BranchID']);
					$BranchInfo = $GetBranchInfo->row_array();

					$data = array(
						'AdminNo' => $d_row['AdminNo'],
						'AdminLevel' => $d_row['AdminLevel'],
						'BranchID' => $d_row['BranchID'],
						'Position' => $d_row['Position'],
						'AdminID' => $d_row['AdminID'],
						'FirstName' => $d_row['FirstName'],
						'MiddleInitial' => $d_row['MiddleInitial'],
						'LastName' => $d_row['LastName'],
						'Gender' => $d_row['Gender'],
						'DateAdded' => $d_row['DateAdded'],
						'is_logged_in' => 'Active',

						'BranchName' => $BranchInfo['Name'],
						'BranchIcon' => $BranchInfo['BranchIcon'],
						'Colors' => $this->Model_Selects->getBranchColors($d_row['BranchID'],FALSE)->result_array(),
					);
					$this->session->set_userdata($data);
					redirect('Dashboard');
				}
				else
				{
					$p_text = '<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><i class="fas fa-times fa-fw"></i> Incorrect password!</div>';
					$this->session->set_flashdata('prompts_login',$p_text);
				}
			}
			else
			{
				$p_text = '<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><i class="fas fa-times fa-fw"></i> User doesn\'t exist!</div>';
				$this->session->set_flashdata('prompts_login',$p_text);
				redirect(base_url());
			}
		}
	}
}
