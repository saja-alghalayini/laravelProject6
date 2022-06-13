@extends('layout.master')


@section('contant')
    


<footer>

    <div class="container">
        
           
        <a href="{{url('bookInsert')}}" type="button" class="btn btn-primary" style="margin-left: 129px;margin-top:80px">Add Book</a>
            <table class="table table-dark  ">
               

                <thead>
                  <tr>
                    <th scope="col">Book ID</th>
                    <th scope="col">Book Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Book Author </th>
                    <th scope="col">Book Image</th>
                    <th scope="col">Book File</th>
                    <th scope="col">UpDate</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                
                <tbody class="table-group-divider">
                    @foreach ($show as $item)
                        
                    
                  <tr>
                    <th scope="row">{{$item->book_id}}</th>
                    <td>{{$item->book_name}}</td>
                    <td>{{$item->book_description}}</td>
                    <td>{{$item->book_author}}</td>
                    <td>{{$item->book_image}}</td>
                    <td>{{$item->book_file}}</td>
                    <td><a href="{{url('bookUpdate/'.$item->book_id)}}"type="button" class="btn btn-primary">Update</a></td>
                    <td><a href="{{url('bookDelete/'.$item->book_id)}}"type="button" class="btn btn-danger">Delete</a></td>
                  </tr>
                  @endforeach
                 
                </tbody>
              </table>
             

          </footer>



    </div>
    


@endsection




@include('layout.nav')