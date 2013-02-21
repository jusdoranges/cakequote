<div class="quotes index">
	<h2><?php echo __('Quotes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			
			<!-- <th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('body'); ?></th>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th> 
			<th class="actions"><?php echo __('Actions'); ?></th>-->
	</tr>
	<?php foreach ($quotes as $quote): ?>
	<tr class="quotes_background">

		<td class="quotes title_quotes"><?php echo h($quote['Quote']['title']); ?>&nbsp;</td>
		<td class="quotes"><?php echo h($quote['Quote']['body']); ?>&nbsp;</td>
		
		<td class="quotes_users">#<?php echo h($quote['Quote']['id']); ?>&nbsp;</td>
		<td class="quotes_users">
			By <?php echo $this->Html->link($quote['User']['username'], array('controller' => 'users', 'action' => 'view', $quote['User']['id'])); ?>
		</td>
		<td class="quotes_users">Le <?php echo h($quote['Quote']['created']); ?>&nbsp;</td>
		
		<!-- <td><?php echo h($quote['Quote']['updated']); ?>&nbsp;</td> -->
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $quote['Quote']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $quote['Quote']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $quote['Quote']['id']), null, __('Are you sure you want to delete # %s?', $quote['Quote']['id'])); ?>
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
	<h3><?php echo __('Pas encore inscrit ?'); ?></h3>
	
	
<ul>
	<li class="log"><?php echo $this->Html->link(__('Sign up'), array('controller' => 'users', 'action' => 'add')); ?></li>
	
	<h3><?php echo __('LogIn'); ?></h3>
	
	<li class="log"><?php echo $this->Html->link(__('Connect'), array('controller' => 'users', 'action' => 'login')); ?> </li>
	<li class="log"><?php echo $this->Html->link(__('Disconnect'), array('controller' => 'users', 'action' => 'logout')); ?> </li>
</ul>
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Quote'), array('action' => 'add')); ?></li>
	</ul>
</div>
