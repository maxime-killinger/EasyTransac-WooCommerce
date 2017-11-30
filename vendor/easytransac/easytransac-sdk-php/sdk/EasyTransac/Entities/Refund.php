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