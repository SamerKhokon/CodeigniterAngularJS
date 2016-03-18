<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	
	public function hideshow()
	{
		$this->load->view('hide_show');
	}
	
	public function table()
	{
		$this->load->view('table');
	}
	
	
	
	public function navigation()
	{
		$this->load->view('partials/navigation');
	}
	
	public function load_entry_modal()
	{
		$this->load->view('partials/entry_modal.html');
	}
	
	public function table_data() 
	{
		$this->load->model('Welcome_model');
		$data = $this->Welcome_model->getTable();
		header("Content-type: application/json");
		echo json_encode($data);
	}
	
	
	public function graphData()
	{
		$this->load->model('Welcome_model');
		header("Content-type: application/json");		
		$data = $this->Welcome_model->getGraphData();
		echo json_encode($data);
	}
	
	
	public function upang()
	{
		//echo $_FILES['file']['name'];		
		$path = getcwd(). "\\up\\";		
		if(move_uploaded_file($_FILES['file']['tmp_name'] , $path.$_FILES['file']['name']) ){
			echo "file uploaded successfully.";
		}else{
			echo "upload error!";
		}
	}
	
	public function albums() {
		$this->load->model('Welcome_model');
		header("Content-type: application/json");		
		$data = $this->Welcome_model->getAlbums();
		echo json_encode($data);
	}
	
}
