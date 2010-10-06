<?php
class ThreadsController extends AppController {

	var $name = 'Threads';
	var $helpers = array('Markitup'); 

    function beforeFilter(){
    	parent::beforeFilter();
    	$this->Auth->allow('index', 'view');
    }
    
	function index() {
		//$this->Thread->recursive = 0;
		//$this->set('threads', $this->paginate());
		$this->redirect(array('controller'=>'forums','action' => 'index'));
	}  

	function view($id) {
		$c = $this->Thread->find('first',array(
    		'conditions' => array('thread.id'=>$id)
    	));
    	$this->set('thread', $c);
    	$d = $this->Thread->Post->find('all', array(
    		'conditions' => array('thread.id'=>$id)
    	));
    	$this->set('post', $d);
	}

	function add() {

    }

	function edit($id = null) {
		
	}

	function delete($id = null) {
		
	}
}
?>