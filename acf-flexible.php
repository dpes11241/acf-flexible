<?php if( have_rows('content') ): ?>
    <?php while( have_rows('content') ): the_row(); ?>
        <?php if( get_row_layout() == 'columns_section' ):
           $columns = get_sub_field( 'columns' )
		?>
		<?php foreach($columns as $column): ?>
			<h3><?php echo $column['title']?></h3>
			<h4><?php echo $column['content']?></h4>
		<?php endforeach; ?>

        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>
