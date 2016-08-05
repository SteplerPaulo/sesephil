<?php
class BannersController extends AppController {

	var $name = 'Banners';
	var $helpers = array('Access');

	function admin_index() {
		$this->layout = 'admin_default';
		$this->Banner->recursive = 0;
		$this->set('banners', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid banner', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('banner', $this->Banner->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Banner->create();
			if ($this->Banner->save($this->data)) {
				$this->Session->setFlash(__('The banner has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The banner could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid banner', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Banner->save($this->data)) {
				$this->Session->setFlash(__('The banner has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The banner could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Banner->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for banner', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Banner->delete($id)) {
			$this->Session->setFlash(__('Banner deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Banner was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
