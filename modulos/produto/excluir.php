
<?php
include("classes/DB.class.php");
include("classes/Produto.class.php");
?>


<?php
if(isset($_GET['id']) AND is_numeric($_GET['id'])){
    $produto = new Produto($_GET['id']);
    $produto->excluir();
?>



<?php } ?>