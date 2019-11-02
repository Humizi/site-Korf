<?php 

function Korf_preprocess_page(&$vars) {
  $vars['path_to_theme'] = path_to_theme();
}
function render_block($module_name, $block_delta)
{
    $block = block_load($module_name, $block_delta);
    $block = _block_render_blocks(array($block));
    $block_build = _block_get_renderable_array($block);
    return drupal_render($block_build);
}