<?php

namespace NewTable\Declarative\Model\ResoruceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class HelloWorld extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('quote_item_file','id');
    }
}

?>