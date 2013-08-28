<?php
/**
 * Pi Engine (http://pialog.org)
 *
 * @link            http://code.pialog.org for the Pi Engine source repository
 * @copyright       Copyright (c) Pi Engine http://pialog.org
 * @license         http://pialog.org/license.txt New BSD License
 */

namespace Module\User\Api;

use Pi;
use Pi\Application\AbstractApi;

/**
 * User group APIs
 *
 * @author Liu Chuang <liuchuang@eefocus.com>
 */
class Group extends AbstractApi
{
    /** @var string Module name */
    protected $module = 'user';

    /**
     * Get group list
     *
     * @return array
     */
    public function getList()
    {
        $result = array();

        $model = Pi::model($this->module, 'display_group');
        $select = $model->select()->where(array());
        $rowset = $model->selectWith($select);

        foreach ($rowset as $row) {
            $result[$row->name] = array(
                'title' => $row->title,
                'compound' => $row->compound,
            );
        }

        return $result;
    }
}
