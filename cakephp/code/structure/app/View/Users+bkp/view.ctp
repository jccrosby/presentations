<div class="users view">
<h2><?php  echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FirstName'); ?></dt>
		<dd>
			<?php echo h($user['User']['firstName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LastName'); ?></dt>
		<dd>
			<?php echo h($user['User']['lastName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EmailAddress'); ?></dt>
		<dd>
			<?php echo h($user['User']['emailAddress']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shots'), array('controller' => 'shots', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shot'), array('controller' => 'shots', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Shots'); ?></h3>
	<?php if (!empty($user['Shot'])): ?>
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
		foreach ($user['Shot'] as $shot): ?>
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
