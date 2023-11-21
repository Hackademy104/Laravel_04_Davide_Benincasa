<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center display-1">Lascia una lamentela</h1>
                <h5 class="text-center display-5">"Non sei contento dei nostri servizi? Lasciaci un feedback"</h5>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-6">
                <form method="POST" action="{{route('reclamo_submit')}}">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="nomeCompleto" class="form-label">Nome Completo</label>
                        <input name="name" type="text" class="form-control" id="nomeCompleto" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 form-floating">
                        <textarea name="text" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 300px"></textarea>
                        <label for="floatingTextarea2">Scrivi qui il tuo Reclamo</label>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>