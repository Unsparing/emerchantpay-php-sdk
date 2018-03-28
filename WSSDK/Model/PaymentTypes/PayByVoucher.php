<?php

namespace WSSDK\Model\PaymentType;

use \WSSDK\Model as Model;

class PayByVoucher extends PaymentType {

	protected $paymentTypeKey = "genesispaybyvoucher";

	protected $required = array('customer_id_number', 'customer_bank_id', 'bank_account_number');

	/**
	 * [Helper array of supported bank Ids to be used with the setCustomerBankId method]
	 * @var array
	 */
	static $BANK_IDS = array(
		'ICBC' => array('ICBC', 'Industrial and Commercial Bank of China'),
		'CMBCHINA' => array('CMBCHINA', 'China Merchants Bank'),
		'ABC' => array('ABC', 'Agricultural Bank of China'),
		'CCB' => array('CCB', 'China Construction Bank'),
		'BCCB' => array('BCCB', 'Bank of Beijing'),
		'BOCO' => array('BOCO', 'Bank of Communications'),
		'CIB' => array('CIB', 'Industrial Bank'),
		'NJCB' => array('NJCB', 'Bank of Nanjing'),
		'CMBC' => array('CMBC', 'China Minsheng Banking Corp Ltd'),
		'CEB' => array('CEB', 'China Everbright Bank'),
		'BOC' => array('BOC', 'Bank of China'),
		'PINGANBANK' => array('PINGANBANK', 'Ping An Bank'),
		'HKBEA' => array('HKBEA', 'Bank of East Asia'),
		'NBCB' => array('NBCB', 'Bank of Ningbo'),
		'ECITIC' => array('ECITIC', 'China Citic Bank'),
		'SDB' => array('SDB', 'Shenzhen Development Bank'),
		'GDB' => array('GDB', 'Guangdong Development Bank'),
		'SHB' => array('SHB', 'Bank of Shanghai'),
		'SPDB' => array('SPDB', 'Shanghai Pudong Development Bank'),
		'POST' => array('POST', 'China Post'),
		'BJRCB' => array('BJRCB', 'BEIJING RURAL COMMERCIAL BANK'),
		'HXB' => array('HXB', 'Hua Xia Bank Co Ltd'),
		'HZBANK' => array('Hua Xia Bank Co Ltd', 'Bank of Hangzhou'),
		'SRCB' => array('SRCB', 'Shanghai Rural Commercial Bank')
	);

	public function __construct(){
		$this->fields = (object) array(
			'customer_id_number' => null,
			'customer_bank_id' => null,
			'bank_account_number' => null
		);
	}

	/* SETTER */
	/**
	 * Customer ID number. Must be a 18 digits
	 * valid ID Card number/Resident Identity
	 * Card]. ISO 7064:1983
	 * @param Number $value
	 */
	public function setCustomerIdNumber ($value){
		$this->fields->customer_id_number = $value;
	}
	public function setCustomerBankId ($value){
		$this->fields->customer_bank_id = $value;
	}
	public function setBankAccountNumber ($value){
		$this->fields->bank_account_number = $value;
	}

	/* GETTERS */
	public function getCustomerIdNumber (){
		return $this->fields->customer_id_number;
	}
	public function getCustomerBankId (){
		return $this->fields->customer_bank_id;
	}
	public function getBankAccountNumber (){
		return $this->fields->bank_account_number;
	}

}