<?php
namespace App\Models;
use App\Models\Simple\CSVModel;

/*
 * Mock travel destination data.
 * Note that we don't have to extend CodeIgniter's model for now
 */

class Playersinfo extends CSVModel{

    //mock data : an array of records
   protected $origin = WRITEPATH . 'data/playersdata.csv';
   protected $keyField = 'id';
   protected $validationRules = [];
    
    	


 

}
