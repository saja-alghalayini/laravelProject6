<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>KidKinder - Kindergarten Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}" > --}}
   

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="css/style.css">
<style>



</style>
</head>

<body>
        <!-- Header Start -->
        <div class="container-fluid bg-primary mb-5">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-3 font-weight-bold text-white">Our Blog</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0"><a class="text-white" href="">Home</a></p>
                    <p class="m-0 px-2">/</p>
                    <p class="m-0 #17a2b8">Our Blog</p>
                </div>
            </div>
        </div>
        <!-- Header End -->
    <div class="container">
        <br>
        <br>
        <br>
        <div class="row">
          <div class="col">
          </div>
          <div class="col">
            {{-- ******************** --}}
            {{-- <form action="{{ url('/image') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="file" name="image" id="image" class="form-control">
                <input type="submit" value="submit">
            </form> --}}
            <form action="{{ url('/blogg') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="file" name="image" id="image" class="form-control">
                <input type="text" name="blog" id="blog" class="form-control">
                <input type="hidden" name="file" id="file" value="{{session('image')}}">
                <button>Submit</button>
            </form>
            {{-- ******************** --}}
            {{-- <form action="{{ url('/blog/send') }}" method="get" enctype="multipart/form-data">
                @csrf

                <div class="input-group mb-3">
                    <label for="inputGroupFile01">Create a post: </label> &nbsp;&nbsp;&nbsp;
                    <input type="text" name="blog" id="blog" class="form-control" >
                  </div>
                <br><br>
                <div class="input-group mb-3">
                    <label for="inputGroupFile01">Image</label> &nbsp;&nbsp;&nbsp;
                    <input type="file" class="form-control" name="file"  id="file">
                  </div>
                <br><br>
                <button type="submit" class="btn btn-warning">post</button>
            </form> --}}
          </div>
          <div class="col">
          </div>
        </div>
      

{{--     
<hr>
<div class="container">
    <div class="row">
@foreach ($data as $item)
<div class="col">
    <div class="card" style="width: 18rem;">
        <img src="{{ $item->img }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{ $item->user_id }}</h5>
          <p class="card-text">{{ $item->text }}.</p>
        </div>
      </div>
      <br>
</div>
<br> --}}
{{-- 
    <ul>
        <li></li>
        <li></li>
        <li></li>
    </ul> --}}
{{-- @endforeach
    </div>
</div> --}}

    
    <!-- Navbar End -->





    <!-- Blog Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Latest Blog</span></p>
                <h1 class="mb-4">Your Blog Here</h1>
            </div>

<div class="container">
    <div class="row row-cols-4">
        @foreach ($data as $item)
      <div class="col">
        <div class="col mb-4">
        <div class="card border-0 shadow-sm mb-2">
            <div class="ml-5 px-5">
            <img class="card-img-top mb-2 ml-5 " src="/img/{{ $item->img }}" alt="" style="width:12rem;">
            </div><div class="card-body bg-light text-center p-4">
                <h4 class="">{{ $item->user_id }}</h4>
                <div class="d-flex justify-content-center mb-3">
                   
                </div>
                <p>{{ $item->text }}</p>
                <a href="" class="btn btn-primary px-4 mx-auto my-2">Delete</a>
            </div>
        </div>
    </div>
</div>
 @endforeach
      {{-- <div class="col">Column</div>
      <div class="col">Column</div>
      <div class="col">Column</div> --}}
    </div>
  </div>
           
    <!-- Blog End -->

</body>

</html>