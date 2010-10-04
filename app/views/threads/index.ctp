<div class="threads index">
	<h2><?php __('Threads');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th><?php echo $this->Paginator->sort('content');?></th>
			<th><?php echo $this->Paginator->sort('status');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('date');?></th>
			<th><?php echo $this->Paginator->sort('categorie_id');?></th>
			<th><?php echo $this->Paginator->sort('post_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($threads as $thread):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $thread['Thread']['id']; ?>&nbsp;</td>
		<td><?php echo $thread['Thread']['title']; ?>&nbsp;</td>
		<td><?php echo $thread['Thread']['content']; ?>&nbsp;</td>
		<td><?php echo $thread['Thread']['status']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($thread['User']['id'], array('controller' => 'users', 'action' => 'view', $thread['User']['id'])); ?>
		</td>
		<td><?php echo $thread['Thread']['date']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($thread['Categorie']['title'], array('controller' => 'categories', 'action' => 'view', $thread['Categorie']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($thread['Post']['title'], array('controller' => 'posts', 'action' => 'view', $thread['Post']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $thread['Thread']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $thread['Thread']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $thread['Thread']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $thread['Thread']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Thread', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories', true), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categorie', true), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts', true), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post', true), array('controller' => 'posts', 'action' => 'add')); ?> </li>
	</ul>
</div>