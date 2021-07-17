<?php
/**
 * @param string $template_name
 * @param array $data
 * @param bool $echo
 * @return false|string
 */
function template_part($template_name = '', $data = [], $echo =  true ){
    $full_template_name = __DIR__ . "/../templates/{$template_name}.php";
    if (file_exists($full_template_name)) {
        if (!empty($data)) extract($data);
        ob_start();
        include $full_template_name;
        if ($echo) {
            echo ob_get_clean();
        } else {
            return ob_get_clean();
        }

    }
    return '';
}

/**
 * Show image from path with params is image name
 *
 * @param $file
 * @param bool $show
 * @return mixed
 */
function assets($file, $show = true) {
    if (!$show) {
        return $file;
    }

    echo "assets/{$file}";
}

/**
 * Show active class for menu
 *
 * @param $page
 * @param $current_page
 */
function active($page, $current_page) {
    echo ($page === $current_page)?'active':'';
}