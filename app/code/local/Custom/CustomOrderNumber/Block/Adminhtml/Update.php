<?php

class Custom_CustomOrderNumber_Block_Adminhtml_Update extends Mage_Adminhtml_Block_System_Config_Form_Field {

 protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element) {
        $this->setElement($element);
        return $this->_getAddRowButtonHtml($this->__('Update (save config first then update)'));
    }

  protected function _getAddRowButtonHtml($title) {

	$buttonBlock = $this->getElement()->getForm()->getParent()->getLayout()->createBlock('adminhtml/widget_button');
	$params = array(
        'website' => $buttonBlock->getRequest()->getParam('website')
    );
    
	$url = Mage::helper('adminhtml')->getUrl("customordernumber/start/update", $params);

	return $this->getLayout()->createBlock('adminhtml/widget_button')
                ->setType('button')
                ->setLabel($this->__($title))
                ->setOnClick("window.location.href='".$url."'")
                ->toHtml();
    }
}
