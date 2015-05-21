<div class="customers index">
	<h2><?php echo __('Customers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('cust_gname'); ?></th>
			<th><?php echo $this->Paginator->sort('cust_fname'); ?></th>
			<th><?php echo $this->Paginator->sort('cust_street'); ?></th>
			<th><?php echo $this->Paginator->sort('cust_suburb'); ?></th>
			<th><?php echo $this->Paginator->sort('cust_state'); ?></th>
			<th><?php echo $this->Paginator->sort('cust_postcode'); ?></th>
			<th><?php echo $this->Paginator->sort('cust_email'); ?></th>
			<th><?php echo $this->Paginator->sort('cust_phone'); ?></th>
			<th><?php echo $this->Paginator->sort('cust_mobile'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($customers as $customer): ?>
	<tr>
		<td><?php echo h($customer['Customer']['id']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['cust_gname']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['cust_fname']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['cust_street']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['cust_suburb']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['cust_state']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['cust_postcode']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['cust_email']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['cust_phone']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['cust_mobile']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $customer['Customer']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $customer['Customer']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $customer['Customer']['id']), null, __('Are you sure you want to delete # %s?', $customer['Customer']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Customer'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Ingredients'), array('controller' => 'ingredients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ingredient'), array('controller' => 'ingredients', 'action' => 'add')); ?> </li>
	</ul>
</div>
