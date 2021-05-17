@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    @if($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                    @endif

                    <form action="{{route('contact.store')}}" method="POST">
                        @csrf
                        name
                        <input type="text" name="your_name"><br>
                        title
                        <input type="text" name="title"><br>
                        email
                        <input type="email" name="email"><br>
                        homepage
                        <input type="url" name="url"><br>
                        gender
                        <input type="radio" name="gender" value="0">male
                        <input type="radio" name="gender" value="1">female
                        <br>
                        age
                        <select name="age" id="">
                            <option value=""></option>
                            <option value="1">-19</option>
                            <option value="2">20-29</option>
                            <option value="3">30-39</option>
                            <option value="4">40-49</option>
                            <option value="5">50-59</option>
                            <option value="6">60-</option>
                        </select><br>
                        contact <br>
                        <textarea name="contact" id="" cols="30" rows="10"></textarea><br>
                        <input type="checkbox" name="caution" value="1">check <br>
                        <input class="btn btn-info" type="submit" value="registar">
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
