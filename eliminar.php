<?php
    include 'connect.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        
    $id = $_POST["id"];

    if (!$id){
        header("location:eliminar.php");
    }

    $remove = "DELETE FROM Componentes WHERE id = '$id' ";
    $result = mysqli_query($liga, $remove);
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar</title>
    <link rel="stylesheet" href="configurador.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<body>
    <header>
        <a href="user.html">
            <span class="icone"><i class="bi bi-box-arrow-left"></i></span></i>
        </a>
        <h1> Elimine uma configuração</h1>
    </header>
    <nav class="side-bar" side-bar>
            <ul>
                <li class="menu-item">
                    <a href="configurador.html">
                        <span class="icon"><i class="bi bi-house"></i></span>
                        <span class="txt-link">Home</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="eliminar.php">
                        <span class="icon"><i class="bi bi-trash"></i></span>
                        <span class="txt-link">Eliminar</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="pesquisar.php">
                        <span class="icon"><i class="bi bi-search"></i></span>
                        <span class="txt-link">Pesquisar</span>
                    </a>
                </li>
                
            </ul>
    </nav>   
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="formeliminar">
        <input type="number" name="id" placeholder="ID" min="1" class="idimput" required>
        <button type="submit"  value="Eliminar">Eliminar</button>
    </form>
    <div class="tabela">
        <iframe src="listar.php" width="100%" height="100%" frameborder="0"></iframe>
   </div>
</body>
</html>