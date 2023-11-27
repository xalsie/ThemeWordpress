<?php
    $datas = array();

    for ($i = 1; $i <= 3; $i++) {
        $who_section_title = get_theme_mod('who_section_' . $i . '_title');
        $who_section_text = get_theme_mod('who_section_' . $i . '_text');

        $datas[] = array(
            'title' => $who_section_title,
            'text' => $who_section_text,
        );
    }
?>

<section class="who-are-we">
    <div>
        <img src="<?= esc_url(get_theme_mod('who_section_main_picture')); ?>" alt="Who are we">
    </div>
    <div>
        <?php foreach ($datas as $data) : ?>
            <div>
                <h1 class="title title--block"><?php echo esc_attr($data['title']); ?></h1>
                <p><?php echo esc_html($data['text']); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>
