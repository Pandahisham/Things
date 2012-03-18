<<?php echo $tag; ?> class="<?php echo strtolower($schema); ?>" itemscope itemtype="http://schema.org/<?php echo $schema; ?>">

<?php foreach ($properties as $property): ?>

	<<?php echo $property->tag; ?> class="<?php echo $property->property; ?>" itemprop="<?php echo $property->property; ?>">
		<?php echo $property->value; ?>
	</<?php echo $property->tag; ?>>

<?php endforeach; ?>	

</<?php echo $tag; ?>>