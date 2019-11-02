<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<article class="block-service">
    <ul class="s-list">
        <?php foreach ($rows as $id => $row): ?>
        <li class="sl-item">
            <?php print $row; ?>
        </li>
        <?php endforeach; ?>
    </ul>  
</article>