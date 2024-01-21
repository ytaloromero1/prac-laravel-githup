
@extends('layouts.plantilla')






@section('title','CONTACTO')









@section('content')

    <h2>CONTACTO</h2>



    

    @component('_components.card')

        @slot('titulo','este es el titulo de contacto')
        @slot('contenido',' contenido contenido contacto')

    @endcomponent
    @component('_components.card')

        @slot('titulo','este es el titulo de contacto')
        @slot('contenido',' contenido contenido contacto')

    @endcomponent
    @component('_components.card')

        @slot('titulo','este es el titulo de contacto')
        @slot('contenido',' contenido contenido contacto')

    @endcomponent
    @component('_components.card')

        @slot('titulo','este es el titulo de contacto')
        @slot('contenido',' contenido contenido contacto')

    @endcomponent



@endsection

