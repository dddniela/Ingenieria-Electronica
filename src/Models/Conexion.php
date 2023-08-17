<?php
    define("host", "localhost");
    define("user", "root");
    define("pass", "");
    define("nameDB", "dashboardCarreras");
    define("port", 3306);

    class Conexion
    {
        private $db;

        // Método para establecer la conexión
        public function connect()
        {
            try {
                $this->db = new mysqli(host, user, pass, nameDB, port);
                $this->db->query('set character_set_client=utf8');
                $this->db->query('set character_set_connection=utf8');
                $this->db->query('set character_set_results=utf8');
                $this->db->query('set character_set_server=utf8');
            } catch (Exception $err) {
                die($err);
            }
        }

        // Métodos para obtener y establecer la conexión
        public function getDB()
        {
            return $this->db;
        }

        public function setDB($mysql)
        {
            $this->db = $mysql;
        }
    }
