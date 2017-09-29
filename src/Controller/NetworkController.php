<?php 
namespace App\Controller;

use App\Controller\AppController;

class NetworkController extends AppController
{
	public function index()
	{
		$network=$this->Network->get(1,['contain'=>[]]);
		$this->set('network',$network);

		if($this->request->is(['patch','post','put'])){
		$network=$this->Network->patchEntity($network,$this->request->getData());
		if($this->Network->save($network)){
		$this->Flash->message('Saved');
		}
		}
	}
}