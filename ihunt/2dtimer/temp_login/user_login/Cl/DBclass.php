<?php

class Cl_DBclass
{
  /**
   * @var $con will hold database connection
   */
  public $con;
  
  /**
   * This will create Database connection
   */
  public function __construct()
  {
    $this->con = mysqli_connect('107.155.116.153', 'dbadmin', 'zyqugagu5', 'zadmin_instincts');
    if( mysqli_connect_error()) echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
}