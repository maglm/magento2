<?php
/**
 * Copyright © 2015 Pagseguro. All rights reserved.
 */

// @codingStandardsIgnoreFile

namespace Mage\Document\Block\Adminhtml\Post\Edit\Tab;


use Magento\Backend\Block\Widget\Form\Generic;
use Magento\Backend\Block\Widget\Tab\TabInterface;



class Main extends Generic implements TabInterface
{

    /**
     * {@inheritdoc}
     */
    public function getTabLabel()
    {
        return __('Post Information');
    }

    /**
     * {@inheritdoc}
     */
    public function getTabTitle()
    {
        return __('Post Information');
    }

    /**
     * {@inheritdoc}
     */
    public function canShowTab()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function isHidden()
    {
        return false;
    }

    /**
     * Prepare form before rendering HTML
     *
     * @return $this
     * @SuppressWarnings(PHPMD.NPathComplexity)
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    protected function _prepareForm()
    {
        $model = $this->_coreRegistry->registry('current_mage_document_post');
        /** @var \Magento\Framework\Data\Form $form */
        $form = $this->_formFactory->create();
        $form->setHtmlIdPrefix('post_');
        $fieldset = $form->addFieldset('base_fieldset', ['legend' => __('Item Information')]);
        if ($model->getId()) {
            $fieldset->addField('id', 'hidden', ['name' => 'id']);
        }
        $fieldset->addField(
            'name',
            'text',
            ['name' => 'name', 'label' => __('Post Name'), 'title' => __('Post Name'), 'required' => true]
        );
        $fieldset->addField(
            'email',
            'text',
            ['name' => 'email', 'label' => __('Post Email'), 'title' => __('Post Email'), 'required' => true]
        );
        $fieldset->addField(
            'phone',
            'text',
            ['name' => 'phone', 'label' => __('Post Phone'), 'title' => __('Post Phone'), 'required' => true]
        );
        $fieldset->addField(
            'address',
            'text',
            ['name' => 'address', 'label' => __('Post Address'), 'title' => __('Post Address'), 'required' => true]
        );

        $fieldset->addField(
            'city',
            'text',
            ['name' => 'city', 'label' => __('Post City'), 'title' => __('Post City'), 'required' => true]
        );
        
        $form->setValues($model->getData());
        $this->setForm($form);
        return parent::_prepareForm();
    }
}
