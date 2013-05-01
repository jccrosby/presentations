<div class="shotTypes view">
<h2><?php  echo __('Shot Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($shotType['ShotType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($shotType['ShotType']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Shot Type'), array('action' => 'edit', $shotType['ShotType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Shot Type'), array('action' => 'delete', $shotType['ShotType']['id']), null, __('Are you sure you want to delete # %s?', $shotType['ShotType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Shot Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shot Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shots'), array('controller' => 'shots', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shot'), array('controller' => 'shots', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Shots'); ?></h3>
	<?php if (!empty($shotType['Shot'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Shot Type Id'); ?></th>
		<th><?php echo __('Count'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($shotType['Shot'] as $shot): ?>
		<tr>
			<td><?php echo $shot['id']; ?></td>
			<td><?php echo $shot['user_id']; ?></td>
			<td><?php echo $shot['shot_type_id']; ?></td>
			<td><?php echo $shot['count']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'shots', 'action' => 'view', $shot['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'shots', 'action' => 'edit', $shot['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'shots', 'action' => 'delete', $shot['id']), null, __('Are you sure you want to delete # %s?', $shot['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Shot'), array('controller' => 'shots', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
