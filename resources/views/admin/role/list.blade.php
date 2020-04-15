@extends('layouts.app')
@push('js')

@endpush
@push('css')

@endpush

@section('content')
    <div class="container">
        <div class="row">
            <h4 class="float-right">
                <a class="btn btn-primary" href="{{route('role.create')}}">Add New</a>
            </h4>
            <table class="table">

                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($roles as $role)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$role->name}}</td>
                        <td>
                            <form action="{{route('role.destroy',$role->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="{{route('role.edit',$role->id)}}" class="btn btn-warning">Edit</a>
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
