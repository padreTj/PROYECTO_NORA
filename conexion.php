<?php
$cons_usuario = "root";
$cons_contra = "";
$cons_base_datos = "proyecto_nora";
$cons_equipo = "localhost";

global $obj_conexion;
$obj_conexion = mysqli_connect($cons_equipo, $cons_usuario, $cons_contra, $cons_base_datos);
