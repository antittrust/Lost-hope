<?php
class Nouvelle extends AppModel {
	var $name = 'Nouvelles';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'Comment' => array(
			'className' => 'Comment',
			'foreignKey' => 'nouvelle_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
}
?>