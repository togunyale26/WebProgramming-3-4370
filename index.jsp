<%-- 
    Document   : index
    Created on : Nov 28, 2017, 5:13:13 PM
    Author     : tobi
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <body>
        <h1>Hello World!</h1>
        <p> The date is <%= new java.util.Date() %>
            
          <h1>Entry Form</h1>

        <form name="Name Input Form" action="response.jsp">
            Enter your name:
            <input type="text" name="name" />
            <input type="submit" value="OK" />
        </form>   
       
        <a href="newhtml.html">link text</a>
        
        <a href="LoginPage.jsp">link text</a>
    </body>
</html>
