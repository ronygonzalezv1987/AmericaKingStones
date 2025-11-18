 <nav class="navbar  navbar-expand-lg bg-dark ">
     <div class=" flex-container  container-fluid">
         <a class="navbar-brand" href="#" style="color: whitesmoke;">AmericaKingtones
             <img class="logo" src="" />
         </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu"
             aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span>
                 <i class="fas fa-bars"></i>
             </span>
         </button>
         <div id='main-menu' class=" collapse navbar-collapse">
             <ul class=" navbar-nav">
                 <li class="nav-item"><a href="{{ route('homepage.index') }}">Home</a></li>
                 <li class="nav-item"><a href="{{ route('about') }}">About</a></li>
                 <li class="nav-item"><a href="{{ route('contact') }}">Contact</a></li>
                 <li class="nav-item"><a href="{{ route('services') }}">Services</a></li>


                 <li class="nav-item dropdown">
                     <a class=" nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                         aria-expanded="false">
                         Materials
                     </a>

                     <ul class="dropdown-menu">
                         <div class="classFlex">
                             <li><a class="dropdown-item" href="#">Granite</a></li>
                             <li><a class="dropdown-item" href="#">Marble</a></li>
                             <li><a class="dropdown-item" href="#">Quart</a></li>
                         </div>
                     </ul>

                 </li>

                 <li class="nav-item">
                     <a href="{{ route('login') }}">Login</a> /
                     <a href="{{ route('register') }}">Register</a>
                 </li>
                 <li class="nav-item"><a href="{{ route('admin.') }}">Admin</a></li>




             </ul>

         </div>


     </div>
 </nav>
