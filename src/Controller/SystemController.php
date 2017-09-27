<?php 
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\Time;
use Cake\ORM\TableRegistry;

class SystemController extends AppController
{
	public function status()
	{
		$status = $this->System->get('1');
		$this->set(compact('status'));
    	$this->set('_serialize', ['status
    		']);	
    }
	
	public function dateTime()
	{
		$system= $this->System->get('1');
		 $system = $this->System->patchEntity($system, $this->request->getData());
		if($this->System->save($system)){
			
		} 

		$this->set(compact('system'));
		$this->set('_serialize',['system']);
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