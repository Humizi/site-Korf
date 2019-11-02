<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<article class="block-news">
  <h1 class="section-title">Новости</h1>
  <ul class="n-list">
      <?php foreach ($rows as $id => $row): ?>
        <li class="nl-item">
          <?php print $row; ?>
        </li>
      <?php endforeach; ?>
  </ul>
</article>