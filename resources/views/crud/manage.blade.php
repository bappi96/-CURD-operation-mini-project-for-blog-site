@extends('master')

@section('title')
    Manage Page
@endsection

@section('body')
    <section class="py-5 ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header fw-bold">All News</div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover text-center">
                                <thead >
                                <tr>
                                    <th>SL NO</th>
                                    <th>Name</th>
                                    <th>Author</th>
                                    <th>Heading</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody class="text-primary">
                                @foreach($newses as  $news)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$news->name}}</td>
                                        <td>{{$news->author}}</td>
                                        <td>{{$news->heading}}</td>
                                        <td>{{$news->description}}</td>
                                        <td><img src="{{asset($news->image)}}" alt="" style="height: 100px;width: 100px;"></td>
                                        <td>
                                            <a href="{{route('update',['id' => $news->id])}}" class="btn btn-success">Edit</a>
                                            <a href="{{route('delete',['id' => $news->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete this')"" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
