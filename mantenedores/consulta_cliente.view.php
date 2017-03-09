<?php include_once 'header.php'; ?>

    <div id="page-wrapper">

        <div class="container">

            <h3>Buscar cliente</h3>

            <div class="row">

                <form  action="consulta_cliente.php" method="post">

                    <div class="col-lg-3">

                        <label for="rut">Ingrese rut</label>
                        <div class="input-group" >
                            <input class="form-control" type="text" name="rut" id="rut">

                            <span class="input-group-btn">
                        <button class="btn btn-info" type="submit">Buscar</button>
                    </span>
                        </div>

                    </div>

                </form>

            </div>
            <br/>

            <!-- SqlServer -->
            <div class="row">
                <div class="col-lg-6">


                    <h4>En: SqlServer.handheld.flexline.ctacte</h4>
                    <table class="table table-striped col-sm-6 col-xs-12">

                        <thead>
                        <th>Empresa     </th>
                        <th>CtaCte      </th>
                        <th>RazonSocial </th>
                        </thead>

                        <tbody>
                        <?php if( !isset($handheldClientes) ): ?>
                            <tr>
                                <td>Sin resultados</td>
                            </tr>
                        <?php else: ?>
                            <?php foreach ($handheldClientes as $cliente): ?>
                                <tr>
                                    <td> <?=$cliente->Empresa       ?></td>
                                    <td> <?=$cliente->CtaCte        ?></td>
                                    <td> <?=$cliente->RazonSocial   ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        </tbody>
                    </table>

                </div>
            </div>
            <!-- #SqlServer -->

            <br/>

            <!-- ServerDesa -->
            <div class="row">
                <div class="col-lg-6">


                    <h4>En: Serverdesa.bdflexline.flexline.ctecte</h4>
                    <table class="table table-striped col-sm-6 col-xs-12">

                        <thead>
                        <th>Empresa     </th>
                        <th>CtaCte      </th>
                        <th>RazonSocial </th>
                        </thead>

                        <tbody>
                        <?php if( !isset($bdflexlineClientes) ): ?>
                            <tr>
                                <td>Sin resultados</td>
                            </tr>
                        <?php else: ?>
                            <?php foreach ($bdflexlineClientes as $cliente): ?>
                                <tr>
                                    <td> <?=$cliente->Empresa       ?></td>
                                    <td> <?=$cliente->CtaCte        ?></td>
                                    <td> <?=$cliente->RazonSocial   ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        </tbody>
                    </table>

                </div>
            </div>
            <!-- #ServerDesa -->


            <!-- Direcciones -->
            <div class="row">
                <div class="col-lg-6">


                    <h4>En: Serverdesa.handheld.flexline.ctactedirecciones</h4>
                    <table class="table table-striped col-sm-6 col-xs-12">

                        <thead>
                        <th>Empresa     </th>
                        <th>CtaCte      </th>
                        <th>Direccion   </th>
                        <th>Principal   </th>
                        </thead>

                        <tbody>
                        <?php if( !isset($direcciones) ): ?>
                            <tr>
                                <td>Sin resultados</td>
                            </tr>
                        <?php else: ?>
                            <?php foreach ($direcciones as $direccion): ?>
                                <tr>
                                    <td> <?=$direccion->Empresa     ?></td>
                                    <td> <?=$direccion->CtaCte      ?></td>
                                    <td> <?=$direccion->Direccion   ?></td>
                                    <td> <?=$direccion->Principal   ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        </tbody>
                    </table>

                </div>
            </div>
            <!-- #Direcciones -->


        </div>




    </div>

<?php include_once 'footer.php'; ?>