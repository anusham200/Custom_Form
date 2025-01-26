<?php

namespace lbrce\customform\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use lbrce\customform\Model\User;

class Submit_Form extends Action
{
    protected $user;

    public function __construct(Context $context, User $user)
    {
        parent::__construct($context);
        $this->user = $user;
    }

    public function execute()
    {
        $postData = $this->getRequest()->getPostValue();
        if ($postData) {
            $this->user->setData($postData)->save();
            $this->messageManager->addSuccessMessage('Details submitted successfully.');
        } else {
            $this->messageManager->addErrorMessage('Unable to submit details.');
        }
        $this->_redirect('userform/index');
    }
}
