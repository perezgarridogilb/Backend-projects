@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Report: {{ $report->id }}</h1>
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
                    <a class="btn btn-primary mt-2 mb-2" href="/expense_reports/{{ $report->id }}/confirmSendMail">Send email</a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h3>Details</h3>
                    <table class="table">
                        @foreach ($report->expenses as $expense)
                            <tr>
                                <td>{{ $expense->description }}</td>
                                <td>{{ $expense->created_at }}</td>
                                <td>{{ $expense->amount }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <!-- Estos serán los Expense dentro del ExpenseReport -->
                    <a class="btn btn-primary" href="/expense_reports/{{ $report->id }}/expenses/create">New Expense</a>
                </div>
            </div>
        </div>
    @endsection
