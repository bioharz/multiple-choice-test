<?php
/**
 * Created by PhpStorm.
 * User: bioharz
 * Date: 07.03.18
 * Time: 12:30
 */

class Question extends \SilverStripe\ORM\DataObject
{

    private static $db =  [
        'Question' => 'Varchar(100)'
    ];

    private static $has_one = [
        'Category' => 'Category'
    ];

    private static $summary_fields = [
        'Question'
    ];

}