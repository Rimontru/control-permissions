@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Video
                </div>

                <div class="card-body">
                    <p><strong>Nombre</strong> {{ $videos->name }} </p>
                    <p><strong>Descripción</strong> {{ $videos->description }} </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection