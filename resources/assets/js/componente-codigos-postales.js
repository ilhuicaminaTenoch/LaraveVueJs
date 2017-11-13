new Vue({
    el: '#contenedor-codigo-postal',
    data:{
        txtCodigoPostal: '',
        colonias : [],
        auxCodigosPostales :'',
        errores: [],
    },
    methods:{
        buscaCodigoPostal:function () {
            var url = 'codigo-postal/buscar';

            axios.post(url, {
                codigoPostal: this.txtCodigoPostal
            }).then(response => {
                this.colonias = response.data;
                this.agrupaCodigosPostales();

            });
        },
        agrupaCodigosPostales: function () {
            var longitud = this.colonias.length;
            var datos = this.colonias;
            this.auxCodigosPostales = datos[0];

        }
    }
});