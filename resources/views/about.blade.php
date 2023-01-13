@extends('layout.master')

@section('title')
    about us
@endsection

@section('content')
<div class="container">
To contact us follow the links:
</div>
    
@endsection

@foreach ($product as $array)
<div>
    {{$array['name']}} made in {{$array['origin']}}
</div>
@endforeach