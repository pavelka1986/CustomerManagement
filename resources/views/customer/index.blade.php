@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Customers of current user <strong>{{ $user->name }}</strong></div>

                    <div class="panel-body">
                        <ul>
                            @foreach($custom as $_customer)
                                <li><strong>{{ $_customer['name'] }}</strong><br>
                                    <p>{{ $_customer['description'] }}<br>
                                        {{ $_customer['address'] }}</p></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
