#
@extends('backend.components.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <span>General Setting</span>
                <a href="/setting" class="float-end btn btn-info">Back</a>

            </div>

            <div class="card-body">

                <form action="/setting" method="post" enctype="multipart/form-data">
                    @csrf
                      <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="linkedin">Phone</label>
                                <input id="phone" class="form-control" type="phone" name="phone" placeholder="enter number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" class="form-control" type="email" name="email" placeholder="enter email">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="facebook">Facebook</label>
                                <input id="facebook" class="form-control" type="facebook" name="facebook" placeholder="enter facebook">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="instagram">Instagram</label>
                                <input id="instagram" class="form-control" type="instagram" name="instagram" placeholder="enter instagram">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="linkedin">Linkedin</label>
                                <input id="linkedin" class="form-control" type="linkedin" name="linkedin" placeholder="enter twiitter">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="twitter">Twitter</label>
                                <input id="twitter" class="form-control" type="twitter" name="twitter" placeholder="enter twitter">
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="logo">Upload</label>
                        <input id="logo" class="form-control" type="file" name="logo">
                    </div>

                    <button type="submit" class="btn btn-info">Submit</button>
              </form>

            </div>
        </div>
    </div>
</div>

@endsection
