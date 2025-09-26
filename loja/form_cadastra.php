<?php
    include 'pedaco.php';
?>

    <div class="container">
        <form action="inserir.php" method="POST">
            <div class="mb-3">
                <input type="text" class="form-control" name="nome" placeholder="Digite o nome do produto">                
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="preco" placeholder="Digite o preço do produto">                
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="quantidade" placeholder="Digite a quantidade">                
            </div>
            
            <button type="submit" class="btn btn-primary">Cadastar</button>
        </form>
    </div>


    <?php include 'footer.php'; ?>
</body>
</html>