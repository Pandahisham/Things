<<?php echo $tag; ?> class="<?php echo strtolower($schema); ?>" itemscope itemtype="http://schema.org/<?php echo $schema; ?>">

	<p>
		<span itemprop="name"><?php echo $name; ?></span>
		<span itemprop="description"><?php echo $description; ?></span>
		<a href="<?php echo $url; ?>" title="<?php echo $name; ?> Website "><?php echo $url; ?></a>
		<img itemprop="image" src="<?php echo $image; ?>" alt="<?php echo $name; ?> Photo" />
	</p>

<?php foreach ($properties as $property): ?>
	<<?php echo $property->tag; ?> class="<?php echo $property->property; ?>" itemprop="<?php echo $property->property; ?>">
	<?php echo $property->value; ?></<?php echo $property->tag; ?>>
<?php endforeach; ?>	

</<?php echo $tag; ?>>