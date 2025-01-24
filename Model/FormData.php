<?php
namespace Custom\Form\Model;

use Magento\Framework\Model\AbstractModel;
use Custom\Form\Model\ResourceModel\FormData as FormDataResource;

class FormData extends AbstractModel
{
    protected $_idFieldName = 'email'; // Primary key field in the database table
    protected $_modelName = 'Custom\Form\Model\ResourceModel\FormData';
    
    public function saveData($email, $firstName, $lastName, $schoolName)
    {
        // Assign values to the model properties
        $this->setEmail($email);
        $this->setFname($firstName);
        $this->setLname($lastName);
        $this->setSchoolname($schoolName);
        
        // Save data
        $this->_getResource()->save($this); // The model resource will handle inserting the data into the DB
    }
}
