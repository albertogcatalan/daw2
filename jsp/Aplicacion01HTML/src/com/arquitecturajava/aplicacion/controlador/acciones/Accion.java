package com.arquitecturajava.aplicacion.controlador.acciones;

import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

public abstract class Accion {

	/**
	 * @author      cecilio alvarez caules contacto@arquitecturajava.com
	 * @version     1.0                        
	 */
	public abstract String ejecutar(HttpServletRequest request,
			HttpServletResponse response);

	
	public  static Accion getAccion(String tipo) {

		Accion accion = null;
		try {
			accion = (Accion) Class.forName(getPackage()+"."+tipo+"Accion").newInstance();
		} catch (InstantiationException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		} catch (IllegalAccessException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		} catch (ClassNotFoundException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		return accion;

	}
	
	private static  String getPackage() {
		
		
		return Accion.class.getPackage().getName();
	}
}
