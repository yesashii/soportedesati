<?php include_once 'header.php'; ?>

    <div id="page-wrapper">

        <div class="panel-body">

            <table class="table table-striped col-sm-6 col-xs-12">

                <thead>
                <th>Empresa     </th>
                <th>TipoCtaCte  </th>
                <th>RazonSocial </th>
                </thead>

                <tbody>
                <?php foreach ($handheldClientes as $cliente): ?>
                <tr>
                    <td> <?=$cliente->Empresa       ?></td>
                    <td> <?=$cliente->TipoCtaCte    ?></td>
                    <td> <?=$cliente->RazonSocial   ?></td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>

        </div>

    </div>

<?php include_once 'footer.php'; ?>