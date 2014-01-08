<div class="beneficiaries form">
<?php echo $this->Form->create('Beneficiary'); ?>
	<fieldset>
		<legend><?php echo __('Edit Beneficiary'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('location');
		echo $this->Form->input('parish_id');
		echo $this->Form->input('phone');
		echo $this->Form->input('email');
		echo $this->Form->input('beneficiary_type_id');
		echo $this->Form->input('creator_id');
		echo $this->Form->input('contact_person_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Beneficiary.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Beneficiary.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Beneficiaries'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Parishes'), array('controller' => 'parishes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parish'), array('controller' => 'parishes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Beneficiary Types'), array('controller' => 'beneficiary_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Beneficiary Type'), array('controller' => 'beneficiary_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Creator'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Problems'), array('controller' => 'problems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Problem'), array('controller' => 'problems', 'action' => 'add')); ?> </li>
	</ul>
</div>
