<?php

namespace WSSDK\Model\PaymentType;

use \WSSDK\Model as Model;

class POLi extends PaymentType {

	protected $paymentTypeKey = "poli";

	protected $required = array('poli_bankcountry');

	public function __construct(){
		$this->fields = (object) array(
			'poli_bankcountry' => null
		);
	}

	/* SETTER */
	public function setBankCountry ($value){
		$this->fields->poli_bankcountry = $value;
	}

	/* GETTERS */
	public function getBankCountry (){
		return $this->fields->poli_bankcountry;
	}

}