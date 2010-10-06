<?php
class NouvellesController extends AppController {
	var $name = 'Nouvelles';
	
    var $paginate = array(
    	'Nouvelle' => array(
        	'limit' => 5,        
        	'order' => array(
				'Nouvelle.created' => 'Desc'
        	)
    	)
    );
    
    var $uses = array('Nouvelle', 'Comment');
	
    function beforeFilter(){
    	parent::beforeFilter();
    	$this->Auth->allow('*');
    }
    
    function index(){
    	
    	$this->set('title_for_layout', 'Lost-hope :: Acceuil');
    	$news = $this->paginate('Nouvelle');
    	$this->set('news', $news);
    }
    
    function view($id){
    	$this->set('title_for_layout', 'Lost-hope :: Commentaire');
    	if (!empty($this->data)){
    		if ($this->Comment->validates($this->data)){
    			$this->Session->setFlash('Votre commentaire a bien été posté.');
    			$this->Comment->save($this->data);
    		}
    		else {
    			$this->Session->setFlash('Certain champ ne sont pas valides.');
    			$this->validateErrors($this->Comment);
    		}
    	}
    	$c = $this->Nouvelle->find('first',array(
    		'conditions' => array('Nouvelle.id'=>$id)
    	));
    	$this->set('comment', $c);
    }

}
?>