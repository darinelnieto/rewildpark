   
<?php
/**
 * 
 * Partial Name: calendary
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$calendary = get_field('calendary_group');
?>
<section class="calendary-partial-0a4431" <?php if($calendary['background']): ?>style="background-image:url(<?= $calendary['background']; ?>)"<?php endif; ?> id="reserve">
    <div class="container">
        <div class="row justify-content-center">
            <?= do_shortcode($calendary['shortcode_form']); ?>
        </div>
    </div>
</section> 
<script>
    let person_number = 2;
    let price = '<?= $calendary['price']; ?>';
    const whatsapp_link = '<?= $calendary['whatsapp']['url']; ?>';
</script>