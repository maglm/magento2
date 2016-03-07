<?php
namespace Step\Practice\Controller\Index;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;


 
class Edit extends \Magento\Framework\App\Action\Action
{
/**
* @param Context $context
* @param PageFactory $resultPageFactory
*/
    protected $_practiceFactory;
	public function __construct(Context $context, PageFactory $resultPageFactory, \Step\Practice\Model\PracticeFactory $practiceFactory)
    {
        parent::__construct($context);
        $this->_practiceFactory = $practiceFactory;
        $this->resultPageFactory = $resultPageFactory;
    } 
    public function execute()
    {
        $resultPageFactory = $this->resultPageFactory->create();


        $name = isset($_REQUEST['name'])?$_REQUEST['name']:'';
        $email = isset($_REQUEST['email'])?$_REQUEST['email']:'';
        $phone = isset($_REQUEST['phone'])?$_REQUEST['phone']:'';
        $address = isset($_REQUEST['address'])?$_REQUEST['address']:'';
        $city = isset($_REQUEST['city'])?$_REQUEST['city']:'';
        $author_id = isset($_REQUEST['author_id'])?$_REQUEST['author_id']:'';
        $model = $this->_practiceFactory->create();
         if($author_id!='')
        {
            
            $model->setData('name', $name); 
            $model->setData('email', $email);         
            $model->setData('phone', $phone); 
            $model->setData('address', $address); 
            $model->setData('city', $city); 
            $model->setId($author_id)->save();   
            $this->messageManager->addSuccess(__('The Name has been Updated Successfully.'));
            return $this->resultRedirectFactory->create()->setUrl('../index');       
            
        }
        else if($author_id=='' && $name!='')
        {
            $model->setData('email', $email);         
            $model->setData('phone', $phone); 
            $model->setData('address', $address); 
            $model->setData('city', $city); 
            $model->save();
            $this->messageManager->addSuccess(__('The name has been Save Successfully.'));
            return $this->resultRedirectFactory->create()->setUrl('../index');
                      
        }
        return $resultPageFactory;
    }
   
}