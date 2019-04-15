<?php
/**
 * app/code/local/MasteringMagento/Model/Observer.php
 *
 * This example code is provided for use with the Mastering Magento video
 * series, by Packt Publishing.
 *
 * @author    Franklin P. Strube <franklin.strube@gmail.com>
 * @category  MasteringMagento
 * @package   Example
 * @copyright Copyright (c) 2012 Packt Publishing (http://packtpub.com)
 */
class MasteringMagento_Example_Model_Observer
{
    public function controllerActionPredispatch($observer)
    {
        /* @var $observer Mage_Core_Model_Observer */
        $controllerAction = $observer->getEvent()->getControllerAction();

        // Mage::log($controllerAction->getRequest()->getParams());
    }
}
