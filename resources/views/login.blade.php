<!-- kế thừa view master -->
@extends('students-layout.master')

<!-- thay đổi nội dung đơn giản -->
@section('title', 'Title list extends')

@section('header', 'Header list extends')

<!-- thay đổi nội dung phức tạp -->
@section('contert')

    <form method="POST" action="{{ route('post-login') }}">
        @csrf
        <input name="username" placeholder="Username" type="text" />
        <input name="password" placeholder="Password" type="password" />
        <button type="submit">Submit</button>
    </form>

@endsection

@section('footer', 'Footer list extends')
