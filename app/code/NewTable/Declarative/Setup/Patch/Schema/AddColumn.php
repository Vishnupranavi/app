<?php


namespace NewTable\Declarative\Setup\Patch\Schema;

use Magento\Backend\Block\Widget\Tab;
use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\Patch\SchemaPatchInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class AddColumn implements SchemaPatchInterface
{
    private $moduleDataSetup;

    public function __construct(ModuleDataSetupInterface $moduleDataSetup)
    {
        $this->moduleDataSetup = $moduleDataSetup;
    }

    public static function getDependencies()
    {
        return [];
    }

    public function getAliases()
    {
        return [];
    }

    public function apply()
    {
        $this->moduleDataSetup->startSetup();

        $this->moduleDataSetup->getConnection()->addColumn(
            $this->moduleDataSetup->getTable('quote_item_file'),
            'product_name',
            [
                'type'=>Table::TYPE_TEXT,
                'length'=>255,
                'nullable'=>'false',
                'comment'=>'ProductName'
            ]
        );

        $this->moduleDataSetup->endSetup();
    }
}



?>