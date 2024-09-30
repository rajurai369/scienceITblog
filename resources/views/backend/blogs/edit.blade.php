@extends('backend.components.app')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span>General blog</span>
                    <a href="/blog" class="float-end btn btn-info">Back</a>
                </div>
                <div class="card-body">

                 <form action="/blog/{{$blog->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="linkedin">Title</label>
                                <input id="title" class="form-control" type="title" name="title" placeholder="enter title" value="{{$blog->title}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="linkedin">Branch</label>
                                <input id="branch" class="form-control" type="branch" name="branch" placeholder="enter branch" value="{{$blog->branch}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea id="description" class="form-control" name="description" placeholder="Enter your description" rows="5">value="{{ $blog->description }}"</textarea>
                            </div>
                        </div>

                    </div>




                    <div class="form-group">
                        <div><img src="{{$blog->image}}" height="90px" width="90px" alt=""></div>
                        <label for="image">Upload</label>
                        <input id="image" class="form-control" type="file" name="image">
                    </div>



                    <button type="submit" class="btn btn-info">Update</button>






                 </form>

                </div>
            </div>
        </div>
    </div>

</div>

@endsection
