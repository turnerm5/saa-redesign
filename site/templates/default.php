<?php snippet('header') ?>
<?php snippet('menu') ?>

<section class="content">

 <div class="container">
 	<div class="row padding-top">
 		<div class="col-md-12">
 			
		<article>
			<h1><?php echo html($page->title()) ?></h1>
			<?php echo kirbytext($page->text()) ?>
		</article>

 		</div>
 	</div>
 </div>


</section>

<?php snippet('footer') ?>