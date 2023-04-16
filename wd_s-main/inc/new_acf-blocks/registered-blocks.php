<?php

// Register ACF block for gutenberg
if (function_exists('acf_register_block_type')) {
    add_action('acf/init', 'register_acf_block_types');
}

function register_acf_block_types(){
    acf_register_block_type(array(
        'name' => 'acf_section_icon_box',
        'title' => _('ACF Section Icon Box'),
        'description' => _('A custom Icon Box block'),
        'render_template' => 'template-parts/acf-blocks/section_icon_box.php',
        'icon' => 'editor-paste-text',
        'keywords' => array('acf_section_icon_box', 'product'),
    ));
}