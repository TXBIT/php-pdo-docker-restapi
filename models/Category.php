<?php
  class Category {
    // DB Stuff
    private $conn;
    private $table='categories';

    // Category Properties
    private $id;
    private $name;
    private $created_at;

    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }

    // Get Categories
    public function read() {
      // Create query
      $query = 'SELECT 
          id, 
          name, 
          created_at 
        FROM '
          . $this->table . ' 
        ORDER BY 
          created_at DESC
      ';

      // Prepare statement
      $stmt = $this->conn->prepare($query);

      // Execute statement
      $stmt->execute();

      return $stmt;
    }
  }
?>