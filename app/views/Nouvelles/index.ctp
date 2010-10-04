<div class="news">
<?php e($paginator->numbers());?>
<?php foreach ($news as $n):?>
<fieldset>		
		<p>
		<?php e($n['Nouvelle']['title'])?><br />
		<?php e($n['Nouvelle']['created'])?>
		</p><br />
		<p>
		<?php e($html->image('/css/images/news.png',array('style' => 'float:left;')))?>
		<p>
		<?php e($n['Nouvelle']['content'])?>
		</p><br />
		<p>
		<?php 
			e($html->link('commentaire ( '.$n['Nouvelle']['comment_count'].')', array(
						'action' => 'view', $n['Nouvelle']['id']), array(
							'style' => 
								'float: right;
								text-decoration: none;'
					)
				)
			)
		?>
		</p>
</fieldset><br />
<?php endforeach;?>
</div>