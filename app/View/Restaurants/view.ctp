<div class="restaurants view">
<h2><?php echo __('Restaurant'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($restaurant['Restaurant']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rest Name'); ?></dt>
		<dd>
			<?php echo h($restaurant['Restaurant']['rest_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rest Address1'); ?></dt>
		<dd>
			<?php echo h($restaurant['Restaurant']['rest_address1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rest Address2'); ?></dt>
		<dd>
			<?php echo h($restaurant['Restaurant']['rest_address2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rest Suburb'); ?></dt>
		<dd>
			<?php echo h($restaurant['Restaurant']['rest_suburb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rest State'); ?></dt>
		<dd>
			<?php echo h($restaurant['Restaurant']['rest_state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rest Postcode'); ?></dt>
		<dd>
			<?php echo h($restaurant['Restaurant']['rest_postcode']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Restaurant'), array('action' => 'edit', $restaurant['Restaurant']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Restaurant'), array('action' => 'delete', $restaurant['Restaurant']['id']), null, __('Are you sure you want to delete # %s?', $restaurant['Restaurant']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Restaurants'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Restaurant'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Menus'), array('controller' => 'menus', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Menu'), array('controller' => 'menus', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Menus'); ?></h3>
	<?php if (!empty($restaurant['Menu'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Restaurant Id'); ?></th>
		<th><?php echo __('Menu Desc'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($restaurant['Menu'] as $menu): ?>
		<tr>
			<td><?php echo $menu['id']; ?></td>
			<td><?php echo $menu['restaurant_id']; ?></td>
			<td><?php echo $menu['menu_desc']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'menus', 'action' => 'view', $menu['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'menus', 'action' => 'edit', $menu['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'menus', 'action' => 'delete', $menu['id']), null, __('Are you sure you want to delete # %s?', $menu['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Menu'), array('controller' => 'menus', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
