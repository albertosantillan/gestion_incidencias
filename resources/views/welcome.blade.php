@extends('layouts.app')

@section('content')

            <div class="card">
                <div class="card-header">{{ __('Sistema de gestión de incidencias ') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Bienvenido') }}
                </div>
            </div>

@endsection
