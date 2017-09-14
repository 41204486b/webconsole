<?php 
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\Table;


class LocalController extends AppController
{
	public function index()
	{	
		
		$local=$this->Local->get(1,['contain'=>[]]);
		$this->set('local',$local);

		if($this->request->is(['patch','post','put'])){
		$local=$this->Local->patchEntity($local,$this->request->getData());
		if($this->Local->save($local)){
			$this->Flash->success('Saved');
		}
		}
	}
}