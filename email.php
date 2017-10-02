
<?php
 
 
$nome = $_POST['nome'];
$email = $_POST['email'];
$fone = $_POST['fone'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$msg = $_POST['mensagem'];
 
 
$headers = "From: ". $nome;
 
$corpoemail = 'Contato Via site
             
               Nome: '   .$nome.' 
               Email: '   .$email.'
               Fone: ' .$fone.' 
               CPF: ' .$cpf.'
               Endereço: ' .$endereco.'
               Cidade: ' .$cidade.'
               Estado: ' .$estado.'
               Mensagem: '.$msg.' ';
 
 
 
 
if(mail("clayton.kuiaski@gmail.com", "Cadastro Via Site Tupperware",$corpoemail,$headers)){
 
 
       echo "<script>alert('Cadastro enviado com sucesso!');document.location='index.html';</script>";
 
} else{
 
      echo "<script>alert('Erro ao enviar, tente diretamente pelo claytonkuiaski@hotmail.com');</script>";  
 
}
