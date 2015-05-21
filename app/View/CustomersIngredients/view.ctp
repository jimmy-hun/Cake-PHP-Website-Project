<div class="customersIngredients view">
<h2><?php echo __('Customers Ingredient'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($customersIngredient['CustomersIngredient']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($customersIngredient['Customer']['id'], array('controller' => 'customers', 'action' => 'view', $customersIngredient['Customer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ingredient'); ?></dt>
		<dd>
			<?php echo $this->Html->link($customersIngredient['Ingredient']['id'], array('controller' => 'ingredients', 'action' => 'view', $customersIngredient['Ingredient']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Customers Ingredient'), array('action' => 'edit', $customersIngredient['CustomersIngredient']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Customers Ingredient'), array('action' => 'delete', $customersIngredient['CustomersIngredient']['id']), null, __('Are you sure you want to delete # %s?', $customersIngredient['CustomersIngredient']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers Ingredients'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customers Ingredient'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ingredients'), array('controller' => 'ingredients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ingredient'), array('controller' => 'ingredients', 'action' => 'add')); ?> </li>
	</ul>
</div>
