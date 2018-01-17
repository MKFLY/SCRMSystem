<?php 
	if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

	/**
	*  
	*/
	class myMod extends SugarBean
	{
		var $field_name_map = array();
		// // database table columns
		var $id; 
		var $name;
		var $remark;
		var $telphone;


		var $table_name = "mymods";//数据库表名(必需)
	    var $module_dir = 'myMod';//必需
	    var $object_name = "myMod";//必需
	    var $importable = true;
	    var $new_schema = true;//在增加记录时起作用
	 //    
	 //    var $date_entered;
		// var $date_modified;
		// var $modified_user_id;
		// var $assigned_user_id;
		// var $annual_revenue;
		// var $billing_address_street;
		// var $billing_address_city;
		// var $billing_address_state;
		// var $billing_address_country;
		// var $billing_address_postalcode;

	 //    var $billing_address_street_2;
	 //    var $billing_address_street_3;
	 //    var $billing_address_street_4;

		// var $description;
		// var $email1;
		// var $email2;
		// var $email_opt_out;
		// var $invalid_email;
		// var $employees;
		// var $id;
		// var $industry;
		// var $name;
		// var $ownership;
		// var $parent_id;
		// var $phone_alternate;
		// var $phone_fax;
		// var $phone_office;
		// var $rating;
		// var $shipping_address_street;
		// var $shipping_address_city;
		// var $shipping_address_state;
		// var $shipping_address_country;
		// var $shipping_address_postalcode;

	 //    var $shipping_address_street_2;
	 //    var $shipping_address_street_3;
	 //    var $shipping_address_street_4;

	 //    var $campaign_id;

		// var $sic_code;
		// var $ticker_symbol;
		// var $account_type;
		// var $website;
		// var $custom_fields;

		// var $created_by;
		// var $created_by_name;
		// var $modified_by_name;

		// // These are for related fields
		// var $opportunity_id;
		// var $case_id;
		// var $contact_id;
		// var $task_id;
		// var $note_id;
		// var $meeting_id;
		// var $call_id;
		// var $email_id;
		// var $member_id;
		// var $parent_name;
		// var $assigned_user_name;
		// var $account_id = '';
		// var $account_name = '';
		// var $bug_id ='';
		// var $module_dir = 'Accounts';
		// var $emailAddress;


		// var $table_name = "accounts";
		// var $object_name = "Account";
		// var $importable = true;
		// var $new_schema = true;
	    
		


		function __construct()
		{
			# code...
			parent::__construct();

			// $this->setupCustomFields('myMod');

			// foreach ($this->field_defs as $field)
			// {
			// 	if(isset($field['name']))
			// 	{
			// 		$this->field_name_map[$field['name']] = $field;
			// 	}
			// }

		}

		function myMod(){

			$deprecatedMessage = 'PHP4 Style Constructors are deprecated and will be remove in 7.8, please update your code';
	        if(isset($GLOBALS['log'])) {
	            $GLOBALS['log']->deprecated($deprecatedMessage);
	        }
	        else {
	            trigger_error($deprecatedMessage, E_USER_DEPRECATED);
	        }
	        self::__construct();

		}



		// function get_list_view_data(){
		// 	$field_list = $this->get_list_view_array();
		// 	return $field_list;
		// }


		function get_list_view_data(){

			$temp_array = parent::get_list_view_data();

			// $temp_array["ENCODED_NAME"] = $this->name;

			// if(!empty($this->billing_address_state))
			// {
			// 	$temp_array["CITY"] = $this->billing_address_city . ', '. $this->billing_address_state;
			// }
			// else
			// {
			// 	$temp_array["CITY"] = $this->billing_address_city;
			// }
			// $temp_array["BILLING_ADDRESS_STREET"]  = $this->billing_address_street;
			// $temp_array["SHIPPING_ADDRESS_STREET"] = $this->shipping_address_street;

			return $temp_array;
		}

		function getmymod(){
			$query="";
			$baseQuery = 'select id, name, remark, telphone  from mymods ';
			$query=$baseQuery;

			// if(!empty($query)){
			// 		$rows = array();
			// 		global $db;
			// 		$result = $db->query($query);
			// 		$i=-1;
			// 		while(($row=$db->fetchByAssoc($result)) != null) {
			// 			$i++;
			// 			$rows[$i] = $row;
			// 		}
			// 		if ($i==-1) return null;

			// 		return $rows;
			// 	}
			// 	return null;
				return $query;
			}

		
	}

 ?>