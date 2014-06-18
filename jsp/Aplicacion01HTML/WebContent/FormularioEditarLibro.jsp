<?xml version="1.0" encoding="UTF-8"?>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core"%>

<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<link rel="stylesheet" type="text/css" href="css/formato.css" />
<script type="text/javascript" src="js/validacion.j
	
">
	
</script>
<title>Formulario Libro</title>
</head>
<body>
<form id="formularioEdicion" action="ModificarLibro.do">
<fieldset><legend>Formulario alta libro</legend>
<p><label for="isbn">ISBN:</label> <input type="text" id="isbn"
	name="isbn" value="${libro.isbn}" /></p>
<p><label for="titulo">Titulo:</label> <input type="text"
	id="titulo" name="titulo" value="<c:out value="${libro.titulo}"/>" " /></p>
<p><label for="categoria">Categoria :</label> <select
	name="categoria">

	<c:forEach var="categoria" items="${listaDeCategorias}">
		<option value="${categoria}">${categoria}</option>
	</c:forEach>



</select> <br />
</p>
<p><input type="submit" value="Salvar" /></p>
</fieldset>
</form>

</body>
</html>