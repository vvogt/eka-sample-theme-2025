<?php
 get_header();

 $top_section_title = get_field('top_section_title');
 $top_section_image = get_field('top_section_background_image');
 $top_section_text  = get_field('intro_text');
 
?>

<main>
    
    <?php
        get_template_part('template-parts/hero', null, array(
            'title' => $top_section_title,
            'text' => $top_section_text,
            'image' => $top_section_image,
        ));
    ?>

    <div class="sample-image-container">
        <div class="content-container image-container-container">
            <div class="image-container">
                <?php echo wp_get_attachment_image($top_section_image, 'full', false, array()); ?>
            </div>
        </div>
    </div>
 
    <div class="content-container">
        <?php echo do_shortcode('[wpforms id="55" title="false"]'); ?>
    </div>

    <section class="content-container scroll-section" style="background: blue;">
        <div class="scroll-anchor" id="scroll-target"></div>
        SIIA PEAKS SEE NUPP SCROLLIMA MIS ÜLEVAL ON
    </section>

    <?php
        get_template_part('template-parts/accordion', null, array());
    ?>
    
    <?php
        get_template_part('template-parts/text-slider', null, array());
    ?>  



<?php
        get_template_part('template-parts/hero', null, array(
            'title' => $top_section_title,
            'image' => $top_section_image,
        ));
    ?>

</main>

<?php
 get_footer();
?>