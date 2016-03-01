<?php
/*namespace Sample\Trial\Controller\Index;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Context;
class Index extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        echo '<p>You Did It!</pd>';
        var_dump(__METHOD__);
    }    
} */
namespace Sample\Trial\Controller\Index;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
 
class Index extends \Magento\Framework\App\Action\Action
{
/**
* @param Context $context
* @param PageFactory $resultPageFactory
*/
	protected $pageFactory;
    protected $objectManager;
    public function __construct(Context $context, PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
         
        return parent::__construct($context);

    }
 
    public function execute()
    {        
       // var_dump(__METHOD__);
        $page_object = $this->pageFactory->create();;
        
        
        return $page_object;
    }    
}