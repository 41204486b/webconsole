<?php 
namespace App\Controller;

use App\Controller\AppController;

class SystemController extends AppController
{
	public function statusStorage()
	{
		$status = $this->System->get('1');
		$this->set(compact('status'));
    	$this->set('_serialize', ['status
    		']);	
    }
	
	public function dateTime()
	{

	}

	public function ajax()
	{
		if( $this->request->is('ajax') ) {
		$data = $this->System->get('1');
		//$this->set(compact('data'));
  		//$this->set('_serialize', ['data']);
  		$this->set('data','data');
  		//echo $data;
  		//die();
    }
	}
}