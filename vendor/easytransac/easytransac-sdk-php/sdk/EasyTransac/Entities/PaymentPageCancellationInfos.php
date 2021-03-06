<?php

namespace EasyTransac\Entities;

/**
 * Represents the response of the request "cancelpage"
 * @author klyde
 * @copyright EasyTransac
 */
class PaymentPageCancellationInfos extends Entity
{
    /** @map:RequestId **/
    protected $requestId = null;
    /** @map:Status **/
    protected $status = null;
    /** @map:Date **/
    protected $date = null;
    /** @map:DateSent **/
    protected $dateSent = null;
    /** @map:Amount **/
    protected $amount = null;
    /** @map:3DSecure **/
    protected $secure = null;
    /** @map:PageUrl **/
    protected $pageUrl = null;
    /** @map:Email **/
    protected $email = null;
    /** @map:Language **/
    protected $language = null;
    
    public function getRequestId()
    {
        return $this->requestId;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getDateSent()
    {
        return $this->dateSent;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function getSecure()
    {
        return $this->secure;
    }

    public function getPageUrl()
    {
        return $this->pageUrl;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getLanguage()
    {
        return $this->language;
    }

    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;
        return $this;
    }

    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    public function setDateSent($dateSent)
    {
        $this->dateSent = $dateSent;
        return $this;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    public function setSecure($secure)
    {
        $this->secure = $secure;
        return $this;
    }

    public function setPageUrl($pageUrl)
    {
        $this->pageUrl = $pageUrl;
        return $this;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }
}

?>