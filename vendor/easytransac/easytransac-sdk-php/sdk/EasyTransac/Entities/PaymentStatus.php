<?php

namespace EasyTransac\Entities;

/**
 * Represents arguments of the request "PaymentStatus" 
 * @author klyde
 * @copyright EasyTransac
 */
class PaymentStatus extends Entity
{
    /** @map:Tid **/
    protected $tid = null;
	/** @map:OrderId **/
	protected $orderId = null;
	/** @map:RequestId **/
	protected $requestId = null;
    /** @map:Language **/
    protected $language = null;

    public function setLanguage($value)
    {
        $this->language = $value;
        return $this;
    }

    public function getLanguage()
    {
        return $this->language;
    }

    public function setTid($value)
    {
        $this->tid = $value;
        return $this;
    }

    public function getTid()
    {
        return $this->tid;
    }

	public function setOrderId($value)
	{
		$this->orderId = $value;
		return $this;
	}

	public function getOrderId()
	{
		return $this->orderId;
	}

	public function setRequestId($value)
	{
		$this->requestId = $value;
		return $this;
	}

	public function getRequestId()
	{
		return $this->requestId;
	}
}

?>