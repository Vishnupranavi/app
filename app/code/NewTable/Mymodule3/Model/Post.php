<?php

namespace NewTable\Mymodule3\Model;

use Magento\Framework\Model\AbstractModel;
use NewTable\Mymodule3\Model\ResourceModel\Post as ResourceModel;

class Post extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }
}

?>