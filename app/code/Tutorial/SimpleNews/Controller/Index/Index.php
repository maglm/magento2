<?php
 
namespace Tutorial\SimpleNews\Controller\Index;
 
use Tutorial\SimpleNews\Controller\News;
 
class Index extends News
{
    public function execute()
    {
        $pageFactory = $this->_pageFactory->create();
 
        // Add title which is got by the configuration via backend
        $pageFactory->getConfig()->getTitle()->set(
            $this->_dataHelper->getHeadTitle()
        );
 
        // Add breadcrumb
        /** @var \Magento\Theme\Block\Html\Breadcrumbs */
        $breadcrumbs = $pageFactory->getLayout()->getBlock('breadcrumbs');
        $breadcrumbs->addCrumb('home',
            [
                'label' => __('Home'),
                'title' => __('Home'),
                'link' => $this->_url->getUrl('')
            ]
        );
        $breadcrumbs->addCrumb('simplenews',
            [
                'label' => __('Simple News'),
                'title' => __('Simple News')
            ]
        );
 
        return $pageFactory;
    }
}
 