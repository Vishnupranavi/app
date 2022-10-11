<?php

namespace NewTable\Mymodule3\Model\ResourceModel\Post;


use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use NewTable\Mymodule3\Model\Post as Model;
use NewTable\Mymodule3\Model\ResourceModel\Post as ResourceModel;


class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Model::class,ResourceModel::class);
    }
}

?>