<div class="news">
<fieldset>		
		<p>
		<?php e($comment['Nouvelle']['title'])?><br />
		<?php e($comment['Nouvelle']['created'])?>
		</p><br />
		<p>
		<?php e($html->image('/css/images/news.png',array('style' => 'float:left;')))?>
		<p>
		<?php e($comment['Nouvelle']['content'])?>
		</p>
</fieldset>


		<?php foreach ($comment['Comment'] as $c):?>
		<strong>
		<?php e($c['username']);?>
		</strong>
		<p>
		<?php e($c['content']);?>
		</p>
		<?php endforeach;?>

<?php //formulaire ?>

<?php e($form->create('Comment', array('url' => array('controller' => 'nouvelles', 'action' => 'view', $comment['Nouvelle']['id'])))) ?>
<?php e($form->input('username', array('label' => 'Pseudo: <br />'))) ?><br />
<?php e($form->input('content', array('label' => 'Message: <br />'))) ?><br />
<?php e($form->input('nouvelle_id', array('type' => 'hidden','value' => $comment['Nouvelle']['id']))) ?>
<?php e($form->end('Envoyer')) ?>
</div>