<div class="shots form">
<?php echo $this->Form->create('Shot'); ?>
	<fieldset>
		<legend><?php echo __('Edit Shot'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('shot_type_id');
		echo $this->Form->input('count');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Shot.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Shot.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Shots'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shot Types'), array('controller' => 'shot_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shot Type'), array('controller' => 'shot_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
