<?xml version="1.0" encoding="UTF-8"?>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core"%>
<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<link rel="stylesheet" type="text/css" href="css/formato.css" />
<script type="text/javascript" src="js/validacion.js">
</script>
<title>Formulario Libro</title>
</head>
<body>
<form id="formularioInsercion" action="InsertarLibro.do">
<fieldset><legend>Formulario alta libro</legend>
<p><label for="isbn">ISBN:</label> <input type="text" id="isbn"
	name="isbn" /></p>
<p><label for="titulo">Titulo:</label> <input type="text"
	id="titulo" name="titulo" /></p>
<p><label for="categoria">Categoria :</label> 
<select	name="categoria">
	<c:forEach var="categoria" items="${listaDeCategorias}">
		<option value="${categoria}">
		${categoria}
		</option>
	</c:forEach>
</select> <br />
</p>
<p><input type="submit" value="Insertar" /></p>
</fieldset>
</form>

</body>
</html>