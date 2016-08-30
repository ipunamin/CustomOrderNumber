<?php

class Custom_CustomOrderNumber_Helper_Data extends Mage_Core_Helper_Abstract {

	public function getOrderNumber() {
		return Mage::getStoreConfig('customordernumber/customordernumber/order');
	}
	public function getInvoiceNumber() {
		return Mage::getStoreConfig('customordernumber/customordernumber/invoice');
	}
	public function getShipmentNumber() {
		return Mage::getStoreConfig('customordernumber/customordernumber/shipment');
	}
	public function getCreditNumber() {
		return Mage::getStoreConfig('customordernumber/customordernumber/credit');
	}
	public function isOverrideEnabled() {
		return Mage::getStoreConfig('customordernumber/customordernumber/override');
	}
	public function getDisablePadding() {
		return Mage::getStoreConfig('customordernumber/customordernumber/disable_padding');
	}
	public function getDisablePrefix() {
		return Mage::getStoreConfig('customordernumber/customordernumber/disable_prefix');
	}
	public function getExtraIncrement() {
		return Mage::getStoreConfig('customordernumber/customordernumber/extra_increment');
	}
	
}
