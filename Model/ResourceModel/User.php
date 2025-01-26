<?php

namespace lbrce\customform\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class User extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('vendor_user_details', 'id');
    }
}
