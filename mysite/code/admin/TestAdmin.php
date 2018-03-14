<?php
/**
 * Created by PhpStorm.
 * User: bioharz
 * Date: 14.03.18
 * Time: 10:48
 */

class TestAdmin extends \SilverStripe\Admin\ModelAdmin
{

    private static $managed_models = [
        'Test',
    ];

    private static $url_segment = 'tests';
    private static $menu_title = 'Tests';

}