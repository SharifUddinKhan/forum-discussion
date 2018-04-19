@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="card-header">Channels</h3>
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                        @foreach($channels as $channel)
                        <li class="list-group-item text-center"><br />
                            {{$channel->title}}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
          
        <div class="col-md-8">
            
            <h3 class="card-header">Channels</h3>
            <table class="table table-hover">
                <thead>
                    <th>
                        NAME
                    </th>
                    <th>
                        EDIT
                    </th>
                    <th>
                        DELETE
                    </th>
                </thead>
                <tbody>
                    
                    @foreach($channels as $channel)

                    <tr>
                        <td>{{$channel->title}}</td>
                        
                        <td><a href="{{route('channels.edit',  $channel->id)}}" class="btn btn-xs btn-primary">EDIT</a></td>
                        
                        <td><form action="{!! action('ChannelsController@destroy', $channel->id) !!}" method="POST" >
                            {{ csrf_field() }} {{ method_field('DELETE') }}
                            <button type="submit" role="button" class="btn btn-danger">Delete</button>
                            
                        </form>
                    </td>
                </tr>
                
                @endforeach

            </tbody>
        </table>
    </div>
</div>
</div>
            
@endsection
