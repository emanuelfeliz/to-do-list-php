<?php
$servername = "localhost"; // Cambia 3306 al puerto que esté usando MySQL  
$username = "root"; // Cambia si tienes un usuario diferente
$password = "";     // Cambia si tienes una contraseña
$dbname = "todolist_db";

// Crear conexión
$conn = new mysqli($servername, $username, $password);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Crear la base de datos
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";


// Seleccionar la base de datos
$conn->select_db($dbname);

// Crear la tabla
$sql = "CREATE TABLE IF NOT EXISTS tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";


