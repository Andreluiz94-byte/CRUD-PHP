<h6>Listagem dos usuários</h6>

<?php

$sql = "SELECT * FROM usuarios";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if($qtd > 0) {
    print "<table class ='table table hover table-striped table-bordered'>";

    print"<tr>";

    print "<th>#</th>";
print "<th>Nome</th>";
print "<th>CPF</th>";
print "<th>Telefone</th>";
print "<th>Especialidade</th>";
print "<th>Ações</th>";
print "</tr>";


    while($row= $res->fetch_object()){
       print"<tr>";
        print "<td>".$row->id."</td>";
        print "<td>".$row->nome."</td>";
        print "<td>".$row->crm."</td>";
        print "<td>".$row->telefone."</td>";
        print "<td>".$row->esp."</td>";
        
        print "<td>
        
    <button onclick= \"location.href='?page=editar&id=".$row->id."' ; \" 
    
    
    class='btn btn-success'> Editar </button>


        <button class onclick= \"if (confirm('Tem certeza? Que deseja excluir'))
        {location.href='?page=salvar&acao=excluir&id=".$row->id."' ;} 
        else {false;}\" 
        
        
        class ='btn btn-danger'> Excluir </button>
        
        </td>";
        
        print"</tr>";

    }
    print "</table>";
}else{
    print"<p class ='alert alert-danger'>NÃO ENCONTROU RESULTADO!</p>";
}


?>