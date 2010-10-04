<?php
class Category extends AppModel {
	var $name = 'Category';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Forum' => array(
			'className' => 'Forum',
			'foreignKey' => 'forum_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	var $hasMany = array(
		'Thread' => array(
			'className' => 'Thread',
			'foreignKey' => 'categorie_id',
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