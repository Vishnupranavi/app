<?php

namespace NewTable\Mymodule3\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;


class Post extends AbstractDb
{	
	protected function _construct()
	{
		$this->_init('sampletable', 'id');
	}
	
}

?>