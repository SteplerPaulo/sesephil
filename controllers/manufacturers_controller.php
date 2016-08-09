<?php
class ManufacturersController extends AppController {

	var $name = 'Manufacturers';
	var $helpers = array('Access');

	function index() {
		$this->Manufacturer->recursive = 0;
		$this->set('manufacturers', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid manufacturer', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('manufacturer', $this->Manufacturer->read(null, $id));
	}

	function admin_index() {
		if(!$this->Access->check('User','admin')) die ("HTTP ERROR 401 (UNAUTHORIZED) <br/><br/>Call system administrator for your account verification");
		$this->layout = 'admin_default';
	}
	
	function admin_add() {
		if(!$this->Access->check('User','admin')) die ("HTTP ERROR 401 (UNAUTHORIZED) <br/><br/>Call system administrator for your account verification");
		$this->layout = 'admin_default';
		if (!empty($this->data)) {
			$string = str_replace(' ', '-', strtolower(trim($this->data['Manufacturer']['name']))); 
			$this->data['Manufacturer']['slug'] = preg_replace('/[^A-Za-z0-9\-]/', '-', $string);
			
			$this->Manufacturer->create();
			if ($this->Manufacturer->save($this->data)) {
				$this->Session->setFlash(__('The manufacturer has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The manufacturer could not be saved. Please, try again.', true));
			}
		}
	}
	
	function admin_edit($slug = null) {
		if(!$this->Access->check('User','admin')) die ("HTTP ERROR 401 (UNAUTHORIZED) <br/><br/>Call system administrator for your account verification");
		$this->layout = 'admin_default';
		
		if (!$slug && empty($this->data)) {
			$this->Session->setFlash(__('Invalid manufacturer', true));
			$this->redirect(array('action' => 'index'));
		}
		
		if (!empty($this->data)) {
			$string = str_replace(' ', '-', strtolower(trim($this->data['Manufacturer']['name']))); 
			$this->data['Manufacturer']['slug'] = preg_replace('/[^A-Za-z0-9\-]/', '-', $string);
		
			if ($this->Manufacturer->save($this->data)) {
				$this->Session->setFlash(__('Manufacturer has been updated', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Manufacturer could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Manufacturer->findBySlug($slug);
		}
	}

	function admin_delete($id = null) {
		if(!$this->Access->check('User','admin')) die ("HTTP ERROR 401 (UNAUTHORIZED) <br/><br/>Call system administrator for your account verification");
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for manufacturer', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Manufacturer->delete($id)) {
			$this->Session->setFlash(__('Manufacturer deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Manufacturer was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	function admin_slug(){
		if(!$this->Access->check('User','admin')) die ("HTTP ERROR 401 (UNAUTHORIZED) <br/><br/>Call system administrator for your account verification");
		
		$manufacturers = $this->Manufacturer->find('all');
		foreach($manufacturers as $k=>$d){
			
			$data['Manufacturer'][$k]['id'] = $d['Manufacturer']['id'];
			
			$string = str_replace(' ', '-', strtolower(trim($d['Manufacturer']['name']))); 
			$data['Manufacturer'][$k]['slug'] = preg_replace('/[^A-Za-z0-9\-]/', '-', $string);
		}
	
		if ($this->Manufacturer->saveAll($data['Manufacturer'])) {
			echo 'The manufacturer slug has been updated';
			exit;
		} else {
			echo 'The manufacturer slug could not be saved. Please, try again.';
			exit;
		}
	}

	function all(){
		$manufacturers = $this->Manufacturer->find('all');
		echo json_encode($manufacturers);
		exit;
		
	}
}
