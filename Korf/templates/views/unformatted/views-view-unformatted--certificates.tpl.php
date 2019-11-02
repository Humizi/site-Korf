<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div class="block-certificates">
    <ul class="c-list">
        <?php foreach ($rows as $id => $row): ?>

        <li class="cl-item">
            <?php print $row; ?>
        </li>   

        <?php endforeach; ?>
    </ul>  
</div>