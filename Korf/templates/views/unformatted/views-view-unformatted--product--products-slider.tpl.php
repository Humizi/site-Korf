<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>

<div class="block-delivery">
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <?php foreach ($rows as $id => $row): ?>
      <div<?php if ($classes_array[$id]): ?> class="<?php print $classes_array[$id]; ?>"<?php endif; ?>>
        <?php print $row; ?>
      </div>
    <?php endforeach; ?>
    </div>
      <button class="swiper-button-prev d-btn d-btn-prev"></button>
      <button class="swiper-button-next d-btn d-btn-next"></button>
  </div>
</div>