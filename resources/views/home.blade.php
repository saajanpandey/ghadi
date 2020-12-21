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



                        {{$users->first_name}}
                        {{$users->last_name}}
                        {{$users->address}}
                        {{$users->gender}}
                        {{$users->email}}
                        {{$users->phone_number}}

                    <a href="/home/edit/{{$users->id}}">Edit</a>

                    <a href="/home/delete/{{$users->id}}">Delete Your Account</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

