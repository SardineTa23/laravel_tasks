@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form action="{{ route('contact.create') }}" , method="GET">
                            <button class="btn btn-primary">new</button>
                        </form>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>title</th>
                                <th>date</th>
                                <th></th>
                            </tr>
                            </thead>
                            @foreach ($contacts as $contact)
                                <tbody>
                                <tr>
                                    <td>{{ $contact->id }}</td>
                                    <td>{{ $contact->your_name }}</td>
                                    <td>{{ $contact->title }}</td>
                                    <td>{{ $contact->created_at }}</td>
                                    <th><a href="{{ route('contact.show', ['id'=> $contact->id ]) }}">show</a></th>
                                </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
