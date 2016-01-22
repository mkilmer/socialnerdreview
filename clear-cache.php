<?php

function drupal_theme_rebuild() {
    drupal_static_reset('theme_get_registry');
    cache_clear_all('theme_registry', 'cache', TRUE);
}

drupal_theme_rebuild();
?>
