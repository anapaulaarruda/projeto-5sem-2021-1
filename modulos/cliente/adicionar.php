
<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    include("classes/Cliente.class.php");
    $cliente = new Cliente();
    $cliente->setNome($nome);
    $cliente->setEmail($email);
    $cliente->setTelefone($telefone);

    echo "O nome do cliente digitado: ".$cliente->getNome()."<br/>";
    echo "O Email do cliente digitado: ".$cliente->getEmail()."<br/>";
    echo "O Telefone do cliente digitado: ".$cliente->getTelefone()."<br/>";

?>


<form method='post' action=''>
Nome:       <input type="text" name='nome'></br>
Email:      <input type="text" name='email'></br>
Telefone:   <input type="text" name='telefone'></br>

<input type='submit' name='salvar' value='Salvar'>

</form>