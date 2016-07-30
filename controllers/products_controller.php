<?php
class ProductsController extends AppController {

	var $name = 'Products';
	var $helpers = array('Access');
	
	function beforeFilter(){ 
		parent::beforeFilter();
		$this->Auth->userModel = 'User'; 
		$this->Auth->allow(array('index','all'));	
    } 

	function index() {
		$this->Product->recursive = 0;
		$this->set('products', $this->paginate());
	}

	function view($slug = null) {
		if (!$slug) {
			$this->Session->setFlash(__('Invalid product', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('product', $this->Product->findBySlug($slug));
	}
	
	function admin_index() {
		$this->layout = 'admin_default';
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid product', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('product', $this->Product->read(null, $id));
	}

	function admin_add() {
		$this->layout ="admin_default";	
		if (!empty($this->data)) {
			$this->data ["Product"]['slug'] = preg_replace ('#[ -]+#','-', strtolower(trim($this->data ["Product"]['name'])));
		
			$this->Product->create();
			if ($this->Product->save($this->data)) {
				$this->Session->setFlash(__('The product has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product could not be saved. Please, try again.', true));
			}
		}
		$categories = $this->Product->Category->find('list',array('conditions' =>array('Category.parent_id' => 1)));
		$manufacturers = $this->Product->Manufacturer->find('list');
		$this->set(compact('categories', 'manufacturers'));
	}

	function admin_edit($id = null) {
		$this->layout ="admin_default";	
			
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid product', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			$this->data ["Product"]['slug'] = preg_replace ('#[ -]+#','-', strtolower(trim($this->data ["Product"]['name'])));
			if ($this->Product->save($this->data)) {
				$this->Session->setFlash(__('The product has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Product->read(null, $id);
		}
		$categories = $this->Product->Category->find('list',array('recursive' => -1,'conditions' =>array('Category.parent_id' => 1)));
		$manufacturers = $this->Product->Manufacturer->find('list');
		$this->set(compact('categories', 'manufacturers'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for product', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Product->delete($id)) {
			$this->Session->setFlash(__('Product deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Product was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	function all(){
		$products = $this->Product->find('all');
		echo json_encode($products);
		exit;
	}
}
