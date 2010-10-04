<center><h1>Formulaire de contact</h1></center>
 
<?php echo $form->create('Contact', array('url' => '/contacts/index')); ?>
 
<fieldset>
	<legend>Vos coordonnées</legend>
	<?php echo $form->input('nom', array('label' => "Votre nom : <br />", 'size' => 80));?>
	<?php echo $form->input('prenom', array('label' => "Votre prénom : <br />", 'size' => 80));?>
	<?php echo $form->input('email', array('label' => "Votre adresse email : <br />", 'size' => 80));?>
</fieldset>
 
<fieldset>
	<legend>Votre message</legend>
	<?php echo $form->textarea('message', array('cols' => 60, 'rows' => 12)); ?> 
	<?php echo $form->error('message'); ?> 
</fieldset>
 
<?php echo $form->end("Envoyer le message"); ?>