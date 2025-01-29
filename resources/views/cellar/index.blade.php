@extends('layouts.app')
@section('title', 'Cellars')
@section('content')
<main class="flex-center height70"> 
    <section class="structure flex-col gap10">
    <div class="section-title">
        <h2>Collection : {{ $cellars->count() }} cellier(s).</h2>
    </div>
    <div class="line"></div>
    @foreach ($cellars as $cellar)
    <article class="card_cellar">
        <div class="card-body"> 
            <h2 class="card-title">
                {{ $cellar->title }}
            </h2>
            <p class="card_description">{{ $cellar->description }}</p>
            <div class="btn-container flex-center">
                <a href="{{ route('cellar.show', $cellar->id) }}" class="btn-border btn-icon btn-show">@lang('lang.view')<i class="fa-solid fa-eye"></i></a>
            </div>
        </digv> 
        
    </article>
    @endforeach
    <div class="btn-container flex-center"><a href="{{ route('cellar.create') }}" class="btn-icon btn-go">Ajouter<i class="fa-solid fa-plus"></i></a></div> 
    </section>
</main>

@endsection