<x-layout>
    <x-navbar>

        <div class="container-fluid">
            <div class="row">
                <div class="col-12 header d-flex flex-column justify-content-center">
                <h1 class="display-1 text-center">Benvenuti su BnB104</h1>   
            </div>
            @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
            @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif
        </div>
    </div>

    </x-navbar>
</x-layout>