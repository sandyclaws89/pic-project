
{{-- Questa appunto è la pagina dove ci saranno i dettagli del post cliccato --}}

@extends('templates.base')
@section('pageTitle', $pageTitle)
@section('pageMain')
    <div class="container">
        <div class="row g-4">
                <div class="col-8">
                    <h2> {{$pic->pic_title}} </h2>
                    <p> {{$pic->description}} </p>
                </div>
        </div>
    </div>
@endsection
