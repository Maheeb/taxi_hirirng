@extends('layouts.admin')
@section('content')
    <h1>All Tariffs</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Image</th>
            <th>Class</th>
            <th>Sub Text</th>
            <th>Distance</th>
            <th>Update Product</th>
            <th>Delete Product</th>

        </tr>
        </thead>
        <tbody>


            @foreach($tarifs as $tarif)

                <tr>
                    <td>{{$tarif->id}}</td>
                    <td><img  width="50px" height="50px" src="{{asset('frontend/images/'.$tarif->image)}}" alt=""></td>
                    <td>{{$tarif->class}}</td>
                    <td>{{$tarif->sub_text}}</td>
                    <td>{{$tarif->distance}}</td>
                    <td><a class="btn btn-info" href="{{route('tariffs.edit',$tarif->id)}}">Update Tariffs</a></td>
                    <td>
                        {!! Form::open(['method' => 'DELETE' ,'action'=>['TarifController@destroy',$tarif->id]]) !!}


                        <div class="form-group">

                            {!! Form::submit('Delete Tariffs', ['class' => 'btn btn-danger']) !!}

                        </div>
                        {!! Form::close() !!}

                    </td>
                </tr>

            @endforeach

        </tbody>
    </table>


@stop