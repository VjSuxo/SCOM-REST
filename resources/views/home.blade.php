@extends('layouts.app')

@section('content')
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
                    <div class="card" style="width: 18rem;">
                        <img src="../img/Mendozaa.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                           <h1>{{ Auth::user()->user }}</h1>
                           <h1>{{ Auth::user()->name }} {{ Auth::user()->ap_paterno }} {{ Auth::user()->ap_materno }}</h1>
                           <p>{{ Auth::user()->email }}</p>

                        </div>
                      </div>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
