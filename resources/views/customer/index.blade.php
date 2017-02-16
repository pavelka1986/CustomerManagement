@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Customers of current user <strong>{{ $user->name }}</strong></div>

                    <div class="panel-body">
                        <ul class="list-group">
                            @foreach($custom as $_customer)
                                <li class="list-group-item">

                                    <form method="POST" action="/home/{{ $_customer['id'] }}">
                                        {{ method_field('PUT') }}
                                        {{ csrf_field() }}
                                        <input type="hidden" name="id" value="{{ $_customer['id'] }}" class="form-control">
                                        <input type="hidden" name="active" value="{{ $_customer['active'] }}" class="form-control">
                                        <div class="form-group">
                                            <input name="name" value="{{ $_customer['name'] }}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <textarea name="description" class="form-control">{{ $_customer['description'] }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <input name="address" value="{{ $_customer['address'] }}" class="form-control">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>

                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
