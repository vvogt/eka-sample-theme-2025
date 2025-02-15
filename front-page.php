<?php
 get_header();

 $top_section_title = get_field('top_section_title');
 
?>

<main>
    
    <?php
        get_template_part('template-parts/hero', null, array('title' => 'Tere tulemast'));
    ?>

    <div class="">
        
    </div>

</main>

<?php
 get_footer();
?>