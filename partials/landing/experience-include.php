   
<?php
/**
 * 
 * Partial Name: experience-include
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$experience = get_field('experience');
$mornings = $experience['schedules']['mornings'];
$afternoon = $experience['schedules']['afternoon'];
?>
<section class="experience-include-partial-f46c68" <?php if($experience['background']): ?>style="background-image:url(<?= $experience['background']; ?>)"<?php endif; ?>>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-9 text-center">
                <?php if($experience['title']): ?>
                    <h2 class="title"><?= $experience['title']; ?></h2>
                <?php endif; if($experience['list']): ?>
                    <div class="row justify-content-center mb-5">
                        <?php foreach($experience['list'] as $item): ?>
                            <div class="col-6 col-sm-4 col-lg-3 mb-3">
                                <div class="item-include">
                                    <?php if($item['image']): ?>
                                        <img src="<?= $item['image']['url']; ?>" alt="<?= $item['image']['title']; ?>" width="<?= $item['image']['width']; ?>" height="<?= $item['image']['height']; ?>">
                                    <?php endif; if($item['description']): ?>
                                        <p class="description"><?= $item['description']; ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div> 
            <div class="col-12 col-md-10">
                <div class="scedules">
                    <?php if($mornings): ?>
                        <p class="description"><?= $mornings; ?></p>
                    <?php endif; if($afternoon): ?>
                        <p class="description"><?= $afternoon; ?></p>
                    <?php endif; ?>
                </div>
                <?php if($experience['description']): ?>
                    <p class="desctiprion-after-shedules"><?= $experience['description']; ?></p>
                <?php endif; if($experience['cta_image']): ?>
                    <a href="#reserve" class="join-cta">
                        <img src="<?= $experience['cta_image']['url']; ?>" alt="<?= $experience['cta_image']['title']; ?>" width="<?= $experience['cta_image']['width']; ?>" height="<?= $experience['cta_image']['height']; ?>">
                    </a>
                <?php endif; ?>
            </div> 
        </div>
    </div>
</section>
                    