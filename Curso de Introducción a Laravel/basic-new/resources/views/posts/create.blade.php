

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear art&iacute;culo</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form 
                    action="{{ route('posts.store') }}" 
                    method="POST"
                    enctype="multipart/form-data"
                    ></form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection