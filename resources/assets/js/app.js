/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */
new Vue({
    el: '#codigoPostal',
    created: function () {
        this.getCodigosPostales();
    },
    data: {
        codigosPostales: [],
        fillCodigoPostal:{
            'id_codigo_postal': '',
            'id_estado': '',
            'estado': '',
            'id_municipio': '',
            'municipio': '',
            'ciudad': '',
            'zona': '',
            'codigo_postal': '',
            'asentamiento': '',
            'tipo': ''
        },
        pagination : {
            'total': 0,
            'current_page': 0,
            'per_page': 0,
            'last_page': 0,
            'from': 0,
            'to': 0
        },
        id_estado: '',
        estado: '',
        id_municipio: '',
        municipio: '',
        ciudad: '',
        zona: '',
        codigo_postal: '',
        asentamiento: '',
        tipo: '',
        errors: [],
        compensacion: 3
    },
    computed:{
        isActived:function () {
            return this.pagination.current_page;


        },
        pagesNumber:function () {
            if (!this.pagination.to){
                return [];
            }
            var from = this.pagination.current_page - this.compensacion;
            if (from < 1){
                from = 1;
            }
            var to = from +(this.compensacion * 2);
            if (to >= this.pagination.last_page){
                to = this.pagination.last_page;
            }
            var pagesArray =[];
            while (from <= to){
                pagesArray.push(from);
                from++;
            }
            return pagesArray;
        }

    },
    methods: {
        getCodigosPostales: function (page) {
            var urlCodigosPostales = 'crud?page='+page;
            axios.get(urlCodigosPostales).then(response => {
                this.codigosPostales = response.data.codigosPostales.data,
                this.pagination = response.data.pagination;
            });
        },
        editaCodigosPostales:function (codigoPostal) {
            this.fillCodigoPostal.id_codigo_postal = codigoPostal.id_codigo_postal;
            this.fillCodigoPostal.id_estado = codigoPostal.id_estado;
            this.fillCodigoPostal.estado = codigoPostal.estado;
            this.fillCodigoPostal.id_municipio = codigoPostal.id_municipio;
            this.fillCodigoPostal.municipio = codigoPostal.municipio;
            this.fillCodigoPostal.ciudad = codigoPostal.ciudad;
            this.fillCodigoPostal.zona = codigoPostal.zona;
            this.fillCodigoPostal.codigo_postal = codigoPostal.codigo_postal;
            this.fillCodigoPostal.asentamiento = codigoPostal.asentamiento;
            this.fillCodigoPostal.tipo = codigoPostal.tipo;
            $('#edit').modal('show');

        },
        actualizarCodigoPostal:function (idCodigoPostal) {
            var url = 'crud/'+idCodigoPostal;
            axios.put(url, this.fillCodigoPostal).then(response => {
               this.getCodigosPostales();
                this.fillCodigoPostal = {
                    'id_codigo_postal': '',
                    'id_estado': '',
                    'estado': '',
                    'id_municipio': '',
                    'municipio': '',
                    'ciudad': '',
                    'zona': '',
                    'codigo_postal': '',
                    'asentamiento': '',
                    'tipo': ''
                };
                this.errors = [];
                $('#edit').modal('hide');
                toastr.success('Codigo postal actualizado con exito');
            }).catch(error => {
                this.errors = error.response.data;
            });


        },
        eliminaCodigoPostal: function (codigoPostal) {
            var url = 'crud/' + codigoPostal.id_codigo_postal;
                axios.delete(url).then(response => {
                this.getCodigosPostales();
                toastr.success('Eliminado Correctamente');
            });
        },
        crearCodigoPostal: function () {
            var url = 'crud';
            axios.post(url, {
                id_estado: this.id_estado,
                estado: this.estado,
                id_municipio: this.id_municipio,
                municipio: this.municipio,
                ciudad: this.ciudad,
                zona: this.zona,
                codigo_postal: this.codigo_postal,
                asentamiento: this.asentamiento,
                tipo: this.tipo


            }).then(response => {
                this.getCodigosPostales();
                this.id_estado = '';
                this.estado = '';
                this.id_municipio = '';
                this.municipio = '';
                this.ciudad = '';
                this.zona = '';
                this.codigo_postal = '';
                this.asentamiento = '';
                this.tipo = '';
                this.errors = [];
                $('#create').modal('hide');
            toastr.success('Nuevo codigo postal creado con éxito');
            }).catch(error => {
                this.errors = error.response.data;
            });
        },
        cambioDePagina:function (pagina) {
            this.pagination.current_page = pagina;
            this.getCodigosPostales(pagina);
        }
    }
});


