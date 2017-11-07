<form method="POST" v-on:submit.prevent="actualizarCodigoPostal(fillCodigoPostal.id_codigo_postal)">
    <div class="modal fade" id="edit">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                    <h4>Editar codigo postal</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="id_estado">ID Estado</label>
                            <input type="text" name="id_estado" class="form-control" v-model="fillCodigoPostal.id_estado">
                            <span v-if="errors['id_estado']" class="text-danger">@{{ errors['id_estado'] }}</span>

                            <label for="estado">Estado</label>
                            <input type="text" name="estado" class="form-control" v-model="fillCodigoPostal.estado">
                            <span v-for="errors['estado']" class="text-danger">@{{ errors['estado'] }}</span>

                            <label for="id_municipio">ID municipio</label>
                            <input type="text" name="id_municipio" class="form-control" v-model="fillCodigoPostal.id_municipio">
                            <span v-for="errors['id_municipio']" class="text-danger">@{{ errors['id_municipio'] }}</span>
                        </div>
                        <div class="col-md-4">
                            <label for="municipio">Municipio</label>
                            <input type="text" name="municipio" class="form-control" v-model="fillCodigoPostal.municipio">
                            <span v-for="errors['municipio']" class="text-danger">@{{ errors['municipio'] }}</span>

                            <label for="ciudad">Ciudad</label>
                            <input type="text" name="ciudad" class="form-control" v-model="fillCodigoPostal.ciudad">
                            <span v-for="errors['ciudad']" class="text-danger">@{{ errors['ciudad'] }}</span>

                            <label for="zona">Zona</label>
                            <input type="text" name="zona" class="form-control" v-model="fillCodigoPostal.zona">
                            <span v-for="errors['zona']" class="text-danger">@{{ errors['zona'] }}</span>
                        </div>
                        <div class="col-md-4">
                            <label for="codigo_postal">Codigo postal</label>
                            <input type="text" name="codigo_postal" class="form-control" v-model="fillCodigoPostal.codigo_postal">
                            <span v-for="errors['codigo_postal']" class="text-danger">@{{ errors['codigo_postal'] }}</span>

                            <label for="asentamiento">Asentamiento</label>
                            <input type="text" name="asentamiento" class="form-control" v-model="fillCodigoPostal.asentamiento">
                            <span v-for="error in errors" class="text-danger">@{{ error }}</span>

                            <label for="tipo">Tipo</label>
                            <input type="text" name="tipo" class="form-control" v-model="fillCodigoPostal.tipo">
                            <span v-for="errors['tipo']" class="text-danger">@{{ errors['tipo'] }}</span>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Actualizar">
                </div>
            </div>
        </div>
    </div>
</form>