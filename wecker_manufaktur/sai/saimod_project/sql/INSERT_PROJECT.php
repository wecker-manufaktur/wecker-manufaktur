<?php
/**
 * System - PHP Framework
 *
 * PHP Version 5.6
 *
 * @copyright   2016 Ulf Gebhardt (http://www.webcraft-media.de)
 * @license     http://www.opensource.org/licenses/mit-license.php MIT
 * @link        https://github.com/webcraftmedia/system
 * @package     SYSTEM\SQL
 */
namespace SQL;

/**
 * QQ to get System Api Tree by group
 */
class INSERT_PROJECT extends \SYSTEM\DB\QP {
    /**
     * Get Classname of the QQ
     * 
     * @return string Returns classname
     */
    public static function get_class(){return \get_class();}
    
    /**
     * Get QQs MYSQL Query String
     * 
     * @return string Returns MYSQL Query String
     */
    public static function mysql(){return
        'INSERT INTO `projects` (`img`, `name`, `info`, `website`, `order`, `visible`)'.
        ' VALUES(?, ?, ?, ?, (IFNULL((SELECT MAX(`order`)+1 FROM `projects` as `p`),1)), ?);';

    }    
}
