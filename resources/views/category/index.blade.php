@extends('layouts.nav')


@section('content')

    <div class="container">

        <form action="" class="form-group">
            <input type="text" name="category" placeholder="Add Category" class="form-control">
            <input type="submit" class="form-submit" value="Add">
        </form>

        <table class="category">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($category as $value)
                    <tr>
                        <td> {{$value->id}} </td>
                        <td> {{$value->name}} </td>
                        <td>
                            <a href="" class="btn-primary">Edit</a>
                            <a href="" class="btn-danger">Delete</a>
                        </td>

                    </tr>
                @endforeach
            </tbody>
    
        </table>
    </div>

@endsection
