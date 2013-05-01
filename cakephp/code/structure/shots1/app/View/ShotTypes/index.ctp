<div class="shotTypes index">
	<h2><?php echo __('Shot Types'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($shotTypes as $shotType): ?>
	<tr>
		<td><?php echo h($shotType['ShotType']['id']); ?>&nbsp;</td>
		<td><?php echo h($shotType['ShotType']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $shotType['ShotType']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $shotType['ShotType']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $shotType['ShotType']['id']), null, __('Are you sure you want to delete # %s?', $shotType['ShotType']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Shot Type'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Shots'), array('controller' => 'shots', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shot'), array('controller' => 'shots', 'action' => 'add')); ?> </li>
	</ul>
</div>
