<div class="cadre_haut"></div>
<?php foreach($cat as $c): ?>

<p><?php echo $html->image('/app/webroot/css/images/folder_open.png',array('style'=> 'margin-left:17px;'));?><?php echo $html->link('Lost-hope',array('controller'=>'forums','action'=>'index'));?><br /> 
<?php echo  $html->image('/app/webroot/css/images/subforum.png',array('style'=> 'margin-left:25px;'));?><?php echo $c['Category']['title']?></p>

<div class="cadre_haut"></div>
<div class="cadre_fond"><!-- CADRE -->

<?php echo $html->image('/app/webroot/css/images/nouveau.gif', array('alt' => 'Nouveau', 'url' => array('controller' => 'threads', 'action' => 'add')));?>

<table>

  <tr>
    <th></th>
    <th><?php echo $c['Category']['title']; ?></th>
    <th>message</th>
    <th>dernier message</th>
  </tr>
  
  <?php foreach ($c['Thread'] as $thread): ?>
  
  <tr>
    <td><?php echo $html->image('/app/webroot/css/images/no_new.gif'); ?></td>
    <td><?php echo $html->link($thread['title'],array('controller'=>'threads','action'=>'view',$thread['id']));?></td>
    <th><?php echo $thread['post_count']?></th>
    <th>N/A</th>
  </tr>
  <?php endforeach; ?>
<?php endforeach;?>
</table>
</div>
<div class="cadre_bas">
</div><!-- FIN CADRE --> 

<div class="cadre_fond"><!-- CADRE -->	
<div style="text-align: center"><img src="images/download.png" alt=""/><br />
who's online
</div>
</div>
<div class="cadre_bas"></div><!-- FIN CADRE -->  