<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Main extends CI_Controller {
	public function index(){

		$data['agenda'] = $this->model_utama->view_join('agenda','users','username','id_agenda','DESC',0,4);
		$data['detailgambar'] = $this->model_utama->view_where('sampulgambar',array('page' => 'home' ));
		
		$this->template->load(template().'/template',template().'/content',$data);
	}
}



