@extends('layouts.frontend')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                           <h4>Create Category 
                              <a href="{{url('category')}}" class="btn btn-primary float-end">Back</a>
                           </h4>
                        </div>
                        <div class="card-body">

                        <form action="{{ route('category.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control"  name="name">
                            @error('name'){{ $message }}@enderror
                        </div>
                        <div class="mb-5">
                            <label for="name" class="form-label">Description</label>
                            <textarea name="description" row="3" class="form-control"></textarea> 
                            @error('description'){{ $message }}@enderror
                        </div>
                        <div class="mb3">
                            <label >Status</label>
                            <br/>
                            <input type="checkbox" name="status" checked style="width:30px;height:30px"/> Checked=visible,unchecked=hidden

                            @error('status'){{ $message }}@enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                        </form>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>

@endsection