<?php
class Comment extends AppModel {
	var $name = 'Comment';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Nouvelle' => array(
			'className' => 'Nouvelle',
			'foreignKey' => 'nouvelle_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'counterCache' =>  true
		)
	);
	
	var $validate = array(
        'username' => array(
            'alphaNumeric' => array(
                'rule' => 'alphaNumeric',
                'message' => 'Pseudo invalide'
                ),
            'between' => array(
                'rule' => array('between', 3, 15),
                'message' => 'votre pseudo doit contenir entre 5 et 15 caractères'
           		),
        ),
    );
    
    function beforeSave(){
    	app::import('Sanitize');
    	$this->data['Comment']['content'] = Sanitize::html($this->data['Comment']['content']);
    	return true;
    }
	
}
?>