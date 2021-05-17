@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    show
                    {{ $contact->your_name }}
                    <form action="{{ route('contact.edit', ['id' => $contact->id]) }}" method="GET">
                        @csrf

                        <input class="btn btn-info" type="submit" value="update">
                    </form>
                    <form action="{{ route('contact.destroy', ["id" => $contact->id] ) }}" method="POST">
                        @csrf

                        <input class="btn btn-info" type="submit" value="destroy">
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
