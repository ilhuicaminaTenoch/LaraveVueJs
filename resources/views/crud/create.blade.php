<form method="POST" v-on:submit.prevent="crearCodigoPostal">
    <div class="modal fade" id="create">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                    <h4>Nuevo codigo postal</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="id_estado">ID Estado</label>
                            <input type="text" name="id_estado" class="form-control" v-model="id_estado">
                            <span v-if="errors['id_estado']" class="text-danger">@{{ errors['id_estado'] }}</span>

                            <label for="estado">Estado</label>
                            <input type="text" name="estado" class="form-control" v-model="estado">
                            <span v-for="error in errors" class="text-danger">@{{ error }}</span>

                            <label for="id_municipio">ID municipio</label>
                            <input type="text" name="id_municipio" class="form-control" v-model="id_municipio">
                            <span v-for="error in errors" class="text-danger">@{{ error }}</span>
                        </div>
                        <div class="col-md-4">
                            <label for="municipio">Municipio</label>
                            <input type="text" name="municipio" class="form-control" v-model="municipio">
                            <span v-for="error in errors" class="text-danger">@{{ error }}</span>

                            <label for="ciudad">Ciudad</label>
                            <input type="text" name="ciudad" class="form-control" v-model="ciudad">
                            <span v-for="error in errors" class="text-danger">@{{ error }}</span>

                            <label for="zona">Zona</label>
                            <input type="text" name="zona" class="form-control" v-model="zona">
                            <span v-for="error in errors" class="text-danger">@{{ error }}</span>
                        </div>
                        <div class="col-md-4">
                            <label for="codigo_postal">Codigo postal</label>
                            <input type="text" name="codigo_postal" class="form-control" v-model="codigo_postal">
                            <span v-for="error in errors" class="text-danger">@{{ error }}</span>

                            <label for="asentamiento">Asentamiento</label>
                            <input type="text" name="asentamiento" class="form-control" v-model="asentamiento">
                            <span v-for="error in errors" class="text-danger">@{{ error }}</span>

                            <label for="tipo">Tipo</label>
                            <input type="text" name="tipo" class="form-control" v-model="tipo">
                            <span v-for="error in errors" class="text-danger">@{{ error }}</span>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Guardar">
                </div>
            </div>
        </div>
    </div>
</form>