<?php
class solicitante
{
    private $solicitante;
    private $empresa;
    private $data;
    private $entregueParaUsuario;
    private $comprasPronto;
    private $comprasProntoData;
    private $rhEntreguePara;
    private $rhDataEntrega;
    private $rhPronto;
    private $rhProntoData;
    private $rhEntSesmtPara;
    private $sesmtPronto;
    private $sesmtProntoData;
    private $sesmtEntPortaria;
    private $sesmtEntPortariaData;


    private $pdo;

    public function __set($atributo, $value)
    {
        $this->$atributo = $value;
    }

    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function insert($pdo)
    {
        // $sql = $pdo->prepare("INSERT INTO fluxodocumentos (solicitante, empresa, dataEnSolicitante,entParaCompras,comprasPronto,comprasProntoData,rhEntreguePara,rhDataEntrega,rhPronto,rhProntoData,rhEntSesmtPara,sesmtPronto,sesmtProntoData,sesmtEntPortaria,sesmtEntPortariaData) values ('',:nome, :empresa, :datae, :entregueParaUsuario, :5, :6, :7, :8, :9, :10, :11, :12, :13, :14, :15, :16, :17, :18, :19)");

        $sql = $pdo->prepare("INSERT INTO fluxodocumentos values ('',:solicitante, :empresa, :datae, :entregueParaUsuario, :5, :6, :7, :8, :9, :10, :11, :12, :13, :14, :15)");
        // $sql = $pdo->prepare("INSERT INTO fluxodocumento  values ('',:solicitante, :empresa, :datae, :entregueParaUsuario, :5)");

        $sql->bindvalue(':solicitante', $this->__get('solicitante'));
        $sql->bindvalue(':empresa', $this->__get('empresa'));
        $sql->bindvalue(':datae', $this->__get('data'));
        $sql->bindvalue(':entregueParaUsuario', $this->__get('entregueParaUsuario'));
        // $sql->bindvalue(':5', 'null');
        $sql->bindvalue(':5', 'null');
        $sql->bindvalue(':6', 'null');
        $sql->bindvalue(':7', 'null');
        $sql->bindvalue(':8', 'null');
        $sql->bindvalue(':9', 'null');
        $sql->bindvalue(':10', 'null');
        $sql->bindvalue(':11', 'null');
        $sql->bindvalue(':12', 'null');
        $sql->bindvalue(':13', 'null');
        $sql->bindvalue(':14', 'null');
        $sql->bindvalue(':15', 'null');
        $sql->execute();
        unset($pdo);

        $result = $sql->rowCount();
        //  
        if ($result > 0) {
            return 1;
        } else {
            return 0;
        }
    }
}
// $s = new solicitante();
// $s->__set('solicitante', 'Bruce Silva');

// echo "O nome do solicitante é o " . $s->__get('solicitante');
