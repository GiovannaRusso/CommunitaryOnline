<div class="universities index">
	<h2><?php echo __('Universities'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('location'); ?></th>
			<th><?php echo $this->Paginator->sort('parish_id'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('fax'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('university_id'); ?></th>
			<th><?php echo $this->Paginator->sort('administrator_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($universities as $university): ?>
	<tr>
		<td><?php echo h($university['University']['id']); ?>&nbsp;</td>
		<td><?php echo h($university['University']['name']); ?>&nbsp;</td>
		<td><?php echo h($university['University']['description']); ?>&nbsp;</td>
		<td><?php echo h($university['University']['location']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($university['Parish']['name'], array('controller' => 'parishes', 'action' => 'view', $university['Parish']['id'])); ?>
		</td>
		<td><?php echo h($university['University']['phone']); ?>&nbsp;</td>
		<td><?php echo h($university['University']['fax']); ?>&nbsp;</td>
		<td><?php echo h($university['University']['email']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($university['University']['name'], array('controller' => 'universities', 'action' => 'view', $university['University']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($university['Administrator']['name'], array('controller' => 'users', 'action' => 'view', $university['Administrator']['id'])); ?>
		</td>
		<td><?php echo h($university['University']['created']); ?>&nbsp;</td>
		<td><?php echo h($university['University']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $university['University']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $university['University']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $university['University']['id']), null, __('Are you sure you want to delete # %s?', $university['University']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New University'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Parishes'), array('controller' => 'parishes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parish'), array('controller' => 'parishes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Universities'), array('controller' => 'universities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New University'), array('controller' => 'universities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Administrator'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Documents'), array('controller' => 'documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Document'), array('controller' => 'documents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Careers'), array('controller' => 'careers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Career'), array('controller' => 'careers', 'action' => 'add')); ?> </li>
	</ul>
</div>
