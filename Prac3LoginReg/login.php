<?php session_start();

    if(isset($_SESSION['usuario'])){
        header('Location: index.php');
    }

    $errores = '';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $usuario = filter_var( strtolower( $_POST['usuario'] ), FILTER_SANITIZE_STRING );
        $password = $_POST['password'];
        $password = hash('sha512', $password);

        #Comprueba que los datos se estan ingresado se recibieron correctamente
        #echo "$usuario . $password ";

        
        try {
            $conexion = new PDO('mysql:host=localhost;dbname=dbPrueba', 'root', '');
        } catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        }

        $statement = $conexion -> prepare(
            'SELECT * FROM loginUsuarios WHERE usuario = :user AND password = :pass'
        );

        $statement -> execute(array(
            ':user' => $usuario,
            ':pass' => $password
        ));

        $resultado = $statement -> fetch();
    
        #si la consulta trae el registro lo mostrara en pantalla, de lo contrario solo mostrara un boleano falso 
        #echo var_dump($resultado);

        
        if( $resultado !== false ){
            
            $_SESSION['usuario'] = $usuario ;
            header('Location: index.php');
            
        }else{

            $errores .= '<li>Datos incorrectos</li>';

        }
    
    }
    
    require 'views/login.view.php';
?>