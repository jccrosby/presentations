<div class="shots view">
<h2><?php  echo __('Shot'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($shot['Shot']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($shot['User']['id'], array('controller' => 'users', 'action' => 'view', $shot['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shot Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($shot['ShotType']['name'], array('controller' => 'shot_types', 'action' => 'view', $shot['ShotType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Count'); ?></dt>
		<dd>
			<?php echo h($shot['Shot']['count']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Shot'), array('action' => 'edit', $shot['Shot']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Shot'), array('action' => 'delete', $shot['Shot']['id']), null, __('Are you sure you want to delete # %s?', $shot['Shot']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Shots'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shot'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shot Types'), array('controller' => 'shot_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shot Type'), array('controller' => 'shot_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
