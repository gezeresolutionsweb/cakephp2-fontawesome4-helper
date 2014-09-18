<?php
/**
 * FontAwesome Helper
 *
 * PHP 5
 *
 * @copyright Copyright (c) Sylvain Lévesque (http://www.gezere.com)
 * @link http://www.gezere.com
 * @package app.View.Helper
 */

class FontawesomeHelper extends AppHelper {
    /**
     * Create a Fontawesome Icon
     *
     * Inspired by @webandcow Thanks !
     *
     * @param string $iconLabel label of the icon
     * @param array $classes like 'fixed-width', 'large', '2x', etc.
     * @param array $attributes more attributes for the tag
     * @return string
     */
    public function icon($iconLabel, $classes = array(), $attributes = array()) {
        $class = '';
        $more = '';
        if (!empty($classes)) {
            foreach ($classes as $opt) {
                $class .= ' fa-' . $opt;
            }
        }
        if (!empty($attributes)) {
            foreach ($attributes as $key => $attr) {
                $more .= ' ' . $key . '="' . $attr . '"';
            }
        }
        return '<i class="fa fa-' . $iconLabel . $class . '"' . $more . '></i>';
    }
}
