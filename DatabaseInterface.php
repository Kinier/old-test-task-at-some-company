<?php


interface DatabaseInterface{
    public function __construct();
    public function connect(): object;
}