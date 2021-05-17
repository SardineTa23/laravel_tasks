@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    edit
                    {{ $contact->your_name }}
                    {{ $contact->title }}
                    <form action="{{ route('contact.update', ['id' => $contact->id]) }}" method="POST">
                        @csrf
                        name
                        <input type="text" name="your_name" value="{{ $contact->your_name }}"><br>
                        title
                        <input type="text" name="title" value="{{ $contact->title }}"><br>
                        email
                        <input type="email" name="email" value="{{ $contact->email }}"><br>
                        homepage
                        <input type="url" name="url" value="{{ $contact->url }}"><br>
                        gender
                        <input type="radio" name="gender" value="0" @if($contact->gender === 0) checked @endif >male
                        <input type="radio" name="gender" value="1" @if($contact->gender === 1) checked @endif>female
                        <br>
                        age
                        <select name="age" id="">
                            <option value=""></option>
                            <option value="1" @if($contact->age === 1) selected @endif>-19</option>
                            <option value="2" @if($contact->age === 2) selected @endif>20-29</option>
                            <option value="3" @if($contact->age === 3) selected @endif>30-39</option>
                            <option value="4" @if($contact->age === 4) selected @endif>40-49</option>
                            <option value="5" @if($contact->age === 5) selected @endif>50-59</option>
                            <option value="6" @if($contact->age === 6) selected @endif>60-</option>
                        </select><br>
                        contact <br>
                        <textarea name="contact" id="" cols="30" rows="10">{{ $contact->contact }}</textarea><br>
                        <input type="checkbox" name="caution" value="1">check <br>
                        <input class="btn btn-info" type="submit" value="update">
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
