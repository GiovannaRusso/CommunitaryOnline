<div class="universityUserTypes view">
<h2><?php echo __('University User Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($universityUserType['UniversityUserType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($universityUserType['UniversityUserType']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($universityUserType['UniversityUserType']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($universityUserType['UniversityUserType']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($universityUserType['UniversityUserType']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit University User Type'), array('action' => 'edit', $universityUserType['UniversityUserType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete University User Type'), array('action' => 'delete', $universityUserType['UniversityUserType']['id']), null, __('Are you sure you want to delete # %s?', $universityUserType['UniversityUserType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List University User Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New University User Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Universities Users'), array('controller' => 'universities_users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Universities User'), array('controller' => 'universities_users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Universities Users'); ?></h3>
	<?php if (!empty($universityUserType['UniversitiesUser'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('University Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('University User Type Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($universityUserType['UniversitiesUser'] as $universitiesUser): ?>
		<tr>
			<td><?php echo $universitiesUser['id']; ?></td>
			<td><?php echo $universitiesUser['university_id']; ?></td>
			<td><?php echo $universitiesUser['user_id']; ?></td>
			<td><?php echo $universitiesUser['university_user_type_id']; ?></td>
			<td><?php echo $universitiesUser['created']; ?></td>
			<td><?php echo $universitiesUser['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'universities_users', 'action' => 'view', $universitiesUser['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'universities_users', 'action' => 'edit', $universitiesUser['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'universities_users', 'action' => 'delete', $universitiesUser['id']), null, __('Are you sure you want to delete # %s?', $universitiesUser['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Universities User'), array('controller' => 'universities_users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
