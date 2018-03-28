<?php

namespace WSSDK\Model\PaymentType;

use \WSSDK\Model as Model;

class Yandex extends PaymentType {

	protected $paymentTypeKey = "yandex";

	protected $required = array('yandex_paymentmethod');

	public function __construct(){
		$this->fields = (object) array(
			'yandex_paymentmethod' => null,
		);
	}

	static $SUPPORTED_COUNTRY_CODES = array('GB','AC','PC');

	/* SETTER */
	/**
	 * 	PC - Yandex.Money e-wallet
	 *  AC - Bank Card
	 *  GP - Cash
	 * @param [type] $value [description]
	 */
	public function setCustomerCountry ($value){
		$this->fields->yandex_paymentmethod = $value;
	}

	/* GETTERS */
	public function getCustomerCountry (){
		return $this->fields->yandex_paymentmethod;
	}

}