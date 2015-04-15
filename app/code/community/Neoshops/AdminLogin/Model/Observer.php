<?php
class Neoshops_AdminLogin_Model_Observer {
    public function htmlBefore (Varien_Event_Observer $observer) {
        /** @var $block Mage_Adminhtml_Block_Template  */
        $block = $observer->getEvent()->getBlock();
        $template = $block->getTemplate();
        if ($template == 'login.phtml') {
            $block->setTemplate('neoshops/login.phtml');
        }
    }
}