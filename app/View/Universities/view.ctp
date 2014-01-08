<div class="universities view">
<h2><?php echo __('University'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($university['University']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($university['University']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($university['University']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo h($university['University']['location']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parish'); ?></dt>
		<dd>
			<?php echo $this->Html->link($university['Parish']['name'], array('controller' => 'parishes', 'action' => 'view', $university['Parish']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($university['University']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fax'); ?></dt>
		<dd>
			<?php echo h($university['University']['fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($university['University']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('University'); ?></dt>
		<dd>
			<?php echo $this->Html->link($university['University']['name'], array('controller' => 'universities', 'action' => 'view', $university['University']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Administrator'); ?></dt>
		<dd>
			<?php echo $this->Html->link($university['Administrator']['name'], array('controller' => 'users', 'action' => 'view', $university['Administrator']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($university['University']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($university['University']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit University'), array('action' => 'edit', $university['University']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete University'), array('action' => 'delete', $university['University']['id']), null, __('Are you sure you want to delete # %s?', $university['University']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Universities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New University'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Documents'); ?></h3>
	<?php if (!empty($university['Document'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Filename'); ?></th>
		<th><?php echo __('University Id'); ?></th>
		<th><?php echo __('Document Type Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($university['Document'] as $document): ?>
		<tr>
			<td><?php echo $document['id']; ?></td>
			<td><?php echo $document['name']; ?></td>
			<td><?php echo $document['description']; ?></td>
			<td><?php echo $document['filename']; ?></td>
			<td><?php echo $document['university_id']; ?></td>
			<td><?php echo $document['document_type_id']; ?></td>
			<td><?php echo $document['created']; ?></td>
			<td><?php echo $document['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'documents', 'action' => 'view', $document['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'documents', 'action' => 'edit', $document['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'documents', 'action' => 'delete', $document['id']), null, __('Are you sure you want to delete # %s?', $document['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Document'), array('controller' => 'documents', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Projects'); ?></h3>
	<?php if (!empty($university['Project'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('University Id'); ?></th>
		<th><?php echo __('Max Students'); ?></th>
		<th><?php echo __('Min Students'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Creator Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($university['Project'] as $project): ?>
		<tr>
			<td><?php echo $project['id']; ?></td>
			<td><?php echo $project['name']; ?></td>
			<td><?php echo $project['description']; ?></td>
			<td><?php echo $project['university_id']; ?></td>
			<td><?php echo $project['max_students']; ?></td>
			<td><?php echo $project['min_students']; ?></td>
			<td><?php echo $project['status']; ?></td>
			<td><?php echo $project['creator_id']; ?></td>
			<td><?php echo $project['created']; ?></td>
			<td><?php echo $project['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'projects', 'action' => 'view', $project['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'projects', 'action' => 'edit', $project['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'projects', 'action' => 'delete', $project['id']), null, __('Are you sure you want to delete # %s?', $project['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Universities'); ?></h3>
	<?php if (!empty($university['University'])): ?>
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
	<?php foreach ($university['University'] as $university): ?>
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
<div class="related">
	<h3><?php echo __('Related Careers'); ?></h3>
	<?php if (!empty($university['Career'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($university['Career'] as $career): ?>
		<tr>
			<td><?php echo $career['id']; ?></td>
			<td><?php echo $career['name']; ?></td>
			<td><?php echo $career['description']; ?></td>
			<td><?php echo $career['created']; ?></td>
			<td><?php echo $career['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'careers', 'action' => 'view', $career['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'careers', 'action' => 'edit', $career['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'careers', 'action' => 'delete', $career['id']), null, __('Are you sure you want to delete # %s?', $career['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Career'), array('controller' => 'careers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($university['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Lastname'); ?></th>
		<th><?php echo __('Identification Number'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Hashed Password'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Profession'); ?></th>
		<th><?php echo __('Location'); ?></th>
		<th><?php echo __('Is Admin'); ?></th>
		<th><?php echo __('Is Active'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($university['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['name']; ?></td>
			<td><?php echo $user['lastname']; ?></td>
			<td><?php echo $user['identification_number']; ?></td>
			<td><?php echo $user['email']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['hashed_password']; ?></td>
			<td><?php echo $user['phone']; ?></td>
			<td><?php echo $user['profession']; ?></td>
			<td><?php echo $user['location']; ?></td>
			<td><?php echo $user['is_admin']; ?></td>
			<td><?php echo $user['is_active']; ?></td>
			<td><?php echo $user['created']; ?></td>
			<td><?php echo $user['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), null, __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
