<?php
namespace MyCompany\Form\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use MyCompany\Form\Model\FormData; // Custom model
use Magento\Framework\App\RequestInterface;

class Submit extends Action
{
    protected $formDataModel;
    
    public function __construct(
        Context $context,
        FormData $formDataModel
    ) {
        $this->formDataModel = $formDataModel;
        parent::__construct($context);
    }

    public function execute()
    {
        // Get form data from request
        $email = $this->getRequest()->getParam('email');
        $firstName = $this->getRequest()->getParam('firstname');
        $lastName = $this->getRequest()->getParam('lastname');
        $schoolName = $this->getRequest()->getParam('schoolname');

        // Validate form data (can add more validation as needed)
        if ($email && $firstName && $lastName && $schoolName) {
            // Save to database
            try {
                $this->formDataModel->saveData($email, $firstName, $lastName, $schoolName);
                $this->messageManager->addSuccessMessage('Form data saved successfully!');
            } catch (\Exception $e) {
                $this->messageManager->addErrorMessage('Error saving form data: ' . $e->getMessage());
            }
        } else {
            $this->messageManager->addErrorMessage('Please fill all required fields.');
        }

        // Redirect back to the form page (or anywhere else)
        return $this->resultFactory->create(ResultFactory::TYPE_REDIRECT)->setPath('*/*/');
    }
}
