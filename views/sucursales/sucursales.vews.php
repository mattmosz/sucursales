<?php require_once('../html/head2.php')  ?>

<!-- Basic Bootstrap Table -->
<div class="card">
    <button type="button" class="btn btn-outline-secondary" onclick="sucursales(); roles()" data-bs-toggle="modal" data-bs-target="#ModalSucursales">Nueva Sucursal</button>


    <h5 class="card-header">Lista de Sucursales</h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>Canton</th>
                    <th>Provincia</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0" id="ListaSucursales">

            </tbody>
        </table>
    </div>
</div>


<!-- Modal Usuarios-->

<div class="modal" tabindex="-1" id="ModalSucursales">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tituloModal"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form id="form_usuarios" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="Nombres">Nombre</label>
                        <input type="text" name="Nombres" id="Nombres" class="form-control" placeholder="Ingrese sus nombres" require>
                    </div>
                    <div class="form-group">
                        <label for="Nombres">Direccion</label>
                        <input type="text" name="Apellidos" id="Apellidos" class="form-control" placeholder="Ingrese sus apellidos" require>
                    </div>
                    <div class="form-group">
                        <label for="Nombres">Telefono</label>
                        <select id="SucursalId" name="SucursalId" class="form-control">
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Nombres">Correo</label>
                        <select id="RolId" name="RolId" class="form-control">
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Nombres">Canton</label>
                        <input type="email" name="Correo" id="Correo" class="form-control" placeholder="Ingrese su Correo" require>
                    </div>
                    <div class="form-group">
                        <label for="Nombres">Provincia</label>
                        <input type="password" name="contrasenia" id="contrasenia" class="form-control" placeholder="**********" require>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </form>
        </div>
    </div>
</div>






<?php require_once('../html/scripts2.php') ?>

<script src="./sucursales.js"></script>
