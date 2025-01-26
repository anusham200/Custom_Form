<?php

namespace lbrce\customform\Model;

use Magento\Framework\Model\AbstractModel;

class User extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(\lbrce\customform\Model\ResourceModel\User::class);
    }
}
