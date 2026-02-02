<?php 

$host = "db"; 

$user = "usuario1"; 

$password = "contrasenyaUsuario1"; 

$database = "cine"; 

 

$conn = new mysqli($host, $user, $password, $database); 

 

if ($conn->connect_error) { 

    die("Conexión fallida: " . $conn->connect_error); 

} 

 

echo "<h1>Conexión exitosa a la base de datos</h1>"; 

 

$sql = "SELECT * FROM peliculas"; 

$result = $conn->query($sql); 

 

if ($result->num_rows > 0) { 

    echo "<table border='1'>"; 

    echo "<tr><th>ID</th><th>Título</th><th>Director</th></tr>"; 

    while($row = $result->fetch_assoc()) { 

        echo "<tr><td>".$row["id"]."</td><td>".$row["titulo"]."</td><td>".$row["director"]."</td></tr>"; 

    } 

    echo "</table>"; 

} else { 

    echo "0 resultados"; 

} 

 

$conn->close(); 

?> 