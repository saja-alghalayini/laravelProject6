@extends('layout.master')


@section('content')

<div class="container" style="margin-top: 94px;">
    <div class="row justify-content-center">
        <div class="col-md-6">

            {{-- @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif --}}

            <div class="card">
                <div class="card-header">
                    <h4>Add Book</h4>
                </div>
                <div class="card-body">
{{$show}}
{{-- {{$show->book_id}} --}}
{{-- {{$student->name}} --}}
                    <form action="{{ url('bookUpdate/{id}/up') }}" method="Get"  enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="">Book Name</label>
                            <input type="text" name="name" value="" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Book Description</label>
                            <input type="text" name="description" value="" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Book Author</label>
                            <input type="text" name="author" value="" class="form-control"required>
                        </div>
                     
                        <div class="form-group mb-3">
                            <label for="">Book suond</label>
                            <input type="file" name="file" value="" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Book Image</label>
                            <input type="file" name="img" value="" class="form-control" required>
                        </div>




                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@show


@include('layout.nav')

