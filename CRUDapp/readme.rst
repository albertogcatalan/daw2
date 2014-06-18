{\rtf1\ansi\ansicpg1252\cocoartf1187\cocoasubrtf340
{\fonttbl\f0\fmodern\fcharset0 Courier;}
{\colortbl;\red255\green255\blue255;}
\paperw11900\paperh16840\margl1440\margr1440\vieww20640\viewh9980\viewkind0
\deftab720
\pard\pardeftab720

\f0\fs24 \cf0 ===================================\
Gesti\'f3n Videojuegos\
===================================\
		\
:Fecha: 23 de Noviembre\
:Autor: Alberto Gonz\'e1lez\
:Version: 0.1 Beta\
		\
		\
		\
\'cdndice\
=======\
		\
* Estructura_\
* Componentes_\
* Instalar_\
		\
	.. raw:: pdf\
		\
  PageBreak\
		\
		\
		\
.. _Estructura:\
		\
Estructura\
===============\
				 \
La **estructura** de la app esta definida con las siguientes secciones: \
		\
* **Inicio**: es la p\'e1gina principal de la Web donde se puede ver el listado de videojuegos.\
		\
* **A\'f1adir juegos**: permite a\'f1adir videojuegos a la BD.\
\
* **Editar/Eliminar**: permite editar/eliminar el videojuego seleccionado en el listado principal.\
\
* **Listado de usuarios**: permite ver los usuarios registrados.\
		\
* **Nuevo usuario**: permite crear usuarios siempre que est\'e9s logeado.\
\
.. raw:: pdf\
		\
  PageBreak\
\
\
.. _Componentes:\
\
Componentes\
===============\
\
La aplicaci\'f3n est\'e1 desarrollada con **PHP** y **Bootstrap** con una estructura en la que se centra en el archivo app.php, que carga el listado de registros de la base de datos(los videojuegos).\
\
	.. raw:: pdf\
		\
  PageBreak\
\
\
.. _Instalar:\
\
Instalar\
===============\
\
* Para instalar esta aplicaci\'f3n debes primero crear la base de datos en mysql, importar el archivo videogames.sql o ejecutarlo en tu phpmyadmin.\
Una vez est\'e9 creada la BD copia todo el contenido de la carpeta de la aplicaci\'f3n a tu localhost o hosting.\
\
* Si accedes a la aplicaci\'f3n aparecer\'e1 la pagina de instalaci\'f3n donde tendr\'e1s que insertar un usuario que ser\'e1 administrador de la aplicaci\'f3n.\
Ten en cuenta que tendr\'e1s que a\'f1adir en el documento /includes/db.php el nombre de la BD, el usuario y contrase\'f1a de esa BD para que la aplicaci\'f3n te funcione.\
\
* Una vez hayas seguido todos los pasos ya podr\'e1s utilizar la aplicaci\'f3n, recuerda que el usuario con el que has instalado dicha aplicaci\'f3n es el \'fanico capaz de ver y crear otros usuarios.\
}