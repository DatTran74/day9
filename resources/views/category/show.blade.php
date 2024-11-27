@extends('layouts.frontend')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                           <h4>Show Category Detail
                              <a href="{{url('category')}}" class="btn btn-primary float-end">Back</a>
                           </h4>
                        </div>
                        <div class="card-body">

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <p>
                                {{$category->name}}
                            </p>
                           
                        </div>
                        <div class="mb-5">
                            <label for="name" class="form-label">Description</label>
                            <p>
                                {!!$category->description!!}
                            </p>
                           
                        </div>
                        <div class="mb3">
                            <label >Status</label>
                            <p>
                                {{$category->status == 1 ? 'Visible':'Hidden'}}
                            </p>
                            <br/>
                           
                        </div>
                        
                        </div>
                       
                        </div>
                    </div>
                </div>
               
            </div>
        </div>

@endsection