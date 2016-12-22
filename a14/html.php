<html>
<head>
<style>
body {
    background-color: steelBlue;
}

h2 {
	font-family: arial;
    text-align: center;
	font-size: 25px;
}

p {
    font-family: verdana;
	text-align: center;
    font-size: 15px;
	 
	
}
input[type=text], select {
    width: 20%;
    padding: 5px 8px;
    margin: 4px 0;
    border-radius: 4px;
    
}

input[type=submit] {
    width: 15%;
    background-color: #4CAF50;
    color: white;
    padding: 10px 10px;
    margin: 4px 0;
	border-radius: 4px;
    
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 10px;
}
</style>
</head>
<body>
<br>
<br>
<h2>INGRESE LOS DATOS DEL ALUMNO:</h2>
<div>
<form action="php.php" method="post" name="Ampa" >
 <p><b>Nombre:<input type="text" name="nombre"  />
 <p>Apellidos:<input type="text" name="apellidos"  />
     <p>Curso:<select name="cu">
  <option value="1">1º</option>
  <option value="2">2º</option>
  </select>
	 <p>Ciclo:<select name="ci">
  <option value="DAW">DAW</option>
  <option value="DAM">DAM</option>  
</select>
</p>
<p>Calificacion PROG:<input type="text" name="pro"  />
<p>Calificacion ED:<input type="text" name="ed"  />
<p>Calificacion LLMM:<input type="text" name="llmm"  />
<p>Calificacion BBDD:<input type="text" name="bbdd"  />
<p><input type="submit" value="Enviar" /></b></p>
</form>
</div>
</body>
</html>