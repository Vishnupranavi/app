<?php

namespace AfterOrder\Mymodule\Observer;

use Magento\Framework\Event\ObserverInterface;


class OrderObserver implements ObserverInterface
{
    protected $postFactory;

    public function __construct(\AfterOrder\Mymodule\Model\PostFactory $postFactory)
    {
        $this->postFactory = $postFactory;
    }
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $sampleData = [
            [
                'firstname'=>'Suriya',
                'lastname'=>'narayanan',
                'method'=>'event-observer'
            ],
            [
                'firstname'=>'Venkatesh',
                'lastname'=>'Rajendran',
                'method'=>'event-observer'
            ]
            ];
            foreach($sampleData as $data)
            {
                $this->postFactory->create()->setData($data)->save();
            }
        
        
        
    }
}