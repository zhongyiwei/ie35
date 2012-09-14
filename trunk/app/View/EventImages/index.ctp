<div class="eventImages index">
	<h2><?php echo __('Event Images'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('event_id'); ?></th>
			<th><?php echo $this->Paginator->sort('even_image_name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($eventImages as $eventImage): ?>
	<tr>
		<td><?php echo h($eventImage['EventImage']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($eventImage['Event']['id'], array('controller' => 'events', 'action' => 'view', $eventImage['Event']['id'])); ?>
		</td>
		<td><?php echo h($eventImage['EventImage']['even_image_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $eventImage['EventImage']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $eventImage['EventImage']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $eventImage['EventImage']['id']), null, __('Are you sure you want to delete # %s?', $eventImage['EventImage']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Event Image'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>