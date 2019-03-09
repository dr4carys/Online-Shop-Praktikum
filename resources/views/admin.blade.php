@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>

                <div class="card-body">
                   @component('components.who')
                       
                   @endcomponent
                </div>
                <div class="card-footer">
                    <a href={{route('admin.create')}} class="btn btn-primary btn-md">Create</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
