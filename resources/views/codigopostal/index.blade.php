@component('layouts.app')
    @slot('content')
        <div class="row">
            @component('components.thumbnail')
                @slot('imagen', 'http://lorempixel.com/400/200/sports/1/')
                @slot('titulo', 'Sagittis augue cursus')
                @slot('descripcion')
                    lundium dignissim ut sit nec est, enim eu, habitasse odio porttitor, sagittis urna pid et tempor
                    tincidunt, est tempor, adipiscing eros nisi aliquet porta nisi elementum a sit turpis! Pid ut
                    adipiscing ac! Diam, risus elementum mid vel tristique nunc, turpis etiam, elementum parturient
                    phasellus turpis
                @endslot

            @endcomponent

        </div>


    @endslot

@endcomponent