<?php 
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\Time;

class CameraController extends AppController
{

	public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

	public function index()
	{
		$camera = $this->Camera->find('all');
		$this->set('cameras',$camera);
	}

	public function edit($id=null)
	{
		$editCamera = $this->Camera->get($id,['contain'=>[]]);
		if($this->request->is(['patch','post','put'])){
			$editCamera = $this->Camera->patchEntity($editCamera,$this->request->getData());
			if($this->Camera->save($editCamera)){
				$this->redirect(['controller'=>'camera','action'=>'index']);
			}
			else $this->Flash->error('The camera could not be saved. Please, try again');
		}
		$this->set(compact('editCamera'));
		$this->set('_serialize',['editCamera']);
	}

	public function add()
	{
		$addCamera=$this->Camera->newEntity();
		if($this->request->is('post')){
			$addCamera = $this->Camera->patchEntity($addCamera,$this->request->getData());
			if($this->Camera->save($addCamera)){
				$this->redirect(['controller'=>'camera','action'=>'index']);
			}
			else $this->Flash->error('Error.');
		}
		$this->set(compact('addCamera'));
		$this->set('_serialize',['addCamera']);
	}

	public function delete($id=null)
	{
		$this->request->allowMethod(['post', 'delete']);
        $camera = $this->Camera->get($id);
        if ($this->Camera->delete($camera)) {
           $this->redirect(['controller'=>'camera','action'=>'index']);
        } else {
            $this->Flash->error(__('The camera could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
	}

	public function simple() {
		if ($this->request->is(['ajax'])) {
			// Lets create current datetime
			$now = Time::now();
			$this->set('result', ['now' => $now]);
			$this->set('_serialize', ['result']);
		}
	}
}
