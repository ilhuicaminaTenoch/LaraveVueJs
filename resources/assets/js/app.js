/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

//require('./bootstrap');

/*var urlUsers = 'https://jsonplaceholder.typicode.com/users';

new Vue({
    el: '#main',
    created: function () {
        this.getUsers();
    },
    data: {
        list: []
    },
    methods: {
        getUsers: function () {
            axios.get(urlUsers).then(response => {
                this.list = response.data;
            });
        }
    }
});*/

new Vue({
    el: '#codigoPostal',
    created: function () {
        this.getCodigosPostales();
    },
    data: {
        codigosPostales: [],
        nuevoIdEstado: '',
        nuevoEstado: '',
        nuevoIdMunicipio: '',
        nuevoMunicipio: '',
        nuevoCiudad: '',
        nuevoZona: '',
        nuevoCodigoPostal: '',
        nuevoAsentamiento: '',
        nuevoTipo: '',
        errors: []
    },
    methods: {
        getCodigosPostales: function () {
            var urlCodigosPostales = 'crud';
            axios.get(urlCodigosPostales).then(response => {
                this.codigosPostales = response.data;
        })
            ;
        },
        eliminaCodigoPostal: function (codigoPostal) {
            var url = 'crud/' + codigoPostal.id_codigo_postal;
            axios.delete(url).then(response => {
                this.getCodigosPostales();
            toastr.success('Eliminado Correctamente');

        })
            ;
        },
        crearCodigoPostal: function () {
            var url = 'crud';
            axios.post(url, {
                id_estado: this.nuevoIdEstado,
                estado: this.nuevoEstado,
                id_municipio: this.nuevoIdMunicipio,
                municipio: this.nuevoMunicipio,
                ciudad: this.nuevoCiudad,
                zona: this.nuevoZona,
                codigo_postal: this.nuevoCodigoPostal,
                asentamiento: this.nuevoAsentamiento,
                tipo: this.nuevoTipo


            }).then(response => {
                this.getCodigosPostales();
                this.nuevoIdEstado = '';
                this.nuevoEstado = '';
                this.nuevoIdMunicipio = '';
                this.nuevoMunicipio = '';
                this.nuevoCiudad = '';
                this.nuevoZona = '';
                this.nuevoCodigoPostal = '';
                this.nuevoAsentamiento = '';
                this.nuevoTipo = '';
                this.errors = [];
            $('#create').modal('hide');
            toastr.success('Nuevo codigo postal creado con éxito');
        }).
            catch(error => {
                this.errors = error.response.data;
        })
            ;
        }
    }
});


