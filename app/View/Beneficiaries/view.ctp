<div class="beneficiaries view">
<h2><?php echo __('Beneficiary'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($beneficiary['Beneficiary']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($beneficiary['Beneficiary']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($beneficiary['Beneficiary']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo h($beneficiary['Beneficiary']['location']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parish'); ?></dt>
		<dd>
			<?php echo $this->Html->link($beneficiary['Parish']['name'], array('controller' => 'parishes', 'action' => 'view', $beneficiary['Parish']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($beneficiary['Beneficiary']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($beneficiary['Beneficiary']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Beneficiary Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($beneficiary['BeneficiaryType']['name'], array('controller' => 'beneficiary_types', 'action' => 'view', $beneficiary['BeneficiaryType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creator'); ?></dt>
		<dd>
			<?php echo $this->Html->link($beneficiary['Creator']['name'], array('controller' => 'users', 'action' => 'view', $beneficiary['Creator']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact Person'); ?></dt>
		<dd>
			<?php echo $this->Html->link($beneficiary['ContactPerson']['name'], array('controller' => 'users', 'action' => 'view', $beneficiary['ContactPerson']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($beneficiary['Beneficiary']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($beneficiary['Beneficiary']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Beneficiary'), array('action' => 'edit', $beneficiary['Beneficiary']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Beneficiary'), array('action' => 'delete', $beneficiary['Beneficiary']['id']), null, __('Are you sure you want to delete # %s?', $beneficiary['Beneficiary']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Beneficiaries'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Beneficiary'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Problems'); ?></h3>
	<?php if (!empty($beneficiary['Problem'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Current Status'); ?></th>
		<th><?php echo __('Creator Id'); ?></th>
		<th><?php echo __('Beneficiary Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($beneficiary['Problem'] as $problem): ?>
		<tr>
			<td><?php echo $problem['id']; ?></td>
			<td><?php echo $problem['name']; ?></td>
			<td><?php echo $problem['description']; ?></td>
			<td><?php echo $problem['current_status']; ?></td>
			<td><?php echo $problem['creator_id']; ?></td>
			<td><?php echo $problem['beneficiary_id']; ?></td>
			<td><?php echo $problem['created']; ?></td>
			<td><?php echo $problem['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'problems', 'action' => 'view', $problem['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'problems', 'action' => 'edit', $problem['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'problems', 'action' => 'delete', $problem['id']), null, __('Are you sure you want to delete # %s?', $problem['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Problem'), array('controller' => 'problems', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
