<?php

/**
 * template name: Контакты
 */

$contacts = get_field('contacts', 212);

get_header();
?>

<div class="contacts-page">
    <div class="container">
        <ul class="breadcrumbs">
            <li class="breadcrumbs__item"><a class="link-with-underline link-gray" href="/">Главная</a></li>
            <li class="breadcrumbs__item"><a class="link-with-underline link-gray" href="<?php echo get_permalink();?>">Контакты</a></li>
        </ul>
        <div class="d-flex">
            <div class="page-content">
                <h2 class="h2-title">Контакты</h2>
                <div class="contacts">
                    <?php foreach ($contacts as $contact) : ?>
                        <div class="contact">
                            <h3 class="contact__title"><?php echo $contact['name']?></h3>
                            <?php if ($contact['person']):?>
                                <p class="line-height-1_5"><span class="contact__text contact-text_name"><?php echo $contact['person']?></span></p>
                            <?php endif; ?>
                            <?php if ($contact['city']):?>
                                <p class="line-height-1_5"><span class="contacts__text"><?php echo $contact['city']?></span></p>
                            <?php endif; ?>
                            <?php if ($contact['phones']):?>
                                <p class="line-height-1_5"><span class="contacts__text">Телефоны:
                                    <?php foreach ($contact['phones'] as $phone) : ?>
                                        <span class="d-inline-blok"><?php echo $phone['phone']?></span>
                                    <?php endforeach; ?>
                                </p>
                            <?php endif; ?>
                            <?php if ($contact['fax']):?>
                                <p class="line-height-1_5"><span class="contacts__text">Факс: <span class="d-inline-blok"><?php echo $contact['fax']?></span></span></p>
                            <?php endif ?>
                            <?php if ($contact['email']):?>
                                <p class="line-height-1_5"><span class="contacts__text">E-mail: <?php echo $contact['email']; ?></span></p>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div>
                    <?php echo do_shortcode('[contact-form-7 id="224" title="Contact form 1" html_class="feedback"]'); ?>
                </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php

get_footer();

?>
