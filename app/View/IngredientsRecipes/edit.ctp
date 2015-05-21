<div class="ingredientsRecipes form">
<?php echo $this->Form->create('IngredientsRecipe'); ?>
	<fieldset>
		<legend><?php echo __('Edit Ingredients Recipe'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('ingredient_id');
		echo $this->Form->input('recipe_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('IngredientsRecipe.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('IngredientsRecipe.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Ingredients Recipes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Ingredients'), array('controller' => 'ingredients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ingredient'), array('controller' => 'ingredients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recipes'), array('controller' => 'recipes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recipe'), array('controller' => 'recipes', 'action' => 'add')); ?> </li>
	</ul>
</div>
