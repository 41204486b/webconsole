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
		$editCamera = $this->Camera->get($id,['contain'=>[]]);
		if($this->request->is(['patch','post','put'])){
			$editCamera = $this->Camera->patchEntity($editCamera,$this->request->getData());
			if($this->Camera->save($editCamera)){
				$this->set('saved',true);
			}
			$this->Flash->error('The camera could not be saved. Please, try again');
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
				$this->Flash->success('The monitor has been saved');
				// return 'saved';
				$this->set('added', 'ok');
			}
			$this->Flash->error('Error.');
		}
		$this->set(compact('addCamera'));
		$this->set('_serialize',['addCamera']);
	}

	public function delete($id=null)
	{
		$this->request->allowMethod(['post', 'delete']);
        $camera = $this->Camera->get($id);
        if ($this->Camera->delete($camera)) {
            $this->Flash->success(__('The camera has been deleted.'));
        } else {
            $this->Flash->error(__('The camera could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
	}
}
