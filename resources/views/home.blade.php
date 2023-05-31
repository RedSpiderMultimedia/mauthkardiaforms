@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('error'))
                    <div class="alert alert-success" role="alert">
                        {{ session('error') }}
                    </div>
                @endif
                    <p>
                        {{ __('You are logged in!') }}
                    </p>

                    <p>Multiauth System with bootstrap. Login Controller has logic that redirects user based on user or admin status. I attempted to replace bootstrap with Tailwind. Not completed. user1@user.com and admin@admin.com are the users. Password is the password. </p>
                    <p>https://www.youtube.com/watch?v=wODW8RLBPt0</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
