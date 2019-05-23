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
                    {!! Form::model($videos, ['route' => ['videos.update', $videos->id], 'method' => 'PUT' ]) !!}
                        
                        @include('videos.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection