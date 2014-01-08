<div class="beneficiaryTypes view">
<h2><?php echo __('Beneficiary Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($beneficiaryType['BeneficiaryType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($beneficiaryType['BeneficiaryType']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($beneficiaryType['BeneficiaryType']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($beneficiaryType['BeneficiaryType']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($beneficiaryType['BeneficiaryType']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Beneficiary Type'), array('action' => 'edit', $beneficiaryType['BeneficiaryType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Beneficiary Type'), array('action' => 'delete', $beneficiaryType['BeneficiaryType']['id']), null, __('Are you sure you want to delete # %s?', $beneficiaryType['BeneficiaryType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Beneficiary Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Beneficiary Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Beneficiaries'), array('controller' => 'beneficiaries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Beneficiary'), array('controller' => 'beneficiaries', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Beneficiaries'); ?></h3>
	<?php if (!empty($beneficiaryType['Beneficiary'])): ?>
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
	<?php foreach ($beneficiaryType['Beneficiary'] as $beneficiary): ?>
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
