<?php
    $title = $args['title'] ?? '';
    $image = $args['image'];
    $text  = $args['text'] ?? false;

    /* $title = $args['title'] == 'Main' ? 'Main' : 'Secondary';
    *
    *  same as:
    * 
    * if($title === 'Main') {
    *   $title = 'Main';
    * } else {
    *   $title = 'Secondary';
    * } */
   
?>

<section class="front-page-hero">
    <div class="content-container">
        <?php if($title && $title !== ''): ?>
            <h1><?php echo esc_html($title); ?></h1>
        <?php endif; ?>
        <?php if($text): ?>
            <div>
                <?php echo do_shortcode($text); ?>
            </div>
        <?php endif; ?>
    </div>
    <?php echo wp_get_attachment_image($image, 'full', false, array('class' => 'hero-image')); ?>
</section>