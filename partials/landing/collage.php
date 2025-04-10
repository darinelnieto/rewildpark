   
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
$collage_mvl = get_field('collage_movil');
?>
<section class="collage-partial-949325">
    <?php if($collage): ?>
        <div class="row d-none d-md-flex">
            <?php foreach($collage as $image): ?>
                <div class="col-6 col-md-<?= $image['column']; ?> image-contain">
                    <img src="<?= $image['image']['url']; ?>" alt="<?= $image['image']['title']; ?>" width="<?= $image['image']['width']; ?>" height="<?= $image['image']['height']; ?>">
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; if($collage_mvl): ?>
        <div class="row d-flex d-md-none">
            <?php foreach($collage_mvl as $image): ?>
                <div class="col-<?= $image['column']; ?> image-contain">
                    <img src="<?= $image['image']['url']; ?>" alt="<?= $image['image']['title']; ?>" width="<?= $image['image']['width']; ?>" height="<?= $image['image']['height']; ?>">
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>