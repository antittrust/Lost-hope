<div class="cadre_haut"></div>
<?php echo $html->image('/app/webroot/css/images/folder_open.png',array('style'=> 'margin-left:17px;'));?>Lost-hope<br /> 
<?php echo  $html->image('/app/webroot/css/images/subforum.png',array('style'=> 'margin-left:25px;'));?>
<div class="cadre_haut"></div>
<div class="cadre_fond"><!-- CADRE -->
<table>
<?php foreach($forums as $f): ?>
  <tr>
    <th></th>
    <th><?php echo $f['Forum']['title']; ?></th>
    <th>sujet</th>
    <th>message</th>
    <th>dernier message</th>
  </tr>
  
  <?php foreach ($f['Category'] as $category): ?>
  
  <tr>
    <td><?php echo $html->image('/theme/img/message.gif'); ?></td>
    <td><?php echo $html->link($category['title'],array('controller'=>'categories','action'=>'view',$category['id'])); 
    		  echo '<br />'.$category['description'];?></td>
    <th><?php echo $category['thread_count'];?></th>
    <th>N/A</th>
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