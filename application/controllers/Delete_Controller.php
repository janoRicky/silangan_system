<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete_Controller extends CI_Controller {


	public function __construct() {
		parent::__construct();

		$this->load->model('Model_Selects');
		$this->load->model('Model_Inserts');
		$this->load->model('Model_Deletes');
	}
	public function RemoveEmployee()
	{
		$id = $this->input->get('id');
		if (!isset($_GET['id'])) {
			redirect('Employee');
		}
		else
		{
			$Removethis = $this->Model_Deletes->RemoveEmpl($id);
			if ($Removethis) {
				$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #45C830;"><h5><i class="fas fa-check"></i> Employee ID ' . $id . ' has been succesfully removed!</h5></div>');

				// LOGBOOK
				date_default_timezone_set('Asia/Manila');
				$LogbookCurrentTime = date('Y-m-d h:i:s A');
				$LogbookType = 'Archival';
				$LogbookEvent = 'Employee ID ' . $id .' has been archived.';
				$LogbookLink = 'ViewEmployee?id=' . $id;
				$data = array(
					'Time' => $LogbookCurrentTime,
					'Type' => $LogbookType,
					'Event' => $LogbookEvent,
					'Link' => $LogbookLink,
				);
				$LogbookInsert = $this->Model_Inserts->InsertLogbook($data);

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
	public function RemoveAdmin()
	{
		$id = $this->input->get('id');
		if (!isset($_GET['id'])) {
			redirect('Admin_List');
		}
		elseif ($id == $_SESSION['AdminNo']) {
			$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><h5><i class="fas fa-times fa-fw"></i> You cannot remove an active admin.</h5></div>');
			redirect('Admin_List');
		}
		else
		{
			$Removethis = $this->Model_Deletes->RemoveAdminM($id);
			if ($Removethis) {
				$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #45C830;"><h5><i class="fas fa-check"></i> Admin ID ' . $id . ' has been succesfully removed!</h5></div>');

				// LOGBOOK
				date_default_timezone_set('Asia/Manila');
				$LogbookCurrentTime = date('Y-m-d h:i:s A');
				$LogbookType = 'Deletion';
				$LogbookEvent = 'Admin ID ' . $id .' has been removed.';
				$LogbookLink = 'Admin_List';
				$data = array(
					'Time' => $LogbookCurrentTime,
					'Type' => $LogbookType,
					'Event' => $LogbookEvent,
					'Link' => $LogbookLink,
				);
				$LogbookInsert = $this->Model_Inserts->InsertLogbook($data);

				if (isset($_SERVER['HTTP_REFERER'])) {
					redirect($_SERVER['HTTP_REFERER']);
				}
				else
				{
					redirect('Admin_List');
				}
			}
			else
			{
				redirect('Admin_List');
			}
		}
	}
	public function RemoveEmployer()
	{
		$id = $this->input->get('id');
		if (!isset($_GET['id'])) {
			redirect('Employers');
		}
		else
		{
			if ($this->Model_Selects->GetEmployerBranches($id)->num_rows() > 0) {
				$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><h5><i class="fas fa-times"></i> Please reassign the branches first.</h5></div>');\
				redirect('Employers');
			}
			else
			{
				$Removethis = $this->Model_Deletes->RemoveEmployerM($id);
				if ($Removethis) {
					$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #45C830;"><h5><i class="fas fa-check"></i> Employer ID ' . $id . ' has been succesfully removed!</h5></div>');

					// LOGBOOK
					date_default_timezone_set('Asia/Manila');
					$LogbookCurrentTime = date('Y-m-d h:i:s A');
					$LogbookType = 'Deletion';
					$LogbookEvent = 'Employer ID ' . $id .' has been removed.';
					$LogbookLink = 'Employers';
					$data = array(
						'Time' => $LogbookCurrentTime,
						'Type' => $LogbookType,
						'Event' => $LogbookEvent,
						'Link' => $LogbookLink,
					);
					$LogbookInsert = $this->Model_Inserts->InsertLogbook($data);

					if (isset($_SERVER['HTTP_REFERER'])) {
						redirect($_SERVER['HTTP_REFERER']);
					}
					else
					{
						redirect('Employers');
					}
				}
				else
				{
					redirect('Employers');
				}
			}
		}
	}
	public function RemoveBranch()
	{
		$id = $this->input->get('id');
		if (!isset($_GET['id'])) {
			redirect('Employers');
		}
		else
		{
			if ($this->Model_Selects->GetBranchesEmployed($id)->num_rows() > 0) {
				$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><h5><i class="fas fa-times"></i> Please terminate the branch&#39s employees first.</h5></div>');
				redirect('Employers');
			}
			elseif ($this->Model_Selects->GetBranchesAdmin($id)->num_rows() > 0) {
				$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><h5><i class="fas fa-times"></i> There are still admins assigned to this branch.</h5></div>');
				redirect('Employers');

			}
			else
			{
				$Removethis = $this->Model_Deletes->RemoveBranchM($id);
				if ($Removethis) {
					$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #45C830;"><h5><i class="fas fa-check"></i> Branch ID ' . $id . ' has been succesfully removed!</h5></div>');

					// LOGBOOK
					date_default_timezone_set('Asia/Manila');
					$LogbookCurrentTime = date('Y-m-d h:i:s A');
					$LogbookType = 'Deletion';
					$LogbookEvent = 'Branch ID ' . $id .' has been removed.';
					$LogbookLink = 'Branches';
					$data = array(
						'Time' => $LogbookCurrentTime,
						'Type' => $LogbookType,
						'Event' => $LogbookEvent,
						'Link' => $LogbookLink,
					);
					$LogbookInsert = $this->Model_Inserts->InsertLogbook($data);
					
					if (isset($_SERVER['HTTP_REFERER'])) {
						redirect($_SERVER['HTTP_REFERER']);
					}
					else
					{
						redirect('Employers');
					}
				}
				else
				{
					redirect('Employers');
				}
			}
			
		}
	}
	public function remove_contri_SSS()
	{
		$id = $this->input->get('id');

		if (!isset($_GET['id'])) {
			redirect('sss_table');
		}
		else
		{
			$Removethis = $this->Model_Deletes->remove_contri_SSS($id);

			if ($Removethis) {
				$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #45C830;"><h5><i class="fas fa-check"></i> Row Deleted!</h5></div>');

				// LOGBOOK
				date_default_timezone_set('Asia/Manila');
				$LogbookCurrentTime = date('Y-m-d h:i:s A');
				$LogbookType = 'Deletion';
				$LogbookEvent = 'SSS Row ' . $id .' has been removed.';
				$LogbookLink = 'sss_table';
				$data = array(
					'Time' => $LogbookCurrentTime,
					'Type' => $LogbookType,
					'Event' => $LogbookEvent,
					'Link' => $LogbookLink,
				);
				$LogbookInsert = $this->Model_Inserts->InsertLogbook($data);

				redirect('sss_table');
			}
			else
			{
				$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><h5><i class="fas fa-times"></i> Something\'s wrong, Please try again!</h5></div>');
				redirect('sss_table');
			}
		}
	}
	public function remove_contri_HDMF()
	{
		$id = $this->input->get('id');

		if (!isset($_GET['id'])) {
			redirect('hdmf_table');
		}
		else
		{
			$Removethis = $this->Model_Deletes->remove_contri_HDMF($id);

			if ($Removethis) {
				$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #45C830;"><h5><i class="fas fa-check"></i> Row Deleted!</h5></div>');

				// LOGBOOK
				date_default_timezone_set('Asia/Manila');
				$LogbookCurrentTime = date('Y-m-d h:i:s A');
				$LogbookType = 'Deletion';
				$LogbookEvent = 'HDMF Row ' . $id .' has been removed.';
				$LogbookLink = 'hdmf_table';
				$data = array(
					'Time' => $LogbookCurrentTime,
					'Type' => $LogbookType,
					'Event' => $LogbookEvent,
					'Link' => $LogbookLink,
				);
				$LogbookInsert = $this->Model_Inserts->InsertLogbook($data);

				redirect('hdmf_table');
			}
			else
			{
				$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><h5><i class="fas fa-times"></i> Something\'s wrong, Please try again!</h5></div>');
				redirect('hdmf_table');
			}
		}
	}
	public function remove_contri_PhilHealth()
	{
		$id = $this->input->get('id');

		if (!isset($_GET['id'])) {
			redirect('philhealth_table');
		}
		else
		{
			$Removethis = $this->Model_Deletes->remove_contri_PhilHealth($id);

			if ($Removethis) {
				$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #45C830;"><h5><i class="fas fa-check"></i> Row Deleted!</h5></div>');

				// LOGBOOK
				date_default_timezone_set('Asia/Manila');
				$LogbookCurrentTime = date('Y-m-d h:i:s A');
				$LogbookType = 'Deletion';
				$LogbookEvent = 'PhilHealth Row ' . $id .' has been removed.';
				$LogbookLink = 'philhealth_table';
				$data = array(
					'Time' => $LogbookCurrentTime,
					'Type' => $LogbookType,
					'Event' => $LogbookEvent,
					'Link' => $LogbookLink,
				);
				$LogbookInsert = $this->Model_Inserts->InsertLogbook($data);

				redirect('philhealth_table');
			}
			else
			{
				$this->session->set_flashdata('prompts','<div class="text-center" style="width: 100%;padding: 21px; color: #F52F2F;"><h5><i class="fas fa-times"></i> Something\'s wrong, Please try again!</h5></div>');
				redirect('philhealth_table');
			}
		}
	}
}
