   
<?php
/**
 * 
 * Partial Name: half-day-tour
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$half_tour = get_field('half_tour');
$gallery = $half_tour['gallery'];
$tabs = $half_tour['tabs'];
?>
<section class="half-day-tour-partial-80801c" id="half-day-tour">
    <img src="<?= $half_tour['background']['url']; ?>" alt="<?= $half_tour['background']['title']; ?>" width="<?= $half_tour['background']['width']; ?>" height="<?= $half_tour['background']['height']; ?>" class="background">
    <div class="container">
        <div class="row title-content">
            <div class="col-8 col-md-6">
                <?php if($half_tour['title']): ?>
                    <h2 class="title"><?= $half_tour['title']; ?></h2>
                <?php endif; if($half_tour['after_title']): ?>
                    <h3 class="after-title"><?= $half_tour['after_title']; ?></h3>
                <?php endif; ?>
            </div>
            <?php if($half_tour['loros']): ?>
                <div class="col-4 col-md-6">
                    <div class="img-loros">
                        <img src="<?= $half_tour['loros']['url']; ?>" alt="<?= $half_tour['loros']['title']; ?>" width="<?= $half_tour['loros']['width']; ?>" height="<?= $half_tour['loros']['height']; ?>">
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <div class="row justify-content-center">
            <?php if($half_tour['description_left']): ?>
                <div class="col-12 col-md-6">
                    <p class="description"><?= $half_tour['description_left']; ?></p>
                </div>
            <?php endif; if($half_tour['description_right']): ?>
                <div class="col-12 col-md-6">
                    <p class="description"><?= $half_tour['description_right']; ?></p>
                </div>
            <?php endif; if($gallery): ?>
                <div class="col-12 mt-4 mb-md-5">
                    <div class="gallery-slide owl-carousel">
                        <?php foreach($gallery as $img): ?>
                            <div class="item">
                                <img src="<?= $img['url']; ?>" alt="<?= $img['title']; ?>" width="<?= $img['width']; ?>" height="<?= $img['height']; ?>">
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
            <?php if($tabs): foreach($tabs as $img): ?>
                <div class="col-8 col-md-4 mb-3">
                    <div class="tab-image-contain">
                        <img src="<?= $img['image']['url']; ?>" alt="<?= $img['image']['title']; ?>" width="<?= $img['image']['width']; ?>" height="<?= $img['image']['height']; ?>">
                    </div>
                </div>
            <?php endforeach; endif; ?>
        </div>
    </div>
</section>
                    