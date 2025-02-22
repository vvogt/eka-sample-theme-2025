<?php
 get_header();

 $top_section_title = get_field('top_section_title');
 $top_section_image = get_field('top_section_background_image');
 
?>

<main>
    
    <?php
        get_template_part('template-parts/hero', null, array(
            'title' => $top_section_title,
            'image' => $top_section_image,
        ));
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