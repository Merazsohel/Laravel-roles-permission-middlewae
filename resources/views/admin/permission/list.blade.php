@extends('layouts.app')
@push('js')

@endpush
@push('css')

@endpush

@section('content')
    <div class="container">
        <div class="row">

            <h4 class="float-right">
                <a class="btn btn-primary" href="{{route('permission.create')}}">Add New</a>
            </h4>
            <table class="table">

                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($permissions as $permission)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$permission->role->name}}</td>
                        <td>
                            <form action="{{route('permission.destroy',$permission->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="{{route('permission.edit',$permission->id)}}" class="btn btn-warning">Edit</a>
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
