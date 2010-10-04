<?php
class Forum extends AppModel {
	var $name = 'Forum';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Category' => array(
			'className' => 'Category',
			'foreignKey' => 'forum_id',
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