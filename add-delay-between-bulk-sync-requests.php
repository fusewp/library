<?php
/* Add a second delay between bulk-sync requests where the 1 in wp_1_fusewp_bg_process_seconds_between_batches is the blog ID which changes in multisite. */
add_filter('wp_1_fusewp_bg_process_seconds_between_batches', function ($seconds) {
  return 1;
});
