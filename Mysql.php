<?php


class Mysql implements IDB, IServer {

    public function connect() {
        echo "Conectando ao MySQL";
    }

    public function disconnect() {
        echo "Desconectando ao MySQL";
    }

    public function query($SQL) {
        echo "Executando comando SQL no MySQL Query " . $SQL;
    }

    public function ping($ip) {
        echo "Ping no MySQL " . $ip;
    }

}
