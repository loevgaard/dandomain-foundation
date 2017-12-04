<?php

namespace Loevgaard\DandomainFoundationBundle\Updater;

use Loevgaard\DandomainFoundation;
use Loevgaard\DandomainFoundation\Entity\Generated\PaymentMethodInterface;
use Loevgaard\DandomainFoundation\Entity\PaymentMethod;
use Loevgaard\DandomainFoundationBundle\Entity\PaymentMethodRepositoryInterface;

class PaymentMethodUpdater
{
    /**
     * @var PaymentMethodRepositoryInterface
     */
    protected $paymentMethodRepository;

    public function __construct(PaymentMethodRepositoryInterface $paymentMethodRepository)
    {
        $this->paymentMethodRepository = $paymentMethodRepository;
    }

    /**
     * This method is called when an payment method is embedded in another object, i.e. orders
     *
     * @param array $data
     * @param string $currency
     * @return PaymentMethodInterface
     */
    public function updateFromEmbeddedApiResponse(array $data, string $currency) : PaymentMethodInterface
    {
        $paymentMethod = $this->getPaymentMethod($data['id']);

        if(!$paymentMethod->getId()) {
            // only update when we create a new entity because this is the embedded method
            $paymentMethod
                ->setFee(DandomainFoundation\createMoney((string)$currency, $data['fee']))
                ->setFeeInclVat($data['feeInclVat'])
                ->setName($data['name']);
        }

        return $paymentMethod;
    }

    private function getPaymentMethod(int $externalId) : PaymentMethodInterface
    {
        $paymentMethod = $this->paymentMethodRepository->findOneByExternalId($externalId);
        if(!$paymentMethod) {
            $paymentMethod = new PaymentMethod();
            $paymentMethod->setExternalId($externalId);
        }

        return $paymentMethod;
    }
}