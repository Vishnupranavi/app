<?php

namespace Create\Module1\Controller\Page;

use Magento\Framework\App\Action\ActionInterface;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\Result\PageFactory;

class Test implements HttpGetActionInterface
{
    protected $pageFactory;
    private $request;

    public function __construct(PageFactory $pageFactory,RequestInterface $request)
    {
        $this->pageFactory = $pageFactory;
        $this->request = $request;
    }

    public function execute()
    {
        $pageFactory = $this->pageFactory->create();
        $pageFactory->getConfig()->getTitle()->set(__("Hello WOrld"));
        return $this->pageFactory->create();
    }
}



?>