<div class="borrows index">
	<h2><?php echo __('Borrows'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('book_id'); ?></th>
			<th><?php echo $this->Paginator->sort('member_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('issue_date'); ?></th>
			<th><?php echo $this->Paginator->sort('due_date'); ?></th>
			<th><?php echo $this->Paginator->sort('return_date'); ?></th>
			<th><?php echo $this->Paginator->sort('comments'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($borrows as $borrow): ?>
	<tr>
		<td><?php echo h($borrow['Borrow']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($borrow['Book']['name'], array('controller' => 'books', 'action' => 'view', $borrow['Book']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($borrow['Member']['name'], array('controller' => 'members', 'action' => 'view', $borrow['Member']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($borrow['User']['id'], array('controller' => 'users', 'action' => 'view', $borrow['User']['id'])); ?>
		</td>
		<td><?php echo h($borrow['Borrow']['issue_date']); ?>&nbsp;</td>
		<td><?php echo h($borrow['Borrow']['due_date']); ?>&nbsp;</td>
		<td><?php echo h($borrow['Borrow']['return_date']); ?>&nbsp;</td>
		<td><?php echo h($borrow['Borrow']['comments']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $borrow['Borrow']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $borrow['Borrow']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $borrow['Borrow']['id']), array(), __('Are you sure you want to delete # %s?', $borrow['Borrow']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
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
		<li><?php echo $this->Html->link(__('New Borrow'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
