<nav>
    <ul class="pagination">
        <li v-if="pagination.current_page > 1">
            <a href="#" @click.prevent="cambioDePagina(pagination.current_page - 1)"><span>Atras</span></a>
        </li>

        <li v-for="page in pagesNumber" v-bind:class="[page == isActived ? 'active' : '']">
            <a href="#" @click.prevent="cambioDePagina(page)">
                <span>@{{ page }}</span>
            </a>
        </li>

        <li v-if="pagination.current_page < pagination.last_page">
            <a href="#" @click.prevent="cambioDePagina(pagination.current_page + 1)"><span>Siguiente</span></a>
        </li>
    </ul>
</nav>