   
<?php
/**
 * 
 * Partial Name: collage
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$collage = get_field('collage');
if($collage):
?>
<section class="collage-partial-949325">
    <div class="row">
        <?php foreach($collage as $image): ?>
            <div class="col-6 col-md-<?= $image['column']; ?>">
                <img src="<?= $image['image']['url']; ?>" alt="<?= $image['image']['title']; ?>" width="<?= $image['image']['width']; ?>" height="<?= $image['image']['height']; ?>">
            </div>
        <?php endforeach; ?>
    </div>
</section>
<?php endif; ?>