@extends('backend.components.app')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span>General Setting</span>
                    @if(empty($setting))
                    <a href="/setting/create" class="float-end btn btn-info">Add</a>


                    @endif
                </div>
                <div class="card-body">

                   <table class="table table-striped">
                    <thead>
                        <tr>

                            <th>Contact</th>
                            <th>Email</th>

                            <th>Logo</th>
                            <th>Action</th>

                        </tr>
                    </thead>

                  @if(!empty($setting))

                  <tbody>
                    <tr>

                        <td>{{$setting->phone}}</td>
                        <td>{{$setting->email}}</td>

                        <td><img src="{{$setting->logo}}" height="80px" width="80px" alt=""></td>
                        <td>  

                            <form action="/setting/{{$setting->id}}" method="post">
                                @csrf
                                @method('delete')
                                <a href="/setting/{{$setting->id}}/edit" class="btn badge bg-info">Edit</a>

                                   <button type="submit" class="btn badge bg-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                </tbody>

                  @endif



                   </table>

                </div>
            </div>
        </div>
    </div>

</div>

@endsection
