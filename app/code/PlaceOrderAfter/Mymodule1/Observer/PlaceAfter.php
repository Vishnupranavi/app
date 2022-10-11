<?php

namespace PlaceOrderAfter\Mymodule1\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
// use PlaceOrderAfter\Mymodule1\Model\ResourceModel\Hello;

class PlaceAfter implements ObserverInterface
{
    protected $helloFactory;
    protected $resource;

    public function __construct(\PlaceOrderAfter\Mymodule1\Model\HelloFactory $helloFactory)
    {
        $this->helloFactory = $helloFactory;
        // $this->resource = $resource;
    }

    public function execute(Observer $observer)
    {
        $sampleData = [
            [
                'firstname'=>'suriya',
                'lastname'=>'narayanan',
                'method'=>'event-observer'
            ]
            ];
            foreach($sampleData as $item)
            {
               $helloModel = $this->helloFactory->create()->setData($item)->save();
            }
    }
}



?>