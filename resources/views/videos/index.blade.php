@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Videos
                    @can('videos.create')
                        <a href="{{ route('videos.create') }}" class="btn btn-outline-primary btn-sm float-right">crear</a>
                    @endcan
                </div>

                <div class="card-body">
                   <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Descripción</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($videos AS $video)
                                <tr>
                                    <td> {{ $video->id }} </td>
                                    <td> {{ $video->name }} </td>
                                    <td width="10px">
                                        @can('videos.show')
                                        <a href=" {{ route('videos.show', $video->id) }} " class="btn btn-outline-info btn-sm">ver</a>
                                        @endcan
                                    </td>
                                    <td width="10px">
                                        @can('videos.edit')
                                        <a href=" {{ route('videos.edit', $video->id) }} " class="btn btn-outline-info btn-sm">editar</a>
                                        @endcan
                                    </td>
                                    <td width="10px">
                                        @can('videos.destroy')
                                        {!! Form::open(['route'=>['videos.destroy',$video->id], 'method'=>'DELETE']) !!}
                                        <button class="btn btn-outline-danger btn-sm">eliminar</button>
                                        {!! Form::close() !!}
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                   </table>
                   {{ $videos->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
