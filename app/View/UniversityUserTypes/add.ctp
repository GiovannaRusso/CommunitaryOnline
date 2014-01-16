<div class="universityUserTypes form">
<?php echo $this->Form->create('UniversityUserType'); ?>
	<fieldset>
		<legend><?php echo __('Add University User Type'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List University User Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Universities Users'), array('controller' => 'universities_users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Universities User'), array('controller' => 'universities_users', 'action' => 'add')); ?> </li>
	</ul>
</div>
