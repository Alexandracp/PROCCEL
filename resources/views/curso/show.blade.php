@extends('layouts.app')

@section('template_title')
    {{ $curso->name ?? 'Show Curso' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Curso</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cursos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Curso:</strong>
                            {{ $curso->id_curso }}
                        </div>
                        <div class="form-group">
                            <strong>Curso:</strong>
                            {{ $curso->curso }}
                        </div>
                        <div class="form-group">
                            <strong>F Inicio:</strong>
                            {{ $curso->f_inicio }}
                        </div>
                        <div class="form-group">
                            <strong>Dia Clase:</strong>
                            {{ $curso->dia_clase }}
                        </div>
                        <div class="form-group">
                            <strong>H Inicio:</strong>
                            {{ $curso->h_inicio }}
                        </div>
                        <div class="form-group">
                            <strong>H Final:</strong>
                            {{ $curso->h_final }}
                        </div>
                        <div class="form-group">
                            <strong>Cupos:</strong>
                            {{ $curso->cupos }}
                        </div>
                        <div class="form-group">
                            <strong>Duracion:</strong>
                            {{ $curso->duracion }}
                        </div>
                        <div class="form-group">
                            <strong>Costo U:</strong>
                            {{ $curso->costo_u }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $curso->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Status C:</strong>
                            {{ $curso->status_c }}
                        </div>
                        <div class="form-group">
                            <strong>Id Prof:</strong>
                            {{ $curso->id_prof }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
