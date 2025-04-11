   
<?php
/**
 * 
 * Partial Name: gallery-after-join-the-wild
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$gallery = get_field('the_wild_gallery');
$gallery_mv = get_field('the_wild_gallery_movil');

$main_img = $gallery[0]['image'];
?>
<section class="gallery-after-join-the-wild-partial-2a3f65">
    <?php if($gallery): ?>
        <div class="row d-none d-md-flex">
            <div class="col-12 col-sm-4 col-md-5 item">
                <img src="<?= $main_img['url']; ?>" alt="<?= $main_img['title']; ?>" width="<?= $main_img['width']; ?>" height="<?= $main_img['height']; ?>" class="item-gallery">
            </div>
            <div class="col-12 col-sm-8 col-md-7">
                <div class="row" style="height:100%;">
                    <?php foreach($gallery as $item): if($item['image']['url'] !== $main_img['url']): ?>
                        <div class="col-<?= $item['colum']; ?> item">
                            <img src="<?= $item['image']['url']; ?>" alt="<?= $item['image']['title']; ?>" width="<?= $item['image']['width']; ?>" height="<?= $item['image']['height']; ?>" class="item-gallery">
                        </div>
                    <?php endif; endforeach; ?>
                </div>
            </div>
        </div>
    <?php endif; if($gallery_mv): ?>
        <div class="row d-flex d-md-none">
            <?php foreach($gallery_mv as $item): ?>
                <div class="col-<?= $item['colum']; ?> item">
                    <img src="<?= $item['image']['url']; ?>" alt="<?= $item['image']['title']; ?>" width="<?= $item['image']['width']; ?>" height="<?= $item['image']['height']; ?>" class="item-gallery">
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>