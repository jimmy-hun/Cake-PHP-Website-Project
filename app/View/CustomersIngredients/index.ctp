<div class="customersIngredients index">
	<h2><?php echo __('Customers Ingredients'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('customer_id'); ?></th>
			<th><?php echo $this->Paginator->sort('ingredient_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($customersIngredients as $customersIngredient): ?>
	<tr>
		<td><?php echo h($customersIngredient['CustomersIngredient']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($customersIngredient['Customer']['id'], array('controller' => 'customers', 'action' => 'view', $customersIngredient['Customer']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($customersIngredient['Ingredient']['id'], array('controller' => 'ingredients', 'action' => 'view', $customersIngredient['Ingredient']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $customersIngredient['CustomersIngredient']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $customersIngredient['CustomersIngredient']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $customersIngredient['CustomersIngredient']['id']), null, __('Are you sure you want to delete # %s?', $customersIngredient['CustomersIngredient']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Customers Ingredient'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ingredients'), array('controller' => 'ingredients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ingredient'), array('controller' => 'ingredients', 'action' => 'add')); ?> </li>
	</ul>
</div>
