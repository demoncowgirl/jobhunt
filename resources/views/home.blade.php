@extends('layouts.card')

@section('card-title')
    Home
@endsection

@section('card-body')

    @if (Auth::user()->is_admin)

        <h2>Job Hunt</h2>

        <ul>
            <li><a href="/contacts">Add Contact</a></li>
        </ul>

    @endif

    <h2>My Contacts</h2>
    <ul>
        @if (\Auth::user()->is_admin  || $settings->users_can_create_groups)
        <li><a href="/contacts/create">Create a Contact</a></li>
        @endif
    </ul>

    <h2>My Companies</h2>
    <ul>
        <li><a href="/contacts">Find a Company</a></li>
    </ul>

@endsection
