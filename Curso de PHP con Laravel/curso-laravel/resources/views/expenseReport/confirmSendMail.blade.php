@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col">
        <h1>Send Report</h1>
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
        @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/expense_reports/{{ $report->id }}/SendMail" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Email:</label>
                    <!-- Es el valor del request anterior -->
                    <input type="text" class="form-control" id="email" name="email" placeholder="Type a email" value="{{ old('email') }}" >
                </div>
                <button class="btn btn-primary" type="submit" >Send Mail</button>
            </form>
        </div>
    </div>
@endsection
