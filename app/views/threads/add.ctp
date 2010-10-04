<?php e(debug($categories))?>
<?php echo $this->Form->create('Thread', array('url' => array('controller' => 'threads', 'action' => 'view', $categories['id'])));?>
	<fieldset>
 	<legend>Nouveau topic</legend>
	<?php echo $this->Form->input('title', array('label'=>'Titre <br />'));?>
	<?php echo $this->Form->input('content', array('label'=>'Message <br />'));?>
	<?php echo $this->Form->input('categorie_id', array('type' => 'hidden', 'value' => $categories['id']));?>
	</fieldset>
<?php echo $this->Form->end('Poster');?>