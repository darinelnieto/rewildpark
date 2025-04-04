   
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
?>
<section class="banner-partial-2df8aa">
    <div class="desktop">
        <img src="<?= $banner_dst['background']['url']; ?>" alt="<?= $banner_dst['background']['title']; ?>" class="background">
        <div class="animations-img">
            <?php if($banner_dst['loros_top_left']): ?>
                <img src="<?= $banner_dst['loros_top_left']['url']; ?>" alt="<?= $banner_dst['loros_top_left']['title']; ?>" class="left-top">
            <?php endif; if($banner_dst['monkeys_left_bottom']): ?>
                <img src="<?= $banner_dst['monkeys_left_bottom']['url']; ?>" alt="<?= $banner_dst['monkeys_left_bottom']['title']; ?>" class="bottom-left">
            <?php endif; if($banner_dst['loros_right_top']): ?>
                <img src="<?= $banner_dst['loros_right_top']['url']; ?>" alt="<?= $banner_dst['loros_right_top']['title']; ?>" class="top-right">
            <?php endif; if($banner_dst['monkeys_right_bottom']): ?>
                <img src="<?= $banner_dst['monkeys_right_bottom']['url']; ?>" alt="<?= $banner_dst['monkeys_right_bottom']['title']; ?>" class="bottom-right">
            <?php endif; if($banner_dst['text_image_center']): ?>
                <img src="<?= $banner_dst['text_image_center']['url']; ?>" alt="<?= $banner_dst['text_image_center']['title']; ?>" class="rewildpark">
            <?php endif; if($banner_dst['loros_logo']): ?>
                <img src="<?= $banner_dst['loros_logo']['url']; ?>" alt="<?= $banner_dst['loros_logo']['title']; ?>" class="logo-loros">
            <?php endif;?>
        </div>
    </div>
</section>
                    