<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div class="block-production">
    <ul class="p-list">
        <?php foreach ($rows as $id => $row): ?>

        <li class="pl-item">
            <?php print $row; ?>
        </li>   

        <?php endforeach; ?>
    </ul>  
</div>