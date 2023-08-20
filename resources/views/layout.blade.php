<!DOCTYPE html>
<html>
<head>
    <title> Task Management</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);
  
        body{
            margin: 0;
            font-size: .9rem;
            font-weight: 400;
            line-height: 1.6;
            color: #212529;
            text-align: left;
            background-color: #f5f8fa;
        }
        .navbar-laravel
        {
            box-shadow: 1px 1px 10px rgba(198, 189, 248, 0.825);
            background-color: #ECECEC;
        }
        .navbar-brand , .nav-link, .my-form, .login-form
        {
            font-family: Raleway, sans-serif;
        }
        .my-form
        {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }
        .my-form .row
        {
            margin-left: 0;
            margin-right: 0;
        }
        .login-form
        {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }
        .login-form .row
        {
            margin-left: 0;
            margin-right: 0;
        }
        .main-container {
    display: flex;
    width: 100%;
    position: relative;
    z-index: 1;
}

.main {
    height: 100vh;
    width: 100%;
    overflow-y: scroll;
    overflow-x: hidden;
    padding: 25px;
}

.nav {
    min-height: 91vh;
    width: 250px;
    background-color: #ECECEC;
    overflow: hidden;
    padding: 30px 0 20px 0px;
    position: absolute;
    top: 0px;
    left: 0;
    box-shadow: 1px 1px 10px rgba(198, 189, 248, 0.825);
}

.navcontainer {
    height: 100vh;
    width: 365px;
    position: relative;
    overflow-y: hidden;
    overflow-x: hidden;
    transition: all 0.5s ease-in-out;
}

.navcontainer::-webkit-scrollbar {
    display: none;
}

.navclose {
    width: 65px;
}

/* nav side css */
.nav-upper-options .section-side-nav ul li {
    height: 65px;
}

.nav-upper-options .section-side-nav ul li a .icon {
    min-width: 60px;
    height: 60px;
    left: 5px;
    line-height: 60px;
}

.nav-upper-options .section-side-nav ul li a .icon .fa {
    font-size: 18px;
    color: black;
}

.nav-upper-options .section-side-nav ul li a .title {
    padding: 0 5px;
    font-size: 14px;
    font-weight: 600;
    line-height: 60px;
    white-space: nowrap;
}

.section-side-nav>li>a {
    top: 10px;
}

/* responsive */

@media screen and (max-width: 850px) {
    .navcontainer {
        width: 100vw;
        position: absolute;
        transition: all 0.6s ease-in-out;
        top: 0;
        left: -100vw;
    }

    .nav {
        width: 100%;
        position: absolute;
    }

    .navclose {
        left: 00px;
    }

    .searchbar {
        display: none;
    }

    .main {
        padding: 40px 30px 30px 30px;
    }
}

@media screen and (max-width: 490px) {
    .menuicn {
        height: 25px;
    }

    .contain-support h6 {
        font-size: 10px;
    }
}
    </style>
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="#"> Task Management System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon icn menuicn" id="menuicn">
        </span>
        </button>
        
   
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                    </li>
                @endguest
            </ul>
  
        </div>
    </div>
</nav>

  
@yield('content')
     
</body>
<script>

    let menuicn = document.querySelector(".menuicn");
    let nav = document.querySelector(".navcontainer");
    
    menuicn.addEventListener("click",()=>
    {
        nav.classList.toggle("navclose");
    })
    </script>
</html>