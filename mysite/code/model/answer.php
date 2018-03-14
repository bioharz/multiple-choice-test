<?php
/**
 * Created by PhpStorm.
 * User: bioharz
 * Date: 07.03.18
 * Time: 12:30
 */

class Answer extends \SilverStripe\ORM\DataObject
{

    private static $db =  [
        'Answer' => 'Varchar(100)',
        'Correct' => 'Boolean'
    ];

    private static $has_one = [
        'Question' => 'Question'
    ];

    private static $summary_fields = [
        'Answer', 'Correct'
    ];

}