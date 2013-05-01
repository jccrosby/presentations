<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('firstName');
		echo $this->Form->input('lastName');
		echo $this->Form->input('emailAddress');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Shots'), array('controller' => 'shots', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shot'), array('controller' => 'shots', 'action' => 'add')); ?> </li>
	</ul>
</div>
