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
<li class="bl-item bl-item-<?=$fields['nid']->content; ?>">
  <img class="bli-img" src="sites/all/themes/Korf/img/basket-tovar-img.png" width="74" height="74" alt="фото товара">
<span class="blid-discount">10%</span>
<p class="bli-title"><?php print $fields['title']->content; ?></p>

<div class="price-and-counter">
  <div class="pac-wrap">
    <?php print $fields['field_product_add_to_basket']->content; ?>
  </div>
  <div class="counter">
    <?php print $fields['field_product_add_to_basket_1']->content; ?>
  </div>
</div>
</li>