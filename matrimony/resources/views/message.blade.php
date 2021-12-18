@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row">
        <div class="col-3 card">
            Name
            <a href="{{ url('') }}" class="btn btn-xs pull-right"><h3>Name</h3></a>
        </div>
        <div class="col-9 card">
            Message
        </div>
    </div>
</div>



@endsection
