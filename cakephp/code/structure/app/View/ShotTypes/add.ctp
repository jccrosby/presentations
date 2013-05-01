<div class="shotTypes form">
<?php echo $this->Form->create('ShotType'); ?>
	<fieldset>
		<legend><?php echo __('Add Shot Type'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Shot Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Shots'), array('controller' => 'shots', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shot'), array('controller' => 'shots', 'action' => 'add')); ?> </li>
	</ul>
</div>
