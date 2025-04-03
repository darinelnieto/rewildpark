   
<?php
/**
 * 
 * Partial Name: end-content
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$content = get_field('the_inpact_content');
$nine = $content['nine_image'];
$logo = $content['loros_logo'];
?>
<section class="end-content-partial-9a426f">
    <?php if($content['main_image']): ?>
        <img src="<?= $content['main_image']['url']; ?>" alt="<?= $content['main_image']['title']; ?>" class="background">
    <?php endif; ?>
    <div class="end-content">
        <?php if($nine): ?>
            <img src="<?= $nine['url']; ?>" alt="<?= $nine['title']; ?>" width="<?= $nine['width']; ?>" height="<?= $nine['height']; ?>" class="nine">
        <?php endif; ?>
        <div class="container">
            <div class="row mb-5">
                <?php if($logo): ?>
                    <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                        <div class="logo-left">
                            <img src="<?= $logo['url']; ?>" alt="<?= $logo['title']; ?>" width="<?= $logo['width']; ?>" height="<?= $logo['height']; ?>" class="logo">
                        </div>
                    </div>
                <?php endif; ?>
                <div class="col-12 col-md-8 col-lg-9">
                    <div class="rigth-content">
                        <div class="yellow-content">
                            <p class="text"><?= $content['text_yellow']; ?></p>
                        </div>
                        <div class="title">
                            <h2><?= $content['title']; ?></h2>
                        </div>
                        <p class="description"><?= $content['description']; ?></p>
                    </div>
                </div>
            </div>
            <?php if($content['items']): ?>
                <div class="row pt-4 mb-md-5">
                    <?php foreach($content['items'] as $item): ?>
                        <div class="col-6 col-lg-3 mb-4 mb-lg-0">
                            <div class="items">
                                <img src="<?= $item['image']['url']; ?>" alt="<?= $item['image']['title']; ?>" width="<?= $item['image']['width']; ?>" height="<?= $item['image']['height']; ?>" class="image-item">
                                <p class="text-card"><?= $item['description']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <div class="row pt-4">
                <div class="col-12 text-center">
                    <img src="<?= $content['text_image']['url']; ?>" alt="<?= $content['text_image']['title']; ?>" width="<?= $content['text_image']['width']; ?>" height="<?= $content['text_image']['height']; ?>" class="text-img">
                    <div class="book-now-cta">
                        <a href="#reserve">
                            <?= $content['book_now']; ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <img src="<?= $content['loros_left']['url']; ?>" alt="<?= $content['loros_left']['title']; ?>" width="<?= $content['loros_left']['width']; ?>" height="<?= $content['loros_left']['height']; ?>" class="loros-left">
        <img src="<?= $content['loro_right']['url']; ?>" alt="<?= $content['loro_right']['title']; ?>" width="<?= $content['loro_right']['width']; ?>" height="<?= $content['loro_right']['height']; ?>" class="loro-right">
    </div>
    <?php $footer = get_field('content_footer'); ?>
    <div class="footer-content">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="rigth-content">
                        <p class="text"><?= $footer['text_right']; ?></p>
                        <?php if($footer['social_network']): ?>
                            <ul class="social-networks">
                                <?php foreach($footer['social_network'] as $li): ?>
                                    <li>
                                        <a href="<?= $li['link']['url']; ?>" target="_blank">
                                            <img src="<?= $li['icon']['url']; ?>" alt="<?= $li['icon']['title']; ?>" width="<?= $li['icon']['width']; ?>" height="<?= $li['icon']['height']; ?>">
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="menu">
                        <?php wp_nav_menu(['menu' => 'footer landing']); ?>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <?php if($footer['logos']): ?>
                        <ul class="sponsors">
                            <?php foreach($footer['logos'] as $logo): ?>
                                <li>
                                    <img src="<?= $logo['image']['url']; ?>" alt="<?= $logo['image']['title']; ?>" width="<?= $logo['image']['width']; ?>" height="<?= $logo['image']['height']; ?>">
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>       