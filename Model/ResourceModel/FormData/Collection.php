<?php
namespace Custom\Form\Model\ResourceModel\FormData;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Custom\Form\Model\FormData as Model;
use Custom\Form\Model\ResourceModel\FormData as ResourceModel;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}

