

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar art&iacute;ulo</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>T&iacute; *</label>
                        <input type="text" name="title" class="form-control" required value="{{ old('title', $post->title) }}">
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="text" name="title" class="form-control" required value="{{ old('title', $post->title) }}">
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection