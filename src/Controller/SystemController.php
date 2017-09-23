<?php 
namespace App\Controller;

use App\Controller\AppController;

class SystemController extends AppController
{
	public function status()
	{
		$status = $this->System->get('1');
		$this->set(compact('status'));
    	$this->set('_serialize', ['status
    		']);	

  //   	if( $this->request->is('ajax') ) {
		// $data = $this->System->get('1');
		// $this->set(compact('status'));
  //   	$this->set('_serialize', ['status
  //   		']);
  //   }
    }
	
	public function dateTime()
	{

	}

	public function ajax()
	{
		if( $this->request->is('ajax') ) {
		$data = $this->System->get('1');
  		echo json_encode(['ramUsage'=>$data->ramUsage,'cpuUsage'=>$data->cpuUsage,'freeSpace'=>$data->freeSpace]);
  		die();
    }
	}
}