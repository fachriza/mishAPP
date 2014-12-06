<?php
class Model_Report extends \Orm\Model
{
    protected static $_properties = array(
        'id',
        'long',
        'lat',
        'uid',
        'created_at',
    );

    protected static $_observers = array(
        'Orm\Observer_CreatedAt' => array(
            'events' => array('before_insert'),
            'mysql_timestamp' => false,
        ),
    );

    public static function validate($factory)
    {
        $val = Validation::forge($factory);
        $val->add_field('uid', 'Uid', 'required|max_length[255]');

        return $val;
    }

}
