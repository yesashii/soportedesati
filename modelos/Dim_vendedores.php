<?php


class Dim_vendedores

{

    protected $pdo;

    public function __construct( PDO $pdo )

    {
        $this->pdo = $pdo;
    }

    public function all()

    {

        $sql =  "select top 1 *                     ".
                "from   handheld.dbo.dim_vendedores ";

        $consulta = $this->pdo->prepare( $sql );

        $consulta->execute();

        $vendedores = $consulta->fetchAll( PDO::FETCH_OBJ );


        return $vendedores;


    }


}