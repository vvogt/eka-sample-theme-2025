<?php
 get_header();

 $top_section_title = get_field('top_section_title');
 

 $top_section_image = get_field('top_section_background_image');
 
?>

<main>
    
    <div class="">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <?php echo esc_html($top_section_title); ?>
    </div>

</main>

<?php
 get_footer();
?>