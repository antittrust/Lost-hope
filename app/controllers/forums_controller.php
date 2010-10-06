<?php
class ForumsController extends AppController {

	var $name = 'Forums';

    function beforeFilter(){
    	parent::beforeFilter();
    	$this->Auth->allow('index');
    }
    
	function index() {
		$this->set('title_for_layout', 'Lost-hope :: Forums :: Index');
		$this->Forum;
		$this->set('forums', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid forum', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('forum', $this->Forum->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Forum->create();
			if ($this->Forum->save($this->data)) {
				$this->Session->setFlash(__('The forum has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The forum could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid forum', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Forum->save($this->data)) {
				$this->Session->setFlash(__('The forum has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The forum could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Forum->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for forum', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Forum->delete($id)) {
			$this->Session->setFlash(__('Forum deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Forum was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>