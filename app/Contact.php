<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    /**
     * 
     * Create a new message instance
     * 
     * @return void
     */

     public function __construct()
     {
         //
     }



     /**
      * 
      * @return $this
      */

      public function build()
          {
              return $this->view('view.name');
          }
      
}
