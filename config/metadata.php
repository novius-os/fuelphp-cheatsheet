<?php
/**
 * NOVIUS OS - Web OS for digital communication
 *
 * @copyright  2011 Novius
 * @license    GNU Affero General Public License v3 or (at your option) any later version
 *             http://www.gnu.org/licenses/agpl-3.0.html
 * @link http://www.novius-os.org
 */

return array(
    'name'    => 'Cheet Sheat',
    'version' => '0.9-alpha',
	'href' => 'admin/labs_cheatsheet/cheatsheet',
	'icon64'  => 'static/modules/cms_blog/img/64/blog.png',
    'provider' => array(
        'name' => 'Novius Labs',
    ),
    'launchers' => array(
        'cheatsheet' => array(
            'name'    => 'Cheet Sheat',
            'iframe' => true,
            'url' => 'admin/labs_cheatsheet/cheatsheet',
            'iconUrl' => 'static/modules/cms_blog/img/32/blog.png',
            'icon64'  => 'static/modules/cms_blog/img/64/blog.png',
        ),
    ),
);
