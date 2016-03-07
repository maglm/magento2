<?php
/**
 * Copyright © 2015 Pagseguro. All rights reserved.
 */

// @codingStandardsIgnoreFile

namespace Sample\Trial\Block\Adminhtml\Items\Edit\Tab;


use Magento\Backend\Block\Widget\Form\Generic;
use Magento\Backend\Block\Widget\Tab\TabInterface;



class Main extends Generic implements TabInterface
{

    /**
     * {@inheritdoc}
     */
    public function getTabLabel()
    {
        return __('Item Information');
    }

    /**
     * {@inheritdoc}
     */
    public function getTabTitle()
    {
        return __('Item Information');
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
        $model = $this->_coreRegistry->registry('current_sample_trial_items');
        /** @var \Magento\Framework\Data\Form $form */
        $form = $this->_formFactory->create();
        $form->setHtmlIdPrefix('item_');
        $fieldset = $form->addFieldset('base_fieldset', ['legend' => __('Item Information')]);
        if ($model->getId()) {
            $fieldset->addField('author_id', 'hidden', ['name' => 'id']);
        }
        $fieldset->addField(
            'name',
            'text',
            ['name' => 'name', 'label' => __('Item Name'), 'title' => __('Item Name'), 'required' => true]
        );
        $fieldset->addField(
            'biography',
            'text',
            ['name' => 'biography', 'label' => __('Item biography'), 'title' => __('Item biography'), 'required' => true]
        );
        $fieldset->addField(
            'url_key',
            'text',
            ['name' => 'url_key', 'label' => __('Item Url'), 'title' => __('Item Url'), 'required' => true]
        );
        $fieldset->addField(
            'dob',
            'date',
            [
                'name'        => 'dob',
                'label'       => __('Date of birth'),
                'title'       => __('Date of birth'),
                'image'       => $this->getViewFileUrl('images/grid-cal.png'),
                'date_format' => $this->_localeDate->getDateFormat(
                    \IntlDateFormatter::SHORT
                ),
                'class' => 'validate-date'
            ]
        );
        
        $form->setValues($model->getData());
        $this->setForm($form);
        return parent::_prepareForm();
    }
}
