<?php
 
namespace Sample\Trial\Controller;
 
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\Result\PageFactory;
use Sample\Trial\Helper\Data;
use Sample\Trial\Model\TrialFactory;
 
class Trial extends Action
{
   /**
    * @var \Magento\Framework\View\Result\PageFactory
    */
   protected $_pageFactory;
 
   /**
    * @var \Tutorial\SimpleNews\Helper\Data
    */
   protected $_dataHelper;
 
   /**
    * @var \Tutorial\SimpleNews\Model\NewsFactory
    */
   protected $_trialFactory;
 
   /**
    * @param Context $context
    * @param PageFactory $pageFactory
    * @param Data $dataHelper
    * @param NewsFactory $newsFactory
    */
   public function __construct(
      Context $context,
      PageFactory $pageFactory,
      Data $dataHelper,
      TrialFactory $trialFactory
   ) {
      parent::__construct($context);
      $this->_pageFactory = $pageFactory;
      $this->_dataHelper = $dataHelper;
      $this->_trialFactory = $trialFactory;
   } 
}