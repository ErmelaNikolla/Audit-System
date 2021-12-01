@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Agjencia e Auditimit te Programeve te Akredituara') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <ul>
                            <a href="google.com">Numer identifikues<br>
                            <a href="url">pershkrimi i auditimit <br>
                            <a href="url">organi qe do te auditohet <br>
                            <a href="url"> adresa e organit qe do te auditohet <br>
                            <a href="url">lloji i audetimit <br>
                            <a href="url">lloji i programit <br>
                            <a href="url">objekti i auditimit <br>
                            <a href="url">qellimi i auditimit <br>
                            <a href="url">statusi aktual i auditimit <br>
                            <a href="url">statusi i fillimit te auditimit <br>
                        </ul>
                            
                       
                </div>
                <div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
