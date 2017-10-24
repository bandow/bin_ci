<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Aubin
 * Date: 2017/10/12
 * Time: 10:08
 */
class About extends CI_Controller{

    public function index(){
        $this->load->view('header');
        $this->load->view('about/index');
        $this->load->view('footer');
    }
}