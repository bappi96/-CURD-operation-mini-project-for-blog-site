@extends('master')

@section('title')
    Add
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row ">
                <div class="col-md-8 mx-auto">
                    <div class="card card-body">

                        <form action=" {{route('up',['id' => $news->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-md-3">Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="name" value="{{$news->name}}" class="form-control"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Author Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="author" value="{{$news->author}}" class="form-control"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Heading Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="heading"  value="{{$news->heading}}" class="form-control"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Description</label>
                                <div class="col-md-9">
                                    <textarea name="description" class="form-control">{{$news->description}}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Image</label>
                                <div class="col-md-9">
                                    <input type="file" name="image" class="form-control"/>
                                    <img src="{{asset($news->image)}}" alt="" style="height: 100px; width: 100px;" >
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="" class="btn btn-success" value="Update News Data"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

