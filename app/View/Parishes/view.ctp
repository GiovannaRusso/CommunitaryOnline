<div class="parishes view">
<h2><?php echo __('Parish'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($parish['Parish']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($parish['Parish']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($parish['Parish']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($parish['Parish']['code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo $this->Html->link($parish['City']['name'], array('controller' => 'cities', 'action' => 'view', $parish['City']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($parish['Parish']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($parish['Parish']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Parish'), array('action' => 'edit', $parish['Parish']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Parish'), array('action' => 'delete', $parish['Parish']['id']), null, __('Are you sure you want to delete # %s?', $parish['Parish']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Parishes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parish'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities'), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Beneficiaries'), array('controller' => 'beneficiaries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Beneficiary'), array('controller' => 'beneficiaries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Universities'), array('controller' => 'universities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New University'), array('controller' => 'universities', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Beneficiaries'); ?></h3>
	<?php if (!empty($parish['Beneficiary'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Location'); ?></th>
		<th><?php echo __('Parish Id'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Beneficiary Type Id'); ?></th>
		<th><?php echo __('Creator Id'); ?></th>
		<th><?php echo __('Contact Person Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($parish['Beneficiary'] as $beneficiary): ?>
		<tr>
			<td><?php echo $beneficiary['id']; ?></td>
			<td><?php echo $beneficiary['name']; ?></td>
			<td><?php echo $beneficiary['description']; ?></td>
			<td><?php echo $beneficiary['location']; ?></td>
			<td><?php echo $beneficiary['parish_id']; ?></td>
			<td><?php echo $beneficiary['phone']; ?></td>
			<td><?php echo $beneficiary['email']; ?></td>
			<td><?php echo $beneficiary['beneficiary_type_id']; ?></td>
			<td><?php echo $beneficiary['creator_id']; ?></td>
			<td><?php echo $beneficiary['contact_person_id']; ?></td>
			<td><?php echo $beneficiary['created']; ?></td>
			<td><?php echo $beneficiary['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'beneficiaries', 'action' => 'view', $beneficiary['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'beneficiaries', 'action' => 'edit', $beneficiary['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'beneficiaries', 'action' => 'delete', $beneficiary['id']), null, __('Are you sure you want to delete # %s?', $beneficiary['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Beneficiary'), array('controller' => 'beneficiaries', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Universities'); ?></h3>
	<?php if (!empty($parish['University'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Location'); ?></th>
		<th><?php echo __('Parish Id'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Fax'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('University Id'); ?></th>
		<th><?php echo __('Administrator Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($parish['University'] as $university): ?>
		<tr>
			<td><?php echo $university['id']; ?></td>
			<td><?php echo $university['name']; ?></td>
			<td><?php echo $university['description']; ?></td>
			<td><?php echo $university['location']; ?></td>
			<td><?php echo $university['parish_id']; ?></td>
			<td><?php echo $university['phone']; ?></td>
			<td><?php echo $university['fax']; ?></td>
			<td><?php echo $university['email']; ?></td>
			<td><?php echo $university['university_id']; ?></td>
			<td><?php echo $university['administrator_id']; ?></td>
			<td><?php echo $university['created']; ?></td>
			<td><?php echo $university['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'universities', 'action' => 'view', $university['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'universities', 'action' => 'edit', $university['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'universities', 'action' => 'delete', $university['id']), null, __('Are you sure you want to delete # %s?', $university['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New University'), array('controller' => 'universities', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
