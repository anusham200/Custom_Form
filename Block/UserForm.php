<?php

namespace lbrce\customform\Block;

use Magento\Framework\View\Element\Template;

class UserForm extends Template
{
    public function getFormAction()
    {
        return $this->getUrl('userform/index/submit');
    }
}
