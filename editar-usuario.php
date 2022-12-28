<h6>Edite as informações dos médicos</h6>

<?php


$sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];

$res = $conn->query($sql);
$row = $res->fetch_object();

?>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value ="editar">
    <input type="hidden" name="id" value ="<?php print $row->id;?>">

    
   <div class="mb-3"> NOME: </div>
    <input type="text" name="nome" class=" form-control"></div>
    
    <div class="mb-3"> CPF: </div>
    <input type="number" name="crm" class=" form-control"></div>

    
    <div class="mb-3"> TELEFONE:</div>
    <input type="number" name="telefone" class=" form-control"></div>
    

    <br>
    <div class="mb-3 text-center">
ESPECIALIDADE:
  <select name="esp" class="form">
    <option value="">Selecione uma especialidade</option>
    
    <option value="cardiologia">Cardiologia</option>
    <option value="dermatologia">Dermatologia</option>
    <option value="gastroenterologia">Gastroenterologia</option>
    <option value="geriatria">Geriatria</option>
    <option value="ginecologia">Ginecologia</option>
    <option value="neurologia">Neurologia</option>
    <option value="oftalmologia">Oftalmologia</option>
    <option value="oncologia">Oncologia</option>
    <option value="ortopedia">Ortopedia</option>
    <option value="otorrinolaringologia">Otorrinolaringologia</option>
    <option value="pediatria">Pediatria</option>
    <option value="psiquiatria">Psiquiatria</option>
    <option value="pneumologia">Pneumologia</option>
    <option value="reumatologia">Reumatologia</option>
  </select>
</div>

<div class="mb-3 text-center">
    <button type="submit" class="btn btn-primary">Enviar</button>

</form>
