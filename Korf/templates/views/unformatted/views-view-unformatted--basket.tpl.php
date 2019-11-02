<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<section class="block block-basket">
  <ul class="b-list">
    <?php foreach ($rows as $id => $row): ?>
        <?php print $row; ?>
    <?php endforeach; ?>
  </ul>

  <a class="btn-link-width-165 b-btn-link" href="http://korf.loc/basket/confirm">Перейти к оформлению</a>
</section>