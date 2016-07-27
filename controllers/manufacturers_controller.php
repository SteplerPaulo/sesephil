<?php
class ManufacturersController extends AppController {

	var $name = 'Manufacturers';

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

	function admin_add() {
		if (!empty($this->data)) {
			$this->data['Manufacturer']['slug'] = preg_replace('#[ -\.]+#', '-', strtolower(trim($this->data['Manufacturer']['name'])));
			
			$this->Manufacturer->create();
			if ($this->Manufacturer->save($this->data)) {
				$this->Session->setFlash(__('The manufacturer has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The manufacturer could not be saved. Please, try again.', true));
			}
		}
	}
	
	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid manufacturer', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Manufacturer->save($this->data)) {
				$this->Session->setFlash(__('The manufacturer has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The manufacturer could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Manufacturer->read(null, $id);
		}
	}

	function admin_delete($id = null) {
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
		$manufacturers = $this->Manufacturer->find('all');
		
		foreach($manufacturers as $k=>$d){
			
			$data['Manufacturer'][$k]['id'] = $d['Manufacturer']['id'];
			$data['Manufacturer'][$k]['slug'] = preg_replace('#[ -\.]+#', '-', strtolower(trim($d['Manufacturer']['name'])));
		}
	
		if ($this->Manufacturer->saveAll($data['Manufacturer'])) {
			echo 'The manufacturer slug has been updated';
			exit;
		} else {
			echo 'The manufacturer slug could not be saved. Please, try again.';
			exit;
		}
	}
}
