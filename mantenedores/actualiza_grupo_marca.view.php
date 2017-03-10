<?php include_once 'header.php'; ?>

<div id="page-wrapper">

    <div class="container">

        <h3>Actualizar grupo marca</h3>

        <!-- Tabla -->
        <div class="row">
            <div class="col-lg-6">

                <table class="table table-striped col-sm-6 col-xs-12">

                    <thead>
                    <th>Nombre      </th>
                    <th>Grupo marca </th>
                    <th>Acción      </th>
                    </thead>

                    <tbody>
                    <form  action="actualiza_grupo_marca.php" method="post">
                    <tr>
                        <td><input class="form-control" type="text" name="nombre" id="nombre"> </td>
                        <td>
                            <select class="form-control" name="grupomarca" id="grupomarca">
                                <option value="0">Todos</option>
                                
                                <?php foreach ( $grupos as $grupo ): ?>
                                    <option value="<?=$grupo->idgrupomarca?>"><?=$grupo->nombre?></option>
                                <?php endforeach; ?>                                
                                
                            </select>
                        </td>
                        <td><button class="btn btn-info btn-block" type="submit"><i class="material-icons">&#xE8B6;</i>| Buscar</button></td>
                    </tr>
                    </form>

                    <?php if( !isset($marcas) ): ?>
                        <tr>
                            <td>Sin resultados</td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ( $marcas as $marca ): ?>
                            <form action="actualiza_grupo_marca.php" method="get">
                                <input type="hidden" name="idmarca" value="<?=$marca->idmarca ?>">
                                <input type="hidden" name="nombre" value="<?=$marca->nombre ?>">
                                <tr>
                                    <td> <?=$marca->nombre       ?></td>
                                    <td>
                                        <select class="form-control" name="idgrupomarca" id="">
                                            <?php foreach ( $grupos as $grupo ): ?>

                                                <?php if ( $marca->idgrupomarca == $grupo->idgrupomarca ): ?>
                                                    <option selected value="<?=$grupo->idgrupomarca?>"><?=$grupo->nombre?></option>
                                                <?php else: ?>
                                                    <option value="<?=$grupo->idgrupomarca?>"><?=$grupo->nombre?></option>
                                                <?php endif; ?>

                                            <?php endforeach; ?>

                                        </select>
                                    </td>
                                    <td><button class="btn btn-primary btn-block" type="submit"><i class="material-icons">&#xE863;</i> | Actualizar</button></td>
                                </tr>
                            </form>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    </tbody>
                </table>

            </div>
        </div>
        <!-- #Tabla -->




    </div>




</div>

<?php include_once 'footer.php'; ?>

