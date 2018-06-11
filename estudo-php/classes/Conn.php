<?php
    class Conn{

        private $link;

        public function conectar(){
            $this->link = mysqli_connect("localhost", "root", "", "marmitas");
            
                if (!$this->link) {
                    echo "Error: Unable to connect to MySQL." . PHP_EOL;
                    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
                    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
                    exit;
                }
                echo "<br>Conexão estabelecida com Successo: " . PHP_EOL ."<br>";
                return $this->link;
        }

        public function closeConn(){
            mysqli_close($this->link);
            echo "<br>Conexão encerrada com sucesso...<br>";
        }
    }

?>