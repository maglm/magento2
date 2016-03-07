<?php
namespace Sample\Trial\Controller\Index;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Sample\Trial\Model\TrialFactory;
 
class Index extends \Magento\Framework\App\Action\Action
{
/**
* @param Context $context
* @param PageFactory $resultPageFactory
*/
    protected $_modelTrialFactory;
	public function __construct(Context $context, PageFactory $resultPageFactory, TrialFactory $modelTrialFactory)
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
        $this->_modelTrialFactory = $modelTrialFactory;    
    } 
    public function execute()
    {
        $resultPageFactory = $this->resultPageFactory->create();
        $urlId = $this->getRequest()->getParam('id');
        $del  =  $this->getRequest()->getParam('del');    

        $name = isset($_REQUEST['name'])?$_REQUEST['name']:'';
        $dob = isset($_REQUEST['dob'])?$_REQUEST['dob']:'';
        $biography = isset($_REQUEST['biography'])?$_REQUEST['biography']:'';
        $country = isset($_REQUEST['country'])?$_REQUEST['country']:'';
        $author_id = isset($_REQUEST['author_id'])?$_REQUEST['author_id']:'';
        $model = $this->_modelTrialFactory->create();
        if($author_id!='' && $name!='')
        {
            
            $model->setData('name', $name); 
            $model->setData('dob', $dob);         
            $model->setData('biography', $biography); 
            $model->setData('country', $country); 
            $model->setId($author_id)->save();
             $this->messageManager->addError('My Error');
            
        }
        else if($urlId!='' && $del=='del')
        {
            $model->setId($urlId)->delete();
           $this->messageManager->addSuccess(__('The author has been deleted.'));
                             
                
        }
        else if($author_id=='' && $name!='')
        {
            $model->setData('name', $name); 
            $model->setData('dob', $dob);         
            $model->setData('biography', $biography); 
            $model->setData('country', $country); 
            $model->save();
            $this->messageManager->addSuccess( __('Your Data has been Added successfully') );


        }
        
        
        
        return $resultPageFactory;
    }

}