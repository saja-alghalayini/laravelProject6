

@yield('contant')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.js') }}" >




<!--Main Navigation-->
<header>
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
      <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
          <a href="{{url('index')}} " class="list-group-item list-group-item-action py-2 ripple active" aria-current="true">
            <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Main dashboard</span>
          </a>

        <!-- Volunteers Table  -->

          <a href="{{url('volunteers')}}" class="list-group-item list-group-item-action py-2 ">
            <i class="fa-solid fa-handshake-angle"></i><span> Volunteers </span>
          </a>
          

          <!-- Uesr Table  -->

        <a href="{{url('users')}}" class="list-group-item list-group-item-action py-2 ripple"><i 
            class="fas fa-users fa-fw me-3"></i><span>Users </span>
        </a>

        <!--Book Table  -->

          <a href="{{url('book')}}" class="list-group-item list-group-item-action py-2 ripple"><i
             class="fa-solid fa-book-open-reader"></i><span> BooK </span>
            </a>

            <!-- Uesr Table  -->



          <a href="{{url('blog')}}" class="list-group-item list-group-item-action py-2 ripple">
            <i class="fa-solid fa-blog"></i><span>   Blog</span>
          </a>


        </div>
      </div>
    </nav>
    <!-- Sidebar -->

    <!-- Navbar -->
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
      <!-- Container wrapper -->
      <div class="container-fluid">
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
          aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>

        <!-- Brand -->
        <a class="navbar-brand" href="#">
          <img src="/Untitled-2_0000_Layer 2 copy.png" height="45" alt="nOOr Logo"
            loading="lazy" />
            <span class="text-warning">admin dashboard</span>
     
        </a>
        <!-- Search form -->

          
      </div></nav></header>

