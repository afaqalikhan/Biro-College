<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Navbar</title>
  <link rel="stylesheet" href="{{ asset('css 3/sidebar.css') }}">
</head>
<body>
<header class="bg-gray-900 relative sticky top-0 z-50"><a id="basic-header-0"></a>

  <nav>
    <ul class="sidebar">
      <li onclick=hideSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 96 960 960" width="26"><path d="m249 849-42-42 231-231-231-231 42-42 231 231 231-231 42 42-231 231 231 231-42 42-231-231-231 231Z"/></svg></a></li>
      <li><a href="#">Results</a></li>
      <li><a href="#">About Us</a></li>
      <li><a href="#">Our Services</a></li>
      <li><a href="#basic-contact-form-0" target="_self" class="text-gray-100 text-sm font-semibold leading-6" style="margin-top:5px;">Contact Us</a></li>
      <li><a href="{{ route('login') }}" target="_blank"  id= "loginCss" class="btn btn-primary">LOGIN</a></li>
      <li><a href="{{ route('register') }}" target="_self" id= "registerCss" class="btn btn-success">Register</a></li>
    </ul>
    <ul>
      <li><a href="#" class="text-gray-100" >Biro College</a></li>
      <li class="hideOnMobile"><a href="{{ route('result.index') }}" target="_blank" class="text-gray-100 text-sm font-semibold leading-6" style="margin-top:5px;">Results</a></li>
      <li class="hideOnMobile"><a href="#basic-content-image-0" target="_self" class="text-gray-100 text-sm font-semibold leading-6" style="margin-top:5px;">About Us</a></li>
      <li class="hideOnMobile"><a href="#three-column-images-0" target="_self" class="text-gray-100 text-sm font-semibold leading-6" style="margin-top:5px;">Our Services</a></li>
      <li class="hideOnMobile"><a href="#basic-contact-form-0" target="_self" class="text-gray-100 text-sm font-semibold leading-6" style="margin-top:5px;">Contact Us</a></li>
      <li class="hideOnMobile">

    @if (Route::has('login'))
     
     @auth
 
     <form method="POST" action="{{ route('logout') }}" x-data>
          @csrf
       
           <button class="btn btn-danger"> LOGOUT </button>
     </form>
    
      @else
 
       <a href="{{ route('login') }}" target="_blank"  id= "loginCss" class="btn btn-primary">LOGIN</a>
       <a href="{{ route('register') }}" target="_self" id= "registerCss" class="btn btn-success"  >REGISTER</a> </li>
 
     @endauth
 
     @endif

     </li>
     <li class="menu-button" onclick=showSidebar()><a href="#" ><svg style="color:aliceblue;" xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 96 960 960" width="26"><path d="M120 816v-60h720v60H120Zm0-210v-60h720v60H120Zm0-210v-60h720v60H120Z"/></svg></a></li>
     </ul>

  </nav>
</header>

  <script>
    function showSidebar(){
      const sidebar = document.querySelector('.sidebar')
      sidebar.style.display = 'flex'
    }
    function hideSidebar(){
      const sidebar = document.querySelector('.sidebar')
      sidebar.style.display = 'none'
    }
  </script>


   
</body>
</html>  -->