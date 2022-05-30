<?php

class login
{
    private $user;
    private $senha;

    public function __set($atributo, $value)
    {
        $this->$atributo = $value;
    }

    public function __get($atributo)
    {
        return $this->$atributo;
    }


    public function verifyLogin($pdo)
    {
        // echo "Estou dentro da função verifyLogin <br>";
        // echo "O get nome é " . $this->__get('user') . "<br>";
        // echo "O get senha é " . $this->__get('passw') . "<br>";

        $sql = $pdo->prepare("SELECT * FROM usuarios WHERE nome =:user and senha =:pass");
        $sql->bindvalue(':user', $this->__get('user'));
        $sql->bindValue(':pass', $this->__get('pass'));
        $sql->execute();

        $result = $sql->rowCount();

        if ($result > 0) {
            return 0;
        } else {
            return 1;
        }
    }

    public function teste()
    {
        echo "Estou na função teste";
    }
}
