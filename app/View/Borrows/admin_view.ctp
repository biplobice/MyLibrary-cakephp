<div class="borrows view">
<h2><?php echo __('Borrow'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($borrow['Borrow']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Book'); ?></dt>
		<dd>
			<?php echo $this->Html->link($borrow['Book']['name'], array('controller' => 'books', 'action' => 'view', $borrow['Book']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Member'); ?></dt>
		<dd>
			<?php echo $this->Html->link($borrow['Member']['name'], array('controller' => 'members', 'action' => 'view', $borrow['Member']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($borrow['User']['id'], array('controller' => 'users', 'action' => 'view', $borrow['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Issue Date'); ?></dt>
		<dd>
			<?php echo h($borrow['Borrow']['issue_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Due Date'); ?></dt>
		<dd>
			<?php echo h($borrow['Borrow']['due_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Return Date'); ?></dt>
		<dd>
			<?php echo h($borrow['Borrow']['return_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comments'); ?></dt>
		<dd>
			<?php echo h($borrow['Borrow']['comments']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Borrow'), array('action' => 'edit', $borrow['Borrow']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Borrow'), array('action' => 'delete', $borrow['Borrow']['id']), array(), __('Are you sure you want to delete # %s?', $borrow['Borrow']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Borrows'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Borrow'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
