@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>Edit Channel: {{$channel->title}}</h2><br />
            <form action="{{route('channels.update', $channel->id)}}" method="post">
                {{csrf_field()}} {{ method_field('PATCH') }}
                <div class="form-group">
                    <input type="text" name="title" value="{{ $channel->title }}" class="form-control">
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection