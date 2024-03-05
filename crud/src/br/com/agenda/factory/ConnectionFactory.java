package br.com.agenda.factory;

import java.sql.Connection;
import java.sql.DriverManager;


public class ConnectionFactory {

	//Nome do usuario
	private static final String USERNAME = "root";

	//Senha do banco
	private static final String PASSWORD = "";
	
	//Caminho banco de dados
	private static final String DATABASE_URL = "jdbc:mysql://localhost:3306/agenda";
	
	/* 
	 * Conexão do banco de dados 
	 */
	public static Connection createConnectionToMySQL() throws Exception {
		Class.forName("com.mysql.jdbc.Driver");
		
		
		
		Connection connection = DriverManager.getConnection(DATABASE_URL, USERNAME, PASSWORD);
		
		return connection;
	}
	public static void main (String[] args) {
		Connection con = createConnectionToMySQL(); 
		
		if(con != null) {
			System.out.println("Conexão obtida com sucesso");
			con.close();
		}
	}
}
