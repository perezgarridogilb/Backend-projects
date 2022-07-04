@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col">
        <h1>Delete Report {{ $report->id }}</h1>
    </div>
    </div>
    <div>
        <div class="row">
            <div class="col">
                <a class="btn btn-secondary mt-2 mb-2" href="/expense_reports">Back</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="/expense_reports/{{ $report->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-primary" type="submit">Delete</button>
                </form>
            </div>
        </div>
@endsection
