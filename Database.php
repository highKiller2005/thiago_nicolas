<?php

class Database {
    private $connection = null;

    public function __Construct(string $dbname, string $user, string $password, string $host) {
        $this->connection = new mysqli($host, $user, $password, $dbname);
    }

    public function close() {
        $this->connection->close();
    }

    public function query($raw) {
        return mysqli_query($this->connection, $raw);
    }

    public function getOne(string $table, int $id): ?array {
        $raw = "SELECT * FROM $table WHERE id = $id;";
        $response = $this->query($raw);

        if ($response->num_rows < 1) {
            return null;
        }

        return $response->fetch_assoc();
    }

    public function getMany($table) {
        $raw = "SELECT * FROM $table;";
        $response = $this->query($raw);

        $data = [];
        while ($row = $response->fetch_assoc()) {
            array_push($data, $row);
        }

        return $data;
    }

    public function create(array $array, string $table) {
        $names = array_keys($array);
        $values = array_values($array);
        
        $raw_names = implode(",", $names);
        $raw_values = implode(",", $values);
        
        $raw = "INSERT INTO $table ($raw_names) VALUES ($raw_values);";

        $this->query($raw);
    }

    public function delete($id, $table) {
        $raw = "DELETE FROM $table WHERE id = $id;";
    }

    public function edit($array, $table, $id) {    
        $raw = "UPDATE $table SET ";

        $put_array = array();
    
        foreach ($array as $chave => $valor) {
            array_push($put_array, "$chave = '$valor'");
        }

        $put_raw = implode(',', $put_array);
        $raw .= $put_raw;
        $raw .= " WHERE id = $id";
        
        $this->query($raw);
    }

}