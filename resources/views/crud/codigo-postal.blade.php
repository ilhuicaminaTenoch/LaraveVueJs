@extends('layouts.app-crud')
@section('content-dashboard')
    <div class="container">
        <div class="row" id="contenedor-codigo-postal">
            <div class="col-md- col-sm-4">
                <div class="form-group">
                    <label for="cp">CodigoPostal</label>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Codigo postal" v-model="txtCodigoPostal">
                        <span class="input-group-btn">
                        <button class="btn btn-secundary" type="submit" v-on:click="buscaCodigoPostal()">Buscar</button>
                    </span>
                    </div>
                </div>
                <fieldset disabled>
                    <div class="input-group">
                        <label for="disabledTextinput">Municipio</label>
                        <input type="text" class="form-control" :placeholder="auxCodigosPostales.municipio">
                    </div>
                </fieldset>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="disabledTextInput">Colonia</label>
                    <select class="form-control">
                        <option v-for="colonias in colonias" :value="colonias.id_codigo_postal">
                            @{{ colonias.asentamiento }}
                        </option>
                    </select>
                </div>
                <fieldset disabled>
                    <div class="input-group">
                        <label for="disabledTextinput">Zona</label>
                        <input type="text" class="form-control" :placeholder="auxCodigosPostales.zona">
                    </div>
                </fieldset>
            </div>
            <div class="col-sm-4 col-sm-4">
                <fieldset disabled>
                    <div class="form-group">
                        <label for="disabledTextinput">Estado</label>
                        <input type="text" class="form-control" :placeholder="auxCodigosPostales.estado">
                    </div>
                </fieldset>
                <fieldset disabled>
                    <div class="form-group">
                        <label for="disabledTextinput">Tipo</label>
                        <input type="text" class="form-control" :placeholder="auxCodigosPostales.tipo">
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
@endsection