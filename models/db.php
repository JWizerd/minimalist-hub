<?php 
  class DB {

    protected $host    = 'localhost';
    protected $db      = 'minimalist_hub';
    protected $user    = 'root';
    protected $pass    = 'root';
    protected $charset = 'utf8';
    public $pdo;

    public function __construct() {
      $this->open_connection();
    }

    public function get_pdo_obj($pdo) {
      return $this->pdo;
    }

    public function open_connection() {
      $dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset";
      $options = [
          PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
          PDO::ATTR_EMULATE_PREPARES   => false,
      ];
      try {
        $this->pdo = new PDO($dsn, $this->user, $this->pass, $options);
      }
      catch(Exception $e) {
        echo $e->getMessage();
      }
    }
  
  }
?>