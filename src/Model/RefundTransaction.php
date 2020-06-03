<?php

declare(strict_types=1);

namespace PayNL\Sdk\Model;

/**
 * Class RefundTransaction
 *
 * @package PayNL\Sdk\Model
 */
class RefundTransaction implements ModelInterface
{
    /**
     * @var Amount
     */
    protected $amount;

    /**
     * @var Amount
     */
    protected $amountRefunded;

    /**
     * @var Refund
     */
    protected $refund;

    /**
     * @return Amount
     */
    public function getAmount(): Amount
    {
        if (null === $this->amount) {
            $this->setAmount(new Amount());
        }
        return $this->amount;
    }

    /**
     * @param Amount $amount
     *
     * @return RefundTransaction
     */
    public function setAmount(Amount $amount): self
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return Amount
     */
    public function getAmountRefunded(): Amount
    {
        if (null === $this->amountRefunded) {
            $this->setAmountRefunded(new Amount());
        }
        return $this->amountRefunded;
    }

    /**
     * @param Amount $amountRefunded
     *
     * @return RefundTransaction
     */
    public function setAmountRefunded(Amount $amountRefunded): self
    {
        $this->amountRefunded = $amountRefunded;
        return $this;
    }

    /**
     * @return Refund
     */
    public function getRefund(): Refund
    {
        if (null === $this->refund) {
            $this->setRefund(new Refund());
        }
        return $this->refund;
    }

    /**
     * @param Refund $refund
     *
     * @return RefundTransaction
     */
    public function setRefund(Refund $refund): self
    {
        $this->refund = $refund;
        return $this;
    }
}
