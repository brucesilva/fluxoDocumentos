<?php
class solicitante
{
    private $id;
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
        $sql->bindvalue(':5', '');
        $sql->bindvalue(':6', '');
        $sql->bindvalue(':7', '');
        $sql->bindvalue(':8', '');
        $sql->bindvalue(':9', '');
        $sql->bindvalue(':10', '');
        $sql->bindvalue(':11', '');
        $sql->bindvalue(':12', '');
        $sql->bindvalue(':13', '');
        $sql->bindvalue(':14', '');
        $sql->bindvalue(':15', '');
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

    public function update($pdo)
    {

        // echo "Entregue para " . $this->__get('rhEntreguePara') . " <br>";
        // echo "Data Entregue para RH" . $this->__get('rhDataEntrega') . " <br>";
        // echo "id " . $this->__get('id') . " <br>";

        $sql = $pdo->prepare("UPDATE fluxodocumentos SET rhEntreguePara = :rhEntPara , rhDataEntrega = :rhDataEntrega where idSolicitante = :id ");
        $sql->bindValue(':rhEntPara', $this->__get('rhEntreguePara'));
        $sql->bindValue(':rhDataEntrega', $this->__get('rhDataEntrega'));
        $sql->bindValue(':id', $this->__get('id'));
        return $sql->execute();
    }
}
// $s = new solicitante();
// $s->__set('solicitante', 'Bruce Silva');

// echo "O nome do solicitante é o " . $s->__get('solicitante');
