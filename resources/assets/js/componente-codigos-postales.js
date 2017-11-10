new Vue({
    el: '#contenedor-codigo-postal',
    data:{
        txtCodigoPostal: '',
        codigosPostales : [],
        auxCodigosPostales :'',
        errores: [],
    },
    methods:{
        buscaCodigoPostal:function () {
            var url = 'codigo-postal/buscar';

            axios.post(url, {
                codigoPostal: this.txtCodigoPostal
            }).then(response => {
                this.codigosPostales = response.data.codigosPostales;
                this.agrupaCodigosPostales();

            });
        },
        agrupaCodigosPostales: function () {
            var longitud = this.codigosPostales.length;
            var datos = this.codigosPostales;
            var hash = {};
            if ( longitud > 1 ){
               this.auxCodigosPostales = datos[1];
            }
        }
    }
});