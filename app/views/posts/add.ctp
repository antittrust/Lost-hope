Penser a changer le user id pour l'id de session
<?php e($form->create('Post', array('url', array('controller' => 'thread', 'action' => 'view', $post['Thread']['id']))))?>
<?php e($form->input('user_id', array('type' => 'hidden', 'value' => $post['User']['id'])))?>
<?php e($form->input('thread_id', array('type' => 'hidden','value' => $post['Thread']['id']))) ?>
<?php e($form->input('content', array('label' =>'Message: <br />')))?>
<?php e($form->end('Envoyer'))?>