   
<?php
/**
 * 
 * Partial Name: gallery-fater-form
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$collage = get_field('collage_after_form');
$collage_mv = get_field('collage_after_form_movil');
$key = 0;
?>
<section class="gallery-fater-form-partial-e0f649">
    <div class="row">
        <?php if($collage): foreach($collage as $image): $key++; ?>
            <div class="d-none d-md-block item col-<?php if($key !== 7){ echo '6'; }else{ echo '12'; } ?> col-md-<?= $image['column']; ?>">
                <img src="<?= $image['image']['url']; ?>" alt="<?= $image['image']['title']; ?>" width="<?= $image['image']['width']; ?>" height="<?= $image['image']['height']; ?>">
            </div>
        <?php endforeach; endif;
        if($collage_mv): foreach($collage_mv as $image): ?>
            <div class="d-block d-md-none item col-<?= $image['column']; ?>">
                <img src="<?= $image['image']['url']; ?>" alt="<?= $image['image']['title']; ?>" width="<?= $image['image']['width']; ?>" height="<?= $image['image']['height']; ?>">
            </div>
        <?php endforeach; endif; ?>
    </div>
</section>