<div class="ingredientsRecipes view">
<h2><?php echo __('Ingredients Recipe'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($ingredientsRecipe['IngredientsRecipe']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ingredient'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ingredientsRecipe['Ingredient']['id'], array('controller' => 'ingredients', 'action' => 'view', $ingredientsRecipe['Ingredient']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Recipe'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ingredientsRecipe['Recipe']['id'], array('controller' => 'recipes', 'action' => 'view', $ingredientsRecipe['Recipe']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ingredients Recipe'), array('action' => 'edit', $ingredientsRecipe['IngredientsRecipe']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ingredients Recipe'), array('action' => 'delete', $ingredientsRecipe['IngredientsRecipe']['id']), null, __('Are you sure you want to delete # %s?', $ingredientsRecipe['IngredientsRecipe']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ingredients Recipes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ingredients Recipe'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ingredients'), array('controller' => 'ingredients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ingredient'), array('controller' => 'ingredients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recipes'), array('controller' => 'recipes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recipe'), array('controller' => 'recipes', 'action' => 'add')); ?> </li>
	</ul>
</div>
