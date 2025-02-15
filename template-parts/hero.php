<?php
    $title = $args['title'];
    $image = $args['image'];
?>

<section class="front-page-hero">
    <div class="content-container">
        <h1><?php echo $title; ?></h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero debitis minus deserunt unde magnam ipsum modi voluptas quas sequi odio? Reprehenderit dolorum nulla esse ut deleniti nemo aut, alias sint!
        Facilis quidem aperiam autem minima. Earum reiciendis in libero repellendus nobis iure illum perferendis eaque corrupti, non molestias debitis impedit at accusantium pariatur amet blanditiis nisi inventore placeat fuga ex.
        Sequi earum id eius quo aperiam, porro neque adipisci? Ab maxime necessitatibus, omnis odio voluptatem voluptas quod iure doloremque fugiat suscipit officia nam sequi cum animi nesciunt praesentium reprehenderit quaerat?
        Corrupti, voluptates tenetur saepe officia obcaecati laudantium alias eos eveniet sequi, id neque cum impedit fugit aspernatur repellendus, in consequatur recusandae eligendi doloremque. Facilis voluptatem neque iure sapiente culpa commodi!</p>
    </div>
    <?php echo wp_get_attachment_image($image, 'full', false, array('class' => 'hero-image')); ?>
</section>