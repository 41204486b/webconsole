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

	public function edit()
	{
		
	}

	public function delete()
	{
		
	}
}
