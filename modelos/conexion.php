<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=sis_inventario",
			            "Agente",
			            "angel");

		$link->exec("set names utf8");

		return $link;

	}

}