@extends('layouts.app')
@section('title', 'Welcome')
@section('content')
 <!-- Home Page -->
 <main class="home">
    <section class="collection">
      <h2 class="section-title">Collection</h2>
      <div class="collection-info">
        <div class="cellars">

        <!-- @lang('lang.cellars') -->
        <p>Please log in to continue</p>
        <a class="nav-link" href="{{ route('login') }}">@lang('lang.login')</a>
      </div>
    </section>

  </main>
@endsection