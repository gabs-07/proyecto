<?php
class Usuario extends Conectar {

    public function login() {
        $conectar = parent::conexion();
        parent::setNames();

        if (isset($_POST["enviar"])) {
            $correo = $_POST["email"];
            $pass = $_POST["pass"];

            if (empty($correo) || empty($pass)) {
                header("Location:" . conectar::ruta() . "index.php?m=2");
                exit();
            } else {
                $sql = "SELECT * FROM usuario WHERE correo=? AND pass=? AND estado=1";
                $stmt = $conectar->prepare($sql);
                $stmt->bindValue(1, $correo);
                $stmt->bindValue(2, $pass);
                $stmt->execute();
                $resultado = $stmt->fetch();

                if (is_array($resultado) && count($resultado) > 0) {
                    session_start();
                    $_SESSION['correo'] = $resultado["email"];
                    $_SESSION['contrasenia'] = $resultado["pass"];
                    header("Location:" . conectar::ruta() . "view/home/home.html");
                } else {
                    header("Location:" . conectar::ruta() . "index.php?m=1");
                    exit();
                }
            }
        }
    }
}
?>
