<?php 
namespace App\Controller;

use App\Controller\AppController;

class CameraController extends AppController
{
	public function index()
	{
		$camera = $this->Camera->find('all');
		$this->set('cameras',$camera);
	}

	public function edit($id=null)
	{
		
	}

	public function add()
	{
		$camera=$this->Camera->newEntity();
		if($this->request->is('post')){
			$camera = $this->Camera->patchEntity($camera,$this->request->getData());
			if($this->Camrera->save($camera)){
				$this->Flash->success('The monitor has been saved');
				return 'saved';
			}
			($this->Flash->error('Error.'));
		}
	}
}
