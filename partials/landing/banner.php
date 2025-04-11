   
<?php
/**
 * 
 * Partial Name: banner
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$banner_dst = get_field('banner_desktop');
$banner_mvl = get_field('banner_movil');
?>
<section class="banner-partial-2df8aa">
    <div class="desktop">
        <img src="<?= $banner_dst['background']['url']; ?>" alt="<?= $banner_dst['background']['title']; ?>" class="background">
        <div class="animations-img">
            <?php if($banner_dst['text_image_center']): ?>
                <img src="<?= $banner_dst['text_image_center']['url']; ?>" alt="<?= $banner_dst['text_image_center']['title']; ?>" class="rewildpark">
            <?php endif; if($banner_dst['loros_logo']): ?>
                <img src="<?= $banner_dst['loros_logo']['url']; ?>" alt="<?= $banner_dst['loros_logo']['title']; ?>" class="logo-loros">
            <?php endif;?>
        </div>
    </div>
    <div class="movil">
        <img src="<?= $banner_mvl['url']; ?>" alt="<?= $banner_mvl['title']; ?>" width="<?= $banner_mvl['width']; ?>" height="<?= $banner_mvl['height']; ?>">
    </div>
</section>
                    