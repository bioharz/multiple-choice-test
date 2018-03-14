<?php
/**
 * Created by PhpStorm.
 * User: bioharz
 * Date: 14.03.18
 * Time: 10:43
 */

class Test extends \SilverStripe\ORM\DataObject
{

    private static $db =  [
        'Title' => 'Varchar(100)',
        'Code' => 'Varchar(10)',
    ];


    private static $many_many = [
        'Question' => 'Question',
    ];


    private static $summary_fields = [
        'Title'
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields -> dataFieldByName('Code')->setDisabled(true);

        return $fields;
    }

    protected function onBeforeWrite()
    {
        parent::onBeforeWrite();

        if(empty($this->Code)) {
            $this->Code = substr(md5(time()), 0, 10);//not secure!!!
        }
    }

}