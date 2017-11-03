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
        codigosPostales: []
    },
    methods:{
        getCodigosPostales:function () {
            var urlCodigosPostales = 'crud';
            axios.get(urlCodigosPostales).then(response => {
                this.codigosPostales = response.data;
            });
        },
        eliminaCodigoPostal:function (codigoPostal) {
            var url = 'crud/'+codigoPostal.id_codigo_postal;
            axios.delete(url).then(response =>{
                this.getCodigosPostales();
            });

        }
    }
});


