<?php

/**
 * @file
 * Template for each row inside the "boxes" on the display query edit screen.
 */
?>
<div class="views-display-setting <?php print implode(' ', $classes); ?> <?php print $zebra; ?> clearfix" <?php print $attributes; ?>>
  <?php if ($description): ?>
    <span class="views-admin-label"><?php print $description; ?></span>
  <?php endif; ?>
  <?php if ($settings_links): ?>
    <?php print $settings_links; ?>
  <?php endif; ?>
</div>
