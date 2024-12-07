<?php
require_once __DIR__ . "/../controler/controler_produtos.php";

global $conn;
$controler = new controler_produtos($conn);
//print_r($controler->read());
$result = $controler->read();
while ($user_data = mysqli_fetch_array($result)) {
    echo "<li>" .
        "<div class='product-details'>" .
        "<p class='product-name'>" . $user_data['nome'] . "</p>" .
        "<p class='product-quantity'>" . "Quantidade: " .$user_data['estoque'] . "</p>" .
        "<p class='product-supplier'>" . "Fornecedor: " .$user_data['fornecedor'] . "</p>" .
        "<p class='precofinal'>" . "Preço: " .$user_data['preco'] . "</p>" .
        "</div>" .
        "<div class='buttons'>
                    <a href='/SistemaEstoque/view/public/detalhes.php?id=$user_data[id]'><button class='details-btn'>Detalhes</button></a>
                    <a href='/SistemaEstoque/view/public/editar.php?id=$user_data[id]'><button class='edit-btn'>Editar</button></a>
                    <a href='/SistemaEstoque/view/public/excluir.php?id=$user_data[id]'><button class='delete-btn'>Excluir </button></a>
                    </div>" .
        "</li>";
    //fazer um if caso aperte em excluir.
}
?>