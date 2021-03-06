<?php

namespace EasyTransac\Entities;

/**
 * Represents arguments of the request "PaymentRefund"
 * @author klyde
 * @copyright EasyTransac
 */
class Refund extends Entity
{
    /** @map:Tid **/
    protected $tid = null;
    /** @map:Language **/
    protected $language = null;
    /** @map:Amount **/
    protected $amount = null;
    /** @map:Reason **/
    protected $reason = null;

    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }
    
    public function getReason()
    {
        return $this->reason;
    }

    public function setReason($reason)
    {
    	$this->reason = $reason;
        return $this;
    }
    
    public function getTid()
    {
        return $this->tid;
    }

    public function setTid($tid)
    {
        $this->tid = $tid;
        return $this;
    }

    public function getLanguage()
    {
        return $this->language;
    }

    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

}

?>