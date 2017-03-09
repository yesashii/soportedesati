<?php

Class Clientes

{
    protected $pdo;

    public function __construct( PDO $pdo )
    {
        $this->pdo = $pdo;
    }



    public function ctactehandheldall( )

    {

        $sql =  "select top 100 *                     ".
            "from   handheld.flexline.ctacte ";

        $consulta = $this->pdo->prepare( $sql );

        $consulta->execute();

        $clientes = $consulta->fetchAll( PDO::FETCH_OBJ );


        return $clientes;


    }

    /**
     * Ejecuta una consulta sql y retorna una coleccion con los resultados
     *
     * @param $sql
     * @return array
     */
    private function expdo( $sql )
    {

        $consulta = $this->pdo->prepare( $sql );
        $consulta->execute();
        $coleccion = $consulta->fetchAll( PDO::FETCH_OBJ );

        return $coleccion;

    }

    /**
     * Busca en la base de datos de SQLSERVER.handheld.flexline.ctecte
     *
     * @param string $rut el rut del cliente, completo o incompleto
     *
     * @return array con la coleccion de datos encontrados
     */
    public function buscarCtaCteHandheld( $rut )
    {
        $sql = "".
        "select *                          	".
        "from   handheld.flexline.ctacte   	".
        "where  codlegal like '%$rut%' 		";

        if( strlen($rut) < 4 )
        {
            return null;
        }else{
            return $this->expdo( $sql );
        }
    }




    /**
     * Busca en la base de datos de serverdesa.bdflexline.flexline.ctecte
     *
     * @param string $rut el rut del cliente, completo o incompleto
     *
     * @return array con la coleccion de datos encontrados
     */
    public function buscarCtaCteBdflexline( $rut )
    {
        $sql = "".
            "select *                          	            ".
            "from   serverdesa.bdflexline.flexline.ctacte   ".
            "where  codlegal like '%$rut%' 		            ";

        if( strlen($rut) < 4 )
        {
            return null;
        }else{
            return $this->expdo( $sql );
        }
    }


    /**
     * Busca en la base de datos de SQLSERVER.handheld.flexline.ctactedirecciones
     *
     * @param string $rut el rut del cliente, completo o incompleto
     *
     * @return array con la coleccion de datos encontrados
     */
    public function buscarDireccion( $rut )
    {
        $sql = "".
            "select *                          	        ".
            "from   handheld.flexline.ctactedirecciones ".
            "where  CtaCte like '%$rut%' 		        ";

        if( strlen($rut) < 4 )
        {
            return null;
        }else{
            return $this->expdo( $sql );
        }
    }



}