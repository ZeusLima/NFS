@extends('layouts.main_layout')
@section('content')

   <h1> logado </h1>


   <form action="{{ route('login') }}" action="post">
    @csrf
        <button type="submit" class="btn btn-danger">LogOut</button>
   </form>

@endsection
