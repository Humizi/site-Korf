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
?>

<p class="pli-number">
<b class="plin-first">
  <?php print substr($fields['field_production_statistic_num']->content, 0, 1); ?>
</b><?php print substr($fields['field_production_statistic_num']->content, 1); ?>
<?php if ($fields['field_body_suffix']->content): ?>
<span class="plin-mass"><?php print $fields['field_body_suffix']->content; ?></span>
  <?php endif;?>
<!--
  34 строка написана так, чтобы не было лишних пробелов между inline-block, 
  т.к из-за этого вёрстка не помещается и переносится.
-->
  <span class="plin-before">
    <?php print $fields['field_body_prefix']->content; ?>
  </span>

  <span class="plin-after">
    <?php print$fields['body']->content; ?>
  </span>
</p>