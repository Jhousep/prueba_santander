<?= $this->extend('template/defaultTemplate') ?>

<!-- Esto es para el contenido principal !-->
<?= $this->section('content') ?>

<button type="button" class="btn btn-primary">
    <i class="fas fa-plus-square nav-icon mr-1"></i>
    Añadir nuevo cliente
</button></a>

<table id="myDataTable" class="table table-bordered table-striped dataTable dtr-inline"
    aria-describedby="myDataTable_info">
    <thead>
        <tr>
            <th class="sorting" tabindex="0" aria-controls="myDataTable" rowspan="1" colspan="1">
                Nombre</th>
            <th class="sorting" tabindex="0" aria-controls="myDataTable" rowspan="1" colspan="1">
                Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($listadoClientes as $key => $clientes)
            {
                if ( $key % 2 == 0){
                    echo "<tr class='odd'>";
                }
                else{
                    echo "<tr class='even'>";
                }
                echo "<td class='align-middle'>".$clientes['name']."</td>";
                echo "<td>";
                echo "<div style='width: 150px;'>";
                echo "<a href='".base_url('Clientes')."'><button id='".$clientes['customer_pk']."' class='btn btnCustom btn-primary ml-1' type='button'><i class='fas fa-pen'></i></button></a>";
                echo "<a href='".base_url('Clientes/EliminarCliente/'.$clientes['customer_pk'])."'><button id='".$clientes['name']."' class='btn btnCustom btn-danger ml-1' type='button'><i class='fas fa-trash'></i></button></a>";
                echo "</div>";
                echo "</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>
<?= $this->endSection() ?>


<!-- Esto es para los scripts !-->
<?= $this->section('script') ?>

<?= $this->endSection() ?>