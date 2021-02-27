<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete_Controller extends CI_Controller {


	public function __construct() {
		parent::__construct();

		$this->load->model('Model_Selects');
		$this->load->model('Model_Inserts');
		$this->load->model('Model_Deletes');

		date_default_timezone_set('Asia/Manila');
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
				$this->session->set_flashdata('prompts', array('success', 'Employee ID ' . $id . ' has been succesfully removed!'));

				// LOGBOOK
				
				$LogbookCurrentTime = date('Y-m-d h:i:s A');
				$LogbookType = 'Archival';
				$LogbookEvent = 'Employee ID ' . $id .' has been archived.';
				$LogbookLink = 'ViewEmployee?id=' . $id;
				$data = array(
					'Time' => $LogbookCurrentTime,
					'Type' => $LogbookType,
					'AdminID' => $_SESSION["AdminID"],
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
			$this->session->set_flashdata('prompts', array('warning', 'You cannot remove an active admin.'));
			redirect('Admin_List');
		}
		else
		{
			$Removethis = $this->Model_Deletes->RemoveAdminM($id);
			if ($Removethis) {
				$this->session->set_flashdata('prompts', array('success', 'Admin ID ' . $id . ' has been succesfully removed!'));

				// LOGBOOK
				
				$LogbookCurrentTime = date('Y-m-d h:i:s A');
				$LogbookType = 'Deletion';
				$LogbookEvent = 'Admin ID ' . $id .' has been removed.';
				$LogbookLink = 'Admin_List';
				$data = array(
					'Time' => $LogbookCurrentTime,
					'Type' => $LogbookType,
					'AdminID' => $_SESSION["AdminID"],
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
				$this->session->set_flashdata('prompts', array('warning', 'Please reassign the branches first.'));
				redirect('Employers');
			}
			else
			{
				$Removethis = $this->Model_Deletes->RemoveEmployerM($id);
				if ($Removethis) {
					$this->session->set_flashdata('prompts', array('success', 'Employer ID ' . $id . ' has been succesfully removed!'));

					// LOGBOOK
					
					$LogbookCurrentTime = date('Y-m-d h:i:s A');
					$LogbookType = 'Deletion';
					$LogbookEvent = 'Employer ID ' . $id .' has been removed.';
					$LogbookLink = 'Employers';
					$data = array(
						'Time' => $LogbookCurrentTime,
						'Type' => $LogbookType,
						'AdminID' => $_SESSION["AdminID"],
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
				$this->session->set_flashdata('prompts', array('warning', 'Please terminate the branch&#39s employees first.'));
				redirect('Employers');
			}
			elseif ($this->Model_Selects->GetBranchesAdmin($id)->num_rows() > 0) {
				$this->session->set_flashdata('prompts', array('warning', 'There are still admins assigned to this branch. Please reassign them first.'));
				redirect('Employers');
			}
			else
			{
				$Removethis = $this->Model_Deletes->RemoveBranchM($id);
				if ($Removethis) {
					$this->session->set_flashdata('prompts', array('success', 'Branch ID ' . $id . ' has been succesfully removed!'));

					// LOGBOOK
					
					$LogbookCurrentTime = date('Y-m-d h:i:s A');
					$LogbookType = 'Deletion';
					$LogbookEvent = 'Branch ID ' . $id .' has been removed.';
					$LogbookLink = 'Branches';
					$data = array(
						'Time' => $LogbookCurrentTime,
						'Type' => $LogbookType,
						'AdminID' => $_SESSION["AdminID"],
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
				$this->session->set_flashdata('prompts', array('success', 'Row Deleted!'));

				// LOGBOOK
				
				$LogbookCurrentTime = date('Y-m-d h:i:s A');
				$LogbookType = 'Deletion';
				$LogbookEvent = 'SSS Row ' . $id .' has been removed.';
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
				$this->session->set_flashdata('prompts', array('success', 'Row Deleted!'));

				// LOGBOOK
				
				$LogbookCurrentTime = date('Y-m-d h:i:s A');
				$LogbookType = 'Deletion';
				$LogbookEvent = 'HDMF Row ' . $id .' has been removed.';
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
				$this->session->set_flashdata('prompts', array('success', 'Row Deleted!'));

				// LOGBOOK
				
				$LogbookCurrentTime = date('Y-m-d h:i:s A');
				$LogbookType = 'Deletion';
				$LogbookEvent = 'PhilHealth Row ' . $id .' has been removed.';
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
	public function remove_contri_Tax()
	{
		$id = $this->input->get('id');

		if (!isset($_GET['id'])) {
			redirect('tax_table');
		}
		else
		{
			$Removethis = $this->Model_Deletes->remove_contri_Tax($id);

			if ($Removethis) {
				$this->session->set_flashdata('prompts', array('success', 'Row Deleted!'));

				// LOGBOOK
				
				$LogbookCurrentTime = date('Y-m-d h:i:s A');
				$LogbookType = 'Deletion';
				$LogbookEvent = 'Tax Row ' . $id .' has been removed.';
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
}
