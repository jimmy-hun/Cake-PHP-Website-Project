<div class="customers view">
<h2><?php echo __('Customer'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cust Gname'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['cust_gname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cust Fname'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['cust_fname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cust Street'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['cust_street']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cust Suburb'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['cust_suburb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cust State'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['cust_state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cust Postcode'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['cust_postcode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cust Email'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['cust_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cust Phone'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['cust_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cust Mobile'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['cust_mobile']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Customer'), array('action' => 'edit', $customer['Customer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Customer'), array('action' => 'delete', $customer['Customer']['id']), null, __('Are you sure you want to delete # %s?', $customer['Customer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ingredients'), array('controller' => 'ingredients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ingredient'), array('controller' => 'ingredients', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Ingredients'); ?></h3>
	<?php if (!empty($customer['Ingredient'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Ing Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($customer['Ingredient'] as $ingredient): ?>
		<tr>
			<td><?php echo $ingredient['id']; ?></td>
			<td><?php echo $ingredient['ing_name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'ingredients', 'action' => 'view', $ingredient['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'ingredients', 'action' => 'edit', $ingredient['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'ingredients', 'action' => 'delete', $ingredient['id']), null, __('Are you sure you want to delete # %s?', $ingredient['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Ingredient'), array('controller' => 'ingredients', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
