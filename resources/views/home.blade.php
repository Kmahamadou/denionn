@include('layout.header')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Vous etes connecter !') }}
                </div>

            </div>
            <a href="{{ route('index') }}" class="btn-success py-2 px-3" >Continuer l'achat</a>
        </div>
    </div>
</div>
   
@include('layout/footer')

@include('layout/scriptjs')