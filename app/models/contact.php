<?php
class Contact extends AppModel {
 
	var $name = 'Contact';
 
	var $useTable = false;
 
	var $_schema = array(
		'prenom' => array(
			'type' => 'string',
			'length' => 30
		),
		'nom' => array(
			'type' => 'string',
			'length' => 30
		),
		'email' => array(
			'type' => 'string',
			'length' => 50
		),
		'message' => array(
			'type' => 'text'
		)
	);
 

	var $validate = array(
		'nom' => array(
			'rule' => 'notEmpty',
			'required' => true,
			'allowEmpty' => false,
			'message' => "Votre nom doit être renseigné."
		),
		'prenom' => array(
			'rule' => 'notEmpty',
			'required' => true,
			'allowEmpty' => false,
			'message' => "Votre prénom doit être renseigné."
		),
		'email' => array(
			'rule' => 'email',
			'required' => true,
			'allowEmpty' => false,
			'message' => "Vous devez saisir une adresse email valide."
		),
		'message' => array(
			'rule' => 'notEmpty',
			'required' => true,
			'allowEmpty' => false,
			'message' => "Vous devez saisir un message."
		)
	);
}
?>