<?php
class ProductsController extends AppController {

	var $name = 'Products';
	var $helpers = array('Access');
	
	function beforeFilter(){ 
		parent::beforeFilter();
		$this->Auth->userModel = 'User'; 
		$this->Auth->allow(array('index','all','view','by_filter'));	
    } 

	function index() {
		
	}

	function view($slug = null) {
		if (!$slug) {
			$this->Session->setFlash(__('Invalid product', true));
			$this->redirect(array('action' => 'index'));
		}
	}
	
	function admin_index() {
		if(!$this->Access->check('User','admin')) die ("HTTP ERROR 401 (UNAUTHORIZED) <br/><br/>Call system administrator for your account verification");
		
		$this->layout = 'admin_default';
	}

	function admin_view($id = null) {
		if(!$this->Access->check('User','admin')) die ("HTTP ERROR 401 (UNAUTHORIZED) <br/><br/>Call system administrator for your account verification");
		
		if (!$id) {
			$this->Session->setFlash(__('Invalid product', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('product', $this->Product->read(null, $id));
	}

	function admin_add() {
		if(!$this->Access->check('User','admin')) die ("HTTP ERROR 401 (UNAUTHORIZED) <br/><br/>Call system administrator for your account verification");
		
		
		$this->layout ="admin_default";	
		if (!empty($this->data)) {
	
			$string = str_replace(' ', '-', strtolower(trim($this->data['Product']['name']))); 
			$this->data['Product']['slug'] = preg_replace('/[^A-Za-z0-9\-]/', '-', $string);//SLUG
		
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

	function admin_edit($slug = null) {
		if(!$this->Access->check('User','admin')) die ("HTTP ERROR 401 (UNAUTHORIZED) <br/><br/>Call system administrator for your account verification");
		
		
		$this->layout ="admin_default";	
		if (!$slug && empty($this->data)) {
			$this->Session->setFlash(__('Invalid product', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			$string = str_replace(' ', '-', strtolower(trim($this->data['Product']['name']))); 
			$this->data['Product']['slug'] = preg_replace('/[^A-Za-z0-9\-]/', '-', $string);//SLUG
			if ($this->Product->save($this->data)) {
				$this->Session->setFlash(__('The product has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Product->findBySlug($slug);
		}
		$categories = $this->Product->Category->find('list',array('recursive' => -1,'conditions' =>array('Category.parent_id' => 1)));
		$manufacturers = $this->Product->Manufacturer->find('list');
		$this->set(compact('categories', 'manufacturers'));
	}

	function admin_delete($id = null) {
		if(!$this->Access->check('User','admin')) die ("HTTP ERROR 401 (UNAUTHORIZED) <br/><br/>Call system administrator for your account verification");
		
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
		$products = $this->Product->find('all',array('order' =>array('Product.modified DESC')));
		echo json_encode($products);
		exit;
	}

	function admin_slug(){
		$products = $this->Product->find('all');
		
		foreach($products as $k=>$d){
			$data['Product'][$k]['id'] = $d['Product']['id'];//ID
			$string = str_replace(' ', '-', strtolower(trim($d['Product']['name']))); 
			$data['Product'][$k]['slug'] = preg_replace('/[^A-Za-z0-9\-]/', '-', $string);//SLUG
		}
	
		if ($this->Product->saveAll($data['Product'])) {
			echo 'The product slug has been updated';
			exit;
		} else {
			echo 'The product slug could not be saved. Please, try again.';
			exit;
		}
	}

	function by_filter($slug = null){
		$result = $this->Product->find('first',array('recursive'=>3,'conditions'=>array('Product.slug'=>$slug)));
		echo json_encode($result);
		exit;
	}
	
	
}
