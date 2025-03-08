<?php
 /**
  * Template Name: Sample
  *
  */

 get_header();

 $top_section_text = get_field('top_section_text');
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
        <?php echo $top_section_text; ?>
    </div>

</main>

<?php
 get_footer();
?>