<x-layout>
    <header class="container-fluid">
        <div class="row vh-100 align-items-center">
            <div class="col-12">
                <h1 class="text-giallo display-1 text-center">{{$titolo}}</h1>
                <div class="d-flex justify-content-center pt-5">
                    <a href="{{route('index.article')}}" class="btn-custom mx-3" role="button">Articoli</a>
                    <a href="#" class="btn-custom mx-3" role="button">Chi Siamo</a>
                </div>
            </div>
        </div>
    </header>
</x-layout>