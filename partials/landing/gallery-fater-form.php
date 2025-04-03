   
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
if($collage):
    $key = 0;
?>
<section class="gallery-fater-form-partial-e0f649">
    <div class="row">
        <?php foreach($collage as $image): $key++; ?>
            <div class="col-<?php if($key !== 7){ echo '6'; }else{ echo '12'; } ?> col-md-<?= $image['column']; ?>">
                <img src="<?= $image['image']['url']; ?>" alt="<?= $image['image']['title']; ?>" width="<?= $image['image']['width']; ?>" height="<?= $image['image']['height']; ?>">
            </div>
        <?php endforeach; ?>
    </div>
</section>
<?php endif; ?>