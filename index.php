<!doctype html>
<html lang="pt=br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Cadastro</title>
  </head>
  
  <!-- Define os estilos aqui */
  <style> -->
  
  <style>  
  body{
    background-color: #ADD8E6;
    background-color: hsl(200, 100%, 95%); /* cor mais clara */

    margin-top: 20px;
  
  }

  h1 {
    text-align: center;
    font-family: Arial, sans-serif;
    font-size: 36px;


  }

  h3 {
    text-align: center;
    font-family: Arial, sans-serif;
    font-size: 36px;


  }
  nav{
    background-color: #ADD8E6;
    background-color: hsl(200, 100%, 95%); /* cor mais clara */
    
    margin-left: 400px;
  margin-right: 400px;
  border-radius:10px; 
    
  }



  h4 {
    text-align: center;
    font-family: Arial, sans-serif;

  }
  .navbar-nav {
  text-align: left;
  justify-content: space-between;
}




.collapse{

  background-color: lightgreen; 
  border-radius: 20px;
  font-size: 20px;
  color: #CC0000; 
  
}

h6 {
  text-align: center;  
}
footer {
  text-align: center;  

  margin-top: 50px;
  margin-right: 10px;
  margin-bottom: 50px;
  margin-left: 10px;
}


  </style>

  <body>
    


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Cadastro</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=novo">NOVO USUÁRIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=listar">LISTAGEM DE USUÁRIOS</a>
        </li>
       
      </ul>
    </div>
  </div>
</nav>  
<div class="container">
    <div class= "row">
        <div class="col mt-5">
        <h1>Cadastro de usuários</h1><br>
        <br><br>
       
        <?php

        include("config.php");

        print " <h6 > (Crud) Crie, leia, atualize e exclua um usuário<h5>";
        print "<br>";  print "<br>"; 
  
switch (@$_REQUEST["page"]) {


   

      case "novo":
        print "<img src='https://e-tinet.com/wp-content/uploads/2020/02/adicionar-usuario-no-linux.jpg' 
        alt='Welcome image' width='500' height='400' style='display: block; margin: auto;'>";
        print "<br>";  print "<br>"; 
        print " <h6 > (Crud) Crie, leia, atualize e exclua usuário <h5>";

      
        include("novo-usuario.php");
        
        
        break;
    case "listar":
        include("listar-usuario.php");
        break;

        case "salvar":
            include("salvar-usuario.php");
        
            break;

            case "editar":
                include("editar-usuario.php");
    default:
    
    

      }
 
?>
</div>
</div>
</div>
<footer>
  <p>Copyright 2022 </p> Contato: <a href="andrepinnola.1994@gmail.com">andrepinnola.1994@gmail.com</a></p>
</footer>


</div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>