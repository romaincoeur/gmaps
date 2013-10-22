<?php
/**
 * Google Maps for NOVIUS OS
 *
 * @copyright  2013 Romain Coeur
 * @license    GNU Affero General Public License v3 or (at your option) any later version
 *             http://www.gnu.org/licenses/agpl-3.0.html
 */

return array(
    'name'    => __('Google Maps'),
    'version' => '0.1',
    'provider' => array(
        'name' => 'Romain COEUR',
    ),
    'namespace' => "Gmaps",
    'permission' => array(
    ),
    'icons' => array(
        64 => 'static/apps/gmaps/img/64/icon.png',
        32 => 'static/apps/gmaps/img/32/icon.png',
        16 => 'static/apps/gmaps/img/16/icon.png',
    ),
    // Enhancer configuration sample
    'enhancers' => array(
        'osm' => array( // key must be defined
            'title' => __('Google Maps'),
            'desc'  => '',
            'enhancer' => 'gmaps/front/main',
            'dialog' => array(
                'contentUrl' => 'admin/gmaps/enhancer/popup',
                'width' => 600,
                'height' => 750,
                'ajax' => true,
            ),
        ),
    ),
);
