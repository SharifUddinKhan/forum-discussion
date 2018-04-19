@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

             @if(count($errors))
                 <div class="alert alert-danger">
                   <strong>Whoops!</strong> There were some problems with your input.
                   <br/>
                   <ul>
                     @foreach($errors->all() as $error)
                     <li>{{ $error }}</li>
                     @endforeach
                   </ul>
                 </div>
               @endif
        <div class="col-md-8">
                <h2>Create a New Channel</h2><br />
                    <form action="{{route('channels.store')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <input type="text" name="title" class="form-control">
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
