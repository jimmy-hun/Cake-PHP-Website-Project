<div class="customers form">
<?php echo $this->Form->create('Customer'); ?>
	<fieldset>
		<legend><?php echo __('Add Customer'); ?></legend>
	<?php
		echo $this->Form->input('cust_gname');
		echo $this->Form->input('cust_fname');
		echo $this->Form->input('cust_street');
		echo $this->Form->input('cust_suburb');
		echo $this->Form->input('cust_state');
		echo $this->Form->input('cust_postcode');
		echo $this->Form->input('cust_email');
		echo $this->Form->input('cust_phone');
		echo $this->Form->input('cust_mobile');
		echo $this->Form->input('Ingredient');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Customers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Ingredients'), array('controller' => 'ingredients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ingredient'), array('controller' => 'ingredients', 'action' => 'add')); ?> </li>
	</ul>
</div>
