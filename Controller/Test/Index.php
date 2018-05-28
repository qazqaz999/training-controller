<?php

namespace Josephson\TrainingController\Controller\Test;

class Index implements \Magento\Framework\App\ActionInterface
{
    /**
     * @var \Magento\Framework\Controller\Result\JsonFactory
     */
    protected $resultJsonFactory;

    /**
     * Class construct
     *
     * @param \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory
     */
    public function __construct(
        \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory
    ) {
        $this->resultJsonFactory = $resultJsonFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $result = $this->resultJsonFactory->create();
        $result->setData(['message' => 'Hello world c/o this Kontroler']);

        return $result;
    }
}
