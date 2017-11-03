@extends('layouts.app-crud')
@section('content-dashboard')
    <div class="row" id="codigoPostal" xmlns:v-on="http://www.w3.org/1999/xhtml">
        <div class="col-xs-12">
            <h1 class="page-header">Codigos Postales</h1>
        </div>
        <div class="col-md-7">
            <a href="#" class="btn btn-primary pull-right">Nuevo codigo postal</a>

            <table class="table table-hover table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Codigo postal</th>
                    <th>Estado</th>
                    <th colspan="2">&nbsp;</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="codigoPostal in codigosPostales">
                    <td width="20px">@{{ codigoPostal.id_codigo_postal }}</td>
                    <td width="20px">@{{ codigoPostal.codigo_postal }}</td>
                    <td>@{{ codigoPostal.estado }}</td>
                    <td width="10px"><a href="#" class="btn btn-warning btn-sm">Editar</a></td>
                    <td width="10px"><a href="#" class="btn btn-danger btn-sm" v-on:click.prevent="eliminaCodigoPostal(codigoPostal)">Eliminar</a></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-5">
            <pre>
                @{{ $data }}
            </pre>
        </div>

    </div>
@endsection