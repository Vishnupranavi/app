<?php

namespace PlaceOrderAfter\Mymodule1\Model;

use Magento\Framework\Model\AbstractModel;
use PlaceOrderAfter\Mymodule1\Model\ResourceModel\Hello as ResourceModel;

class Hello extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }
}
?>