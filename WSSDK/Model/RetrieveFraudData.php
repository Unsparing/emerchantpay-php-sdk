<?php
/**
  * @filesource
  */
namespace WSSDK\Model;

use \WSSDK\Model as Model;

/***************
* Model
***************/
class RetrieveFraudData extends Model\BaseModel {

	protected $required = array('date');

	public function __construct(){

		$this->fields = (object) array(
			'date' => null,
		);

	}

	/* SETTERS */
	public function setDate ($value){

		if (!Model\BaseModel::isDateValid($value)){
			throw new \WSSDK\Model\ModelValidationException(get_class($this) . ": Date $value must match format YYYY-MM-DD", 1);
		}

		$this->fields->date = $value;
	}


	/* GETTERS */
	public function getDate (){
		return $this->fields->date;
	}



}