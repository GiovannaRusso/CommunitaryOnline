<div class="careersProjects view">
<h2><?php echo __('Careers Project'); ?></h2>
	<dl>
		<dt><?php echo __('Career'); ?></dt>
		<dd>
			<?php echo $this->Html->link($careersProject['Career']['name'], array('controller' => 'careers', 'action' => 'view', $careersProject['Career']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Project'); ?></dt>
		<dd>
			<?php echo $this->Html->link($careersProject['Project']['name'], array('controller' => 'projects', 'action' => 'view', $careersProject['Project']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Careers Project'), array('action' => 'edit', $careersProject['CareersProject']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Careers Project'), array('action' => 'delete', $careersProject['CareersProject']['id']), null, __('Are you sure you want to delete # %s?', $careersProject['CareersProject']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Careers Projects'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Careers Project'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Careers'), array('controller' => 'careers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Career'), array('controller' => 'careers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
