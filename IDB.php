<?php


interface IDB {
    public function connect();
    public function disconnect();
    public function query($SQL);
}
