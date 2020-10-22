<?php

require_once dirname(__FILE__)."/DBAuth.php";

$dbauth = new DBAuth;

class DB{
   static private $instance = null;
   
   static public function getInstance(){
      if (self::$instance == null) {
         self::$instance = new DB();
      }
   
      return self::$instance;
   }
   
   public function mysqlConnect(){ // connects to DB, needs mysqlAuthData.php
      global $dbauth;
      
      if (!mysql_connect($dbauth->host, $dbauth->user, $dbauth->pass)){
         return -1;//pe('Connecting to mysql server!');
         exit();
      }
      
      if (!mysql_select_db($dbauth->db)){
         return -1; //pe('Connecting to db!');
         exit();
      }
      
      return 0;   
   }
   
   public function db_fetchone_array($query, $line=0, $file_name='filename'){ // extracts one string from table
      $res = $this->db_query($query, $line, $file_name);
      $row = mysql_fetch_array($res, MYSQL_ASSOC);
      mysql_free_result($res);
      return ($row)? $row : array();
   }
   
   public function db_fetchall_array($query, $line=0, $file_name='filename'){ // extracts all stings from table
      $res = $this->db_query($query, $line, $file_name);
      while($row = mysql_fetch_array($res, MYSQL_ASSOC))
         $rows[] = $row;
      mysql_free_result($res);
      return ($rows)? $rows : array();
   }
   
   public function db_query($query, $line=0, $file_name='filename'){ // executes any query
      $res = mysql_query($query) or die("Error: wrong SQL query #$query#;  ".mysql_error()." in ".$file_name." on line ".$line);
      return $res;
   }
   
   public function testClass(){
      return "everything is ok;";
   }
   
   public function testSubClass(){
      global $dbauth;
      return $dbauth->testClass();
   }
}
?>