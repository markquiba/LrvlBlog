@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                    <div class="panel-body">
                        You are logged in!
                        <a href="/"><button class="btn btn-lg btn-primary pull-right">View</button></a>
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover table-condensed">
                            <tr>
                                <th>Name</th>
                                <th>Value</th> 
                                <th></th>
                            </tr>
                            @foreach($contents as $content)
                            <tr>
                                <td>{{ $content->meta_key }}</td>
                                <td>{{ $content->meta_value }}</td> 
                                <td><a href="{{ action('ContentController@edit', [$content->id]) }}"><button class="btn btn-success">Edit</button></a></td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
