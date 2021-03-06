<?php

namespace EasyTransac\Entities;

/**
 * Represents a bank transfer
 * @author klyde
 * @copyright EasyTransac
 */
class BankTransferInfos extends Entity
{
	/** @map:Id **/
	protected $id = null;
	/** @map:Date **/
	protected $date = null;
	/** @map:Status **/
	protected $status = null;
	/** @map:Amount **/
	protected $amount = null;
	/** @map:FixFees **/
	protected $fixFees = null;
	/** @map:Iban **/
	protected $iban = null;
	/** @map:Bic **/
	protected $bic = null;
	/** @map:Reference **/
	protected $reference = null;
	
	public function getId()
	{
		return $this->id;
	}

	public function getDate()
	{
		return $this->date;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function getAmount()
	{
		return $this->amount;
	}

	public function getFixFees()
	{
		return $this->fixFees;
	}

	public function getIban()
	{
		return $this->iban;
	}

	public function getBic()
	{
		return $this->bic;
	}

	public function getReference()
	{
		return $this->reference;
	}

	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}

	public function setDate($date)
	{
		$this->date = $date;
		return $this;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		return $this;
	}

	public function setAmount($amount)
	{
		$this->amount = $amount;
		return $this;
	}

	public function setFixFees($fixFees)
	{
		$this->fixFees = $fixFees;
		return $this;
	}

	public function setIban($iban)
	{
		$this->iban = $iban;
		return $this;
	}

	public function setBic($bic)
	{
		$this->bic = $bic;
		return $this;
	}

	public function setReference($reference)
	{
		$this->reference = $reference;
		return $this;
	}
}

?>