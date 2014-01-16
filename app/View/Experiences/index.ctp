<div class="experiences index">
	<h2><?php echo __('Experiences'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('authors'); ?></th>
			<th><?php echo $this->Paginator->sort('filename'); ?></th>
			<th><?php echo $this->Paginator->sort('published'); ?></th>
			<th><?php echo $this->Paginator->sort('project_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($experiences as $experience): ?>
	<tr>
		<td><?php echo h($experience['Experience']['id']); ?>&nbsp;</td>
		<td><?php echo h($experience['Experience']['name']); ?>&nbsp;</td>
		<td><?php echo h($experience['Experience']['description']); ?>&nbsp;</td>
		<td><?php echo h($experience['Experience']['authors']); ?>&nbsp;</td>
		<td><?php echo h($experience['Experience']['filename']); ?>&nbsp;</td>
		<td><?php echo h($experience['Experience']['published']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($experience['Project']['name'], array('controller' => 'projects', 'action' => 'view', $experience['Project']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($experience['User']['name'], array('controller' => 'users', 'action' => 'view', $experience['User']['id'])); ?>
		</td>
		<td><?php echo h($experience['Experience']['created']); ?>&nbsp;</td>
		<td><?php echo h($experience['Experience']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $experience['Experience']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $experience['Experience']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $experience['Experience']['id']), null, __('Are you sure you want to delete # %s?', $experience['Experience']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Experience'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
