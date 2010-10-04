<p><?php e($html->image('/app/webroot/css/images/folder_open.png',array('style'=> 'margin-left:17px;')));?><?php e($html->link('Lost-hope',array('controller'=>'forums','action'=>'index')));?>::<?php e($html->link($thread['Categorie']['title'], array('controller' => 'categories', 'action' => 'view', $thread['Categorie']['id'])))?><br />
<?php e($html->image('/app/webroot/css/images/subforum.png',array('style'=> 'margin-left:25px;')));?><?php e($thread['Thread']['title'])?></p>


<?php e($html->image('/app/webroot/css/images/repondre.gif', array('url' => array('controller' => 'posts', 'action' => 'add', $thread['Thread']['id']))))?>
<table>
        <tr>
        	<th class="vt_auteur"><strong>Auteurs</strong></th>             
        	<th class="vt_mess"><strong>Messages</strong></th>       
        </tr>
        <tr>
        	<td><strong><?php e($thread['User']['username'])?></strong></td>
			<td>posté le: <?php e($thread['Thread']['created'])?></td>
		</tr>
		<tr>
		<td>avatar <br />
			Inscrit le: <?php e($thread['User']['created'])?> <br />
			Email: <?php e($thread['User']['mail'])?>	
		</td>
		<td><?php e($thread['Thread']['content'])?><hr />Signature</td>
		</tr>

<?php foreach ($post as $p):?>
        <tr>
        	<td><strong><?php e($p['User']['username'])?></strong></td>
			<td>posté le: <?php e($p['Post']['created'])?></td>
		</tr>
		<tr>
		<td>avatar <br />
			Inscrit le: <?php e($p['User']['created'])?> <br />
			Email: <?php e($p['User']['mail'])?>	
		</td>
		<td><?php e($p['Post']['content'])?><hr />Signature</td></tr>
<?php endforeach;?>
</table>