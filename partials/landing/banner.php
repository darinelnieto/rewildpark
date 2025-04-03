   
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
            <img src="<?= $banner_dst['loros_top_left']['url']; ?>" alt="<?= $banner_dst['loros_top_left']['title']; ?>" class="left-top">
            <img src="<?= $banner_dst['monkeys_left_bottom']['url']; ?>" alt="<?= $banner_dst['monkeys_left_bottom']['title']; ?>" class="bottom-left">
            <img src="<?= $banner_dst['loros_right_top']['url']; ?>" alt="<?= $banner_dst['loros_right_top']['title']; ?>" class="top-right">
            <img src="<?= $banner_dst['monkeys_right_bottom']['url']; ?>" alt="<?= $banner_dst['monkeys_right_bottom']['title']; ?>" class="bottom-right">
            <img src="<?= $banner_dst['text_image_center']['url']; ?>" alt="<?= $banner_dst['text_image_center']['title']; ?>" class="rewildpark">
            <img src="<?= $banner_dst['loros_logo']['url']; ?>" alt="<?= $banner_dst['loros_logo']['title']; ?>" class="logo-loros">
        </div>
    </div>
</section>
                    