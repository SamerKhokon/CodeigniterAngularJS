<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_model extends CI_Model 
{
	public function __construct()
	{
			parent::__construct();
	}
	
	
	public function getAlbums() {
		$data = array(
			array("id"=>1,"name"=> "C++") ,
			array("id"=>2,"name"=> "JAVA") ,
			array("id"=>3,"name"=> "C#" ) ,
			array("id"=>4,"name"=> "Python") ,
			array("id"=>5,"name"=> "PHP") 
		);		
		return $data;
	}
	
	
	public function getGraphData() 
	{
		$data = array(10, 15, 12, 8, 7);
		return $data;
	}
	
	
	public function getTable() 
	{
		$data = array(
			array("id"=>1,"server_ip"=>"127.0.0.1","server_type"=> "FTP","user_name"=>"khokon","pass_word"=>"pass@1234") 
		);
		return $data;
	}
	
}
?>		