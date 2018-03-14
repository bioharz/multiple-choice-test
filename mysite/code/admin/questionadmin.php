<?php
/**
 * Created by PhpStorm.
 * User: bioharz
 * Date: 07.03.18
 * Time: 12:39
 */

class QuestionAdmin extends \SilverStripe\Admin\ModelAdmin
{

    private static $managed_models = [
        'Question',
    ];

    private static $url_segment = 'questions';
    private static $menu_title = 'Questions';

}