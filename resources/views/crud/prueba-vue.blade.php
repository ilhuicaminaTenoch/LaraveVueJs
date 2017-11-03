@component('layouts.app')
    @slot('content')
        <div id="main" class="container" xmlns:v-on="http://www.w3.org/1999/xhtml">
            <div class="row">
                <div class="col-sm-4">
                    <h1>VUEjs - AJAX axios</h1>
                    <ul class="list-group">
                        <li v-for="item in list" class="list-group-item">
                            @{{ item.name }}
                        </li>
                    </ul>
                </div>

                <div class="col-sm-8">
                    <h1>JSON</h1>
                    <pre>
                        @{{ $data }}
                    </pre>
                </div>
            </div>
        </div>
    @endslot
@endcomponent
