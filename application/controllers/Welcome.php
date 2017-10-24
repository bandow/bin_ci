<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->database();
		$sql="select * from bizactivity limit 10"; //获取10条数据
		//执行sql,返回资源
		$result=$this->db->query($sql);
		//获取数据为数组
		$data['result']=$result->result_array();
		//打印输出
		//var_dump($data);
		$this->load->view('header',$data);
		$this->load->view('index/index',$data);
		$this->load->view('footer',$data);
	}
}