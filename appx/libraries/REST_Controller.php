<?php
require(APPPATH.'/libraries/REST_Controller.php');
class Api extends REST_Controller{ 
      public function __construct() { 
          parent::__construct(); 
          $this->load->model('book_model'); 
      }
  
    ....
 
 }

 ?>