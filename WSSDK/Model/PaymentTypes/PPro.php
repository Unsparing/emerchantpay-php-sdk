<?php

namespace WSSDK\Model\PaymentType;

use \WSSDK\Model as Model;

class PPro extends PaymentType {

	protected $paymentTypeKey = "ppro";

	protected $required = array('ppro_paymenttype');

	private $ppro_paymenttype;

	public function __construct(iPProPaymentTypes $ppro_paymenttype){

		$this->ppro_paymenttype = $ppro_paymenttype;

		$this->fields = (object) array(
			'ppro_paymenttype' => $ppro_paymenttype->getKey(),
			'ppro_email' => null,
			'ppro_mobile' => null,
			'ppro_bic' => null,
			'ppro_iban' => null
		);

		switch($this->fields->ppro_paymenttype){
			case 'przelewy24':
				$this->required[] = 'ppro_email';
				break;
			case 'qiwi':
				$this->required[] = 'ppro_mobile';
				break;
			case 'giropay':
				$this->required[] = 'ppro_bic';
				$this->required[] = 'ppro_iban';
				break;
		};
	}

	/* SETTER */
	public function setEmail ($value){
		$this->fields->ppro_email = $value;
	}
	public function setMobile ($value){
		$this->fields->ppro_mobile = $value;
	}
	public function setBic ($value){
		$this->fields->ppro_bic = $value;
	}
	public function setIban ($value){
		$this->fields->ppro_iban = $value;
	}

	/* GETTERS */
	public function getPproPaymentType (){
		return $this->ppro_paymenttype;
	}
	public function getEmail (){
		return $this->fields->ppro_email;
	}
	public function getMobile (){
		return $this->fields->ppro_mobile;
	}
	public function getBic (){
		return $this->fields->ppro_bic;
	}
	public function getIban (){
		return $this->fields->ppro_iban;
	}

};

abstract class iPProPaymentTypes {
	protected $key, $currences, $countries;
	public function getKey(){ return $this->key; }
	public function getSupportedCurrences(){ return $this->currences; }
	public function getSupportedCountries($currency){ return $this->countries[$currency]; }
};


class Mybank extends iPProPaymentTypes {
	protected
		$key = 'mybank',
		$currences = array(\WSSDK\CURRENCY::EUR),
		$countries = array(
			"EUR" => array('BE', 'FR', 'IT', 'LU')
		);
};

class Alipay extends iPProPaymentTypes {
	protected
		$key = 'alipay',
		$currences = array(\WSSDK\CURRENCY::EUR),
		$countries = array(
			"EUR" => array('CN')
		);
};

class Astropaycard extends iPProPaymentTypes {
	protected
		$key = 'astropaycard',
		$currences = array(\WSSDK\CURRENCY::USD),
		$countries = array(
			"USD" => array('AR', 'BO', 'BR', 'CL', 'CN', 'CO', 'CR', 'MX', 'PE')
		);
};

class Astropaydirect extends iPProPaymentTypes {
	protected
		$key = 'astropaydirect',
		$currences = array(\WSSDK\CURRENCY::USD),
		$countries = array(
			"USD" => array('AR', 'BR', 'CL', 'CN', 'CO', 'MX', 'PE', 'TR', 'UY')
		);
};

class Bcmc extends iPProPaymentTypes {
	protected
		$key = 'bcmc',
		$currences = array(\WSSDK\CURRENCY::EUR),
		$countries = array(
			"EUR" => array('BE')
		);
};

class Giropay extends iPProPaymentTypes {
	protected
		$key = 'giropay',
		$currences = array(\WSSDK\CURRENCY::EUR),
		$countries = array(
			"EUR" => array('DE')
		);
};
class Przelewy24 extends iPProPaymentTypes {
	protected
		$key = 'przelewy24',
		$currences = array(\WSSDK\CURRENCY::PLN),
		$countries = array(
			"PLN" => array('Pl')
		);
};
class Eps extends iPProPaymentTypes {
	protected
		$key = 'eps',
		$currences = array(\WSSDK\CURRENCY::EUR),
		$countries = array(
			"EUR" => array('AT')
		);
};
class Teleingreso extends iPProPaymentTypes {
	protected
		$key = 'teleingreso',
		$currences = array(\WSSDK\CURRENCY::EUR),
		$countries = array(
			"EUR" => array('ES')
		);
};
class Ideal extends iPProPaymentTypes {
	protected
		$key = 'ideal',
		$currences = array(\WSSDK\CURRENCY::EUR),
		$countries = array(
			"EUR" => array('NL')
		);
};
class Qiwi extends iPProPaymentTypes {
	protected
		$key = 'qiwi',
		$currences = array(\WSSDK\CURRENCY::RUB, \WSSDK\CURRENCY::EUR),
		$countries = array(
			"RUB" => array('RU'),
			"EUR" => array('RU')
		);
};
class Safetypay extends iPProPaymentTypes {
	protected
		$key = 'safetypay',
		$currences = array(\WSSDK\CURRENCY::USD, \WSSDK\CURRENCY::EUR),
		$countries = array(
			"USD" => array('CA', 'MX', 'NI', 'CR', 'PA', 'CO', 'PE', 'BR', 'NL'),
			"EUR" => array('CA', 'MX', 'NI', 'CR', 'PA', 'CO', 'PE', 'BR', 'NL')
		);
};
class Trustpay extends iPProPaymentTypes {
	protected
		$key = 'trustpay',
		$currences = array(
			\WSSDK\CURRENCY::EUR,
			\WSSDK\CURRENCY::BAM,
			\WSSDK\CURRENCY::BGN,
			\WSSDK\CURRENCY::CZK,
			\WSSDK\CURRENCY::EEK,
			\WSSDK\CURRENCY::HKR,
			\WSSDK\CURRENCY::HUF,
			\WSSDK\CURRENCY::LTL,
			\WSSDK\CURRENCY::LVL,
			\WSSDK\CURRENCY::ROM,
			\WSSDK\CURRENCY::_TRY__
		),
		$countries = array(
			'EUR' => array('BA', 'BG', 'CZ', 'EE', 'FI', 'GB', 'HR', 'RO', 'SK', 'TR'),
			'BAM' => array('BA'),
			'BGN' => array('BG'),
			'CZK' => array('CZ'),
			'EEK' => array('EE'),
			'HKR' => array('HR'),
			'HUF' => array('HU'),
			'LTL' => array('LT'),
			'LVL' => array('LV'),
			'ROM' => array('RO'),
			'_TRY_' => array('TR')
		);
};