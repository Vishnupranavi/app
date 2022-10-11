<?php

namespace PlaceOrderAfter\Mymodule1\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Hello extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('placeafter','id');
    }
}

?>