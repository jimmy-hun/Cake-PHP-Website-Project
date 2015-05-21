<div class="ingredientsRecipes index">
	<h2><?php echo __('Ingredients Recipes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('ingredient_id'); ?></th>
			<th><?php echo $this->Paginator->sort('recipe_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ingredientsRecipes as $ingredientsRecipe): ?>
	<tr>
		<td><?php echo h($ingredientsRecipe['IngredientsRecipe']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($ingredientsRecipe['Ingredient']['id'], array('controller' => 'ingredients', 'action' => 'view', $ingredientsRecipe['Ingredient']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($ingredientsRecipe['Recipe']['id'], array('controller' => 'recipes', 'action' => 'view', $ingredientsRecipe['Recipe']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $ingredientsRecipe['IngredientsRecipe']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $ingredientsRecipe['IngredientsRecipe']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $ingredientsRecipe['IngredientsRecipe']['id']), null, __('Are you sure you want to delete # %s?', $ingredientsRecipe['IngredientsRecipe']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Ingredients Recipe'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Ingredients'), array('controller' => 'ingredients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ingredient'), array('controller' => 'ingredients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recipes'), array('controller' => 'recipes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recipe'), array('controller' => 'recipes', 'action' => 'add')); ?> </li>
	</ul>
</div>
