
import java.sql.DriverManager;
import java.io.*;
import java.sql.*;
import javax.servlet.*;
import javax.servlet.http.*;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.Date;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author tobi
 */
public class UserBean {
    
    private String username;
    private Boolean priv;
    private Connection conn = null;
    private Statement stmt = null;
    private PreparedStatement preStmt = null;
    private ResultSet reSet = null;
    
    
    
    
    public UserBean(String user){
        username = user;
        
    }
    
     public String getUsername(){
        return username;
    }
    
    public void setUsername(String username){
        this.username = username;
    }
    
    public Boolean getPriv(){
        return priv;
    }
    
    public void setPriv(Boolean priv){
        this.priv = priv;
    }
    
    public boolean insertAccount(String fname, String lname, String pass, String ship, String bill, String card){
        
         try{
             
         Class.forName("com.mysql.jdbc.Driver"); 
         String query = "insert into customeraccounts( firstname,lastname,email,password,shippingAddress,billingAddress,cardNumber) values ( ?,?,?,?,?,?,?) ";
         String queryCheck = "select count(*) from customeraccounts where email = ?";
         
         conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/project3mvc"+ "?user="+"root" + "&password="+"");
      
        // stmt = conn.createStatement();
         
         preStmt = conn.prepareStatement(query);
         preStmt.setString(1, fname);
         preStmt.setString(2, lname);
         preStmt.setString(3, username);
         preStmt.setString(4,pass);
         preStmt.setString(5, ship);
         preStmt.setString(6, bill);
         preStmt.setString(7, card);
        
        
         int x =  preStmt.executeUpdate();
        
         if(x > 0){
             return true;
             
         }else{
             return false;
            }
 
        }catch(Exception E){
            System.out.println("reached 14 C ");
            return false;
        
        }
    }
        
    
    
    
    public Boolean checkPassword(String password){
        
        try{
         System.out.println("reached 1 ");
         String query = "Select * from customer accounts where email=? and password=?";
         Class.forName("com.mysql.jdbc.Driver"); 
         conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/project3mvc"+ "?user="+"root" + "&password="+"");
      
         stmt = conn.createStatement();
         System.out.println("reached 2 ");
         preStmt = conn.prepareStatement("select * from customeraccounts where email=? and password=?");
         preStmt.setString(1,username);
         preStmt.setString(2,password);
         System.out.println("reached 3 ");
         reSet = preStmt.executeQuery();
        
         if(reSet.next()){
             System.out.println("reached 4 A");
             return true;
         }else{
             System.out.println("reached 4 B ");
             return false;
         }
         
        }catch(Exception E){
            System.out.println("reached 4 C ");
        return false;
        }
    }
    
}
