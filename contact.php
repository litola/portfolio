<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
if(isset($_POST["submit"])){ 
      if(!$_POST['name']){
            $error= "<br \>Favor de llenar su nombre";
            
      }
      if(!$_POST['email']){
            $error.="<br \>Favor de llenar su correo electronico";
            
      }
      if(!$_POST['comment']){
            $error.= "<br \>Favor de poner su comentario";
            
      }
      if($_POST['email']!="" and !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){  /**PHP has filter validation **/ 
            $error.="<br \>Favor de verificar su correo electronico";    
      } 
      
      If($error){
      
       $result='<div class="alert alert-danger"> <strong>Hubo error(es) en la forma:</strong>'.$error.'</div>';
      
      }else{
            
      if(mail("ventas@ochocinco.com.mx","Comentariosde la pagina ", "Name: ".$_POST['name']."
           
           Email: ".$_POST['email']."
           
           Comment:".$_POST['comment'])){
      
      $result=' <div class="alert alert-success"> <strong>Gracias!</strong> Le responderemos a mas tardar en 24 horas.</div>';
      }else{
            $result='<div class="alert alert-danger">Disculpe, error al mandar su mensaje favor de intentarlo de nuevo</div>';
           }
        }
      
      }



?>



<!doctype html>
<html>
<head>
<title>My First Webpage</title> 
<meta charset="utf-8" />
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
<style>
        html, body {
            width:100%;
            height:100%;
            font-family:'Asap', sans-serif; 
        }
      .emailForm{
            border:1px solid grey;
            border-radius: 10px;
            margin-top:100px;
            margin-bottom:auto;
      }
        .emailForm label{text-align: left;}
      
      textarea{
            height: 160px;
      }
      
      form{
      padding-bottom: 20px;
            
      }
</style>
</head>

<body>


<div class="container">
      <div class="row">
            <div class="col-sm-8 col-sm-offset-2 emailForm">
                  
                  <h1>Contactanos</h1>
                  
                  <?php echo $result ?>
                  
                  <p class="lead">Envianos tus comentarios o dudas, con gusto te responderemos.</p>
                  
                  
                  <form method="post">
                        <div class="form-group">
                              <label for="name">Nombre</label>
                              <input name="name" type="text" class="form-control" placeholder="Ej. Juan Perez" value="<?php echo $_POST['name']; ?>"/>
                        </div>
                        <div class="form-group">
                              <label for="email">Email</label>
                              <input type="email" name="email"  class="form-control" placeholder="ejemplo@ochocinco.com.mx" value="<?php echo $_POST['email']; ?>"/>
                        </div>
                        <div class="form-group">
                              <label for="comment">Comentario</label>
                              <textarea name="comment"  class="form-control"><?php echo $_POST['comment']; ?> </textarea>
                        </div>
                        
                        <input type="submit" name="submit" class="btn btn-success btn-lg" value="Enviar">
                        
                        
                  </form>

            </div>
            
      </div>
      
</div>




<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>