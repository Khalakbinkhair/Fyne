@extends('layouts.admin-layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <h1>Admin</h1>
                <div class="card-header"> Admin{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in! ADMIN') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection