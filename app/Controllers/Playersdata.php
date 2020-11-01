<?php
 namespace App\Controllers;
 class Playersdata extends \CodeIgniter\Controller
 {
 public function index()
 {
 // connect to the model
 $places = new \App\Models\Playersinfo();
 // retrieve all the records
 $records = $places->findAll();
 // JSON encode and return the result
 return json_encode($records);
 }
 }
