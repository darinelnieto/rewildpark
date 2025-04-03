   
<?php
/**
 * 
 * Partial Name: make-a-diference
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$diference = get_field('diference');
$img = $diference['main_image'];
$bkg = $diference['background'];
$icons = $diference['icons'];
?>
<section class="make-a-diference-partial-09b84b" <?php if($bkg): ?>style="background-image:url(<?= $bkg; ?>);"<?php endif; ?>>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="main-img">
                    <img src="<?= $img['url']; ?>" alt="<?= $img['title']; ?>" width="<?= $img['width']; ?>" heigth="<?= $img['height']; ?>">
                </div>
            </div>
            <div class="col-12 col-md-7">
                <div class="text-contain">
                    <?php if($diference['text_top']): ?>
                        <p class="description"><?= $diference['text_top']; ?></p>
                    <?php endif; if($icons): ?>
                        <div class="icons-contain">
                            <?php foreach($icons as $icon): ?>
                                <img src="<?= $icon['url']; ?>" alt="<?= $icon['title']; ?>" width="<?= $icon['width']; ?>" height="<?= $icon['height']; ?>" class="icon">
                            <?php endforeach; ?>
                        </div>
                    <?php endif; if($diference['text_two']): ?>
                        <p class="description"><?= $diference['text_two']; ?></p>
                    <?php endif; if($diference['h3']): ?>
                        <h3 class="title-green"><?= $diference['h3']; ?></h3>
                    <?php endif; if($diference['h2']): ?>
                        <h2 class="title-yellow"><?= $diference['h2']; ?></h2>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
                    