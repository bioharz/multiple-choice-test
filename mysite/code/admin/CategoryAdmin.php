<?php
/**
 * Created by PhpStorm.
 * User: bioharz
 * Date: 14.03.18
 * Time: 09:54
 */

class CategoryAdmin extends \SilverStripe\Admin\ModelAdmin
{

    private static $managed_models = [
        'Category',
    ];

    private static $url_segment = 'categories';
    private static $menu_title = 'Categories';

}