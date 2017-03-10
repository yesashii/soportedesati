<?php

class Producto
{
    protected $pdo;

    public function __construct( PDO $pdo )
    {
        $this->pdo = $pdo;
    }

    /**
     * Ejecuta una consulta sql y retorna una coleccion con los resultados
     *
     * @param $sql
     * @return array
     */
    private function exePdo( $sql )
    {

        $consulta = $this->pdo->prepare( $sql );
        $consulta->execute();
        $coleccion = $consulta->fetchAll( PDO::FETCH_OBJ );

        return $coleccion;

    }

    /**
     * funcion que ejecuta un update o un insert
     *
     * @param $sql
     * @return boolean
     */
    private function writeSql( $sql )
    {
        $consulta = $this->pdo->prepare( $sql );
        return $consulta->execute();
    }


    /**
     *Función encargada de traer los grupos de marca
     *
     * @return array
     */
    public function traeTodosGrupos()
    {

        $sql = "".
            "select *                           ".
            "from   DesaERP.dbo.DIM_GRUPOMARCA  ";

        return $this->exePdo( $sql );

    }

    /**
     * busca las marcas y retorna una coleccion de estas.
     *
     * @param $nombre
     * @param $idgrupomarca
     * @return array
     */
    public function buscarMarcas( $nombre, $idgrupomarca )
    {
        $id = ($idgrupomarca == '0')? 'idgrupomarca' : $idgrupomarca;

        $sql = "".
            "select *                               ".
            "from   desaerp.dbo.DIM_MARCAS          ".
            "where  nombre like '%$nombre%'         ".
            "and    idgrupomarca = $id              ";

        //die($sql);
        return $this->exePdo( $sql );

    }

    /**
     * actualiza el grupo de grupo marca
     *
     * @param $idmarca
     * @param $idgrupomarca
     * @return bool
     */
    public function actualizaGrupoMarca( $idmarca, $idgrupomarca )
    {

        $sql = "".
        "update desaerp.dbo.DIM_MARCAS          ".
        "set    idgrupomarca = $idgrupomarca    ".
        "where  idmarca = $idmarca              ";

        return $this->writeSql( $sql );

    }

    /**
     * entrega un grupo de la tabla DesaERP.dbo.DIM_GRUPOMARCA
     *
     * @param $idgrupomarca
     * @return array
     */
    public function grupoMarca( $idgrupomarca )
    {
        $sql = "".
            "select *                               ".
            "from   DesaERP.dbo.DIM_GRUPOMARCA      ".
            "where idgrupomarca = ".$idgrupomarca." ";

        return $this->exePdo( $sql );
    }


}