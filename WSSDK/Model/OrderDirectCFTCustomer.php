<?php
/**
  * @filesource
  */
namespace WSSDK\Model;

use \WSSDK\Model as Model;

/***************
* Model
***************/
class OrderDirectCFTCustomer extends Model\Customer {

	protected $required = array('customer_email');

}
