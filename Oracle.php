<?php


class Oracle implements IDB, IServer {
    
    public function connect() {
        echo "Conectando ao Oracle";
    }

    public function disconnect() {
        echo "Desconectando do Oracle";
    }

    public function query($SQL) {
        echo "Executando comando SQL no Oracle " . $SQL;
    }

    public function ping($ip) {
        echo "Ping no Oracle " . $ip;
    }

}
