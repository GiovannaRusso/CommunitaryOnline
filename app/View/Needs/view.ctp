<div class="needs view">
<h2><?php echo __('Need'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($need['Need']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($need['Need']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($need['Need']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($need['Need']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($need['Need']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Need'), array('action' => 'edit', $need['Need']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Need'), array('action' => 'delete', $need['Need']['id']), null, __('Are you sure you want to delete # %s?', $need['Need']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Needs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Need'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Problems'), array('controller' => 'problems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Problem'), array('controller' => 'problems', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Problems'); ?></h3>
	<?php if (!empty($need['Problem'])): ?>
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
	<?php foreach ($need['Problem'] as $problem): ?>
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
