@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    This is the dashboard for admin.
                    <hr>
                    <div>
                        Working functions:
                        <li>Add User (Click the dropdown to proceed)</li>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
