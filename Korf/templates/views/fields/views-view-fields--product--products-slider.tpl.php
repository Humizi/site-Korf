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
  <div class="di-img">
    <?=$fields['field_product_img']->content; ?>
  </div>

  <div class="di-info">
    <h3 class="dii-title">
      <a href="<?=$fields['path']->content; ?>">
        <?=$fields['title']->content; ?>
      </a>
    </h3>
    <p class="dii-desc">
      <?=$fields['field_product_desc']->content; ?>
    </p>

    <div class="dii-price">
      <div class="price-and-counter">
        <div class="wrap">
          <?=$fields['field_product_add_to_basket']->content; ?>
        </div>
      </div>
  
      <div class="diip-order">
        <?=$fields['field_product_add_to_basket_1']->content; ?>
      </div>
    </div>
      <?=views_embed_view('product_advantages', 'block', $fields['nid']->content); ?>
  </div>