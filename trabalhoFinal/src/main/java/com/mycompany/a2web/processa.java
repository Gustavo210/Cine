package com.mycompany.a2web;
import java.io.IOException;
import java.io.PrintWriter;
import java.time.LocalDate;
import java.time.format.DateTimeFormatter;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
@WebServlet(name = "processa", urlPatterns = {"/processa"})
public class processa extends HttpServlet {

    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
    }

    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
        
        float gerais = Float.parseFloat(request.getParameter("gerais"));
        float tecnicos = Float.parseFloat(request.getParameter("tecnicos"));
        float lingua = Float.parseFloat(request.getParameter("lingua"));
        float total = (gerais*1 + tecnicos*2+ lingua*3)/6;
        String resultado;
        if(total>=80){
            resultado = "Aprovado";
        }else{
            resultado ="Reprovado";
        }
        request.setAttribute("gerais", gerais);
        request.setAttribute("tecnicos", tecnicos);
        request.setAttribute("lingua", lingua);
        request.setAttribute("total",total);
        request.setAttribute("resultado",resultado);
        
        request.getRequestDispatcher("unacine.jsp").forward(request, response);
    }

    public String getServletInfo() {
        return "Short description";
    }// </editor-fold>

}
