<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */

        // dpm();

        $description = $fields['body']->content;
        $title = $fields['title']->content;
        $img = '/sites/default/files/' . $row->field_field_thumbnail[0]['raw']['filename'];
        $soundcloud = $row->field_field_soundcloud_link[0]['raw']['value'];
    ?>

    <div class="featured-top clearfix">
        <div class="wrapper">
            <div class="column">
                <h2><?php echo $title . '</h2><br>' . $description ?>
                <a href="<?php echo $soundcloud; ?>" target="_blank" class="download-btn">Get Podcast</a>
            </div>
            <div class="column">
                <img src="<?php echo $img; ?>">
            </div>
        </div>
    </div>
