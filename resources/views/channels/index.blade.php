@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        
                <h2>Channels</h2>

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
