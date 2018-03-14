<?php
/**
 * Created by PhpStorm.
 * User: bioharz
 * Date: 14.03.18
 * Time: 09:50
 */

class Category extends \SilverStripe\ORM\DataObject
{

    private static  $db = [
      'Title' => 'Varchar(100)',
    ];

    private static $has_many = [
        'Question' => 'Question',
    ];

}