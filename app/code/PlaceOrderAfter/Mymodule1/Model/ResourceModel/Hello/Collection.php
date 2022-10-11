<?php

namespace PlaceOrderAfter\Mymodule1\Model\ResourceModel\Hello;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use PlaceOrderAfter\Mymodule1\Model\Hello as Model;
use PlaceOrderAfter\Mymodule1\Model\ResourceModel\Hello as ResourceModel;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Model::class,ResourceModel::class);
    }
}

?>