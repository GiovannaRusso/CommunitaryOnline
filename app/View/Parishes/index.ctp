<div class="parishes index">
	<h2><?php echo __('Parishes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('code'); ?></th>
			<th><?php echo $this->Paginator->sort('city_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($parishes as $parish): ?>
	<tr>
		<td><?php echo h($parish['Parish']['id']); ?>&nbsp;</td>
		<td><?php echo h($parish['Parish']['name']); ?>&nbsp;</td>
		<td><?php echo h($parish['Parish']['description']); ?>&nbsp;</td>
		<td><?php echo h($parish['Parish']['code']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($parish['City']['name'], array('controller' => 'cities', 'action' => 'view', $parish['City']['id'])); ?>
		</td>
		<td><?php echo h($parish['Parish']['created']); ?>&nbsp;</td>
		<td><?php echo h($parish['Parish']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $parish['Parish']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $parish['Parish']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $parish['Parish']['id']), null, __('Are you sure you want to delete # %s?', $parish['Parish']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Parish'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Cities'), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Beneficiaries'), array('controller' => 'beneficiaries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Beneficiary'), array('controller' => 'beneficiaries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Universities'), array('controller' => 'universities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New University'), array('controller' => 'universities', 'action' => 'add')); ?> </li>
	</ul>
</div>
