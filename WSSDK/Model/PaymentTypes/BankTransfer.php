<?php

namespace WSSDK\Model\PaymentType;

use \WSSDK\Model as Model;

class BankTransfer extends PaymentType {

	protected $paymentTypeKey = "banktransfer";

	protected $required = array('customer_country');

	public function __construct(){
		$this->fields = (object) array(
			'customer_country' => null,
		);
	}

	/* SETTER */
	public function setCustomerCountry ($value){
		$this->fields->customer_country = $value;
	}

	/* GETTERS */
	public function getCustomerCountry (){
		return $this->fields->customer_country;
	}

}