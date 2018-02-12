<?php
/**
 * Project Specific Includes
 *
 * The $project_includes array determines the code library included in your theme.
 *
 * Please note that missing files will produce a fatal error.
 *
 *
 */
$project_includes = [
    'get-all-locations.php'
];

foreach ($project_includes as $file) {
    if (!$filepath = $file) {
        trigger_error(sprintf(__('Error locating %s for inclusion'), $file), E_USER_ERROR);
    }

    require_once $filepath;
}

unset($file, $filepath);
