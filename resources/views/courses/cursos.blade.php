@extends('layouts.main')

@section('title', 'Área de Cursos')

@section('content')

<div id="search-container" class="col-md-12">
        <h1>Buscar um curso</h1>

        <form action="">
        <input type="search" class="form-control" placeholder="Procurar..." aria-label="Procurar">

        </form>
    </div>

    <div id="cursos-container" class="col-md-12">
        <h2>Cursos</h2>
        <p class="subtitle">Todos os nossos cursos disponiveis </p>
        <div id="cards-container" class="row">
            
        @foreach ($cursos as $curso)

        <div class="card col-md-3">
            <img src="/imgs/cursohtml.svg" alt="{{ $curso->title }}">
            <div class="card-body">
                <p class="card-date">05/05/2022</p>
                <h5 class="card-title">{{ $curso->title }}</h5>
                <p class="card-participants">Número de pessoas que estão participando</p>
                <a href="#" class="btn btn-outline-primary">Saber mais</a>
            </div>
        </div>

        @endforeach
        </div>
    </div>

@endsection