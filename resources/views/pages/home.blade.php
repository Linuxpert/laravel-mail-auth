@extends('layouts.main-layout')
@section('content')
    
    
    <videogame-table user="{{Auth::check()}}"></videogame-table>

@endsection