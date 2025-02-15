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

    <div class="content-container">
        <div class="large-buttons">
            <a href="" class="large-image-btn" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/monke.jpg'; ?>)">Nupp 1</a>
            <a href="" class="large-image-btn">Nupp 2</a>
            <a href="" class="large-image-btn">Nupp 3</a>
            <a href="" class="large-image-btn">Nupp 4</a>
        </div>
    </div>

</main>

<?php
 get_footer();
?>