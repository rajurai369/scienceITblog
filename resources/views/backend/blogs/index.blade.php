@extends('backend.components.app')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span>General blog</span>
                    @if(empty($blog))
                    <a href="/blog/create" class="float-end btn btn-info">Add</a>


                    @endif
                </div>
                <div class="card-body">

                   <table class="table table-striped">
                    <thead>
                        <tr>

                            <th>Branch</th>
                            <th>Title</th>

                            <th>Image</th>
                            <th>Action</th>

                        </tr>
                    </thead>

                  @if(!empty($blog))

                  <tbody>
                  @foreach ($blog as $blog)
                  <tr>

                    <td>{{$blog->branch}}</td>
                    <td>{{$blog->title}}</td>

                    <td><img src="{{$blog->image}}" height="80px" width="80px" alt=""></td>
                    <td>

                        <form action="/blog/{{$blog->id}}" method="post">
                            @csrf
                            @method('delete')
                            <a href="/blog/{{$blog->id}}/edit" class="btn badge bg-info">Edit</a>

                               <button type="submit" class="btn badge bg-danger">Delete</button>
                        </form>
                    </td>
                </tr>

                  @endforeach
                </tbody>

                  @endif



                   </table>

                </div>
            </div>
        </div>
    </div>

</div>

@endsection
