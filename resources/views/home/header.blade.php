<!-- <header class="bg-gray-900 relative sticky top-0 z-50"><a id="basic-header-0"></a> <nav role="navigation" class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global"><div class="flex lg:flex-1"><a href="/" class="-m-1.5 p-1.5 flex items-center gap-3"><img src="https://res.cloudinary.com/dq0gbgsdy/image/upload/c_limit,h_147/uploads/-oYpaNES2.png" class="w-auto h-[49px]" alt=""> <h1 class="text-gray-100 font-semibold">Biro College</h1></a></div> <div class="flex order-last ml-12 lg:hidden"><button type="button" class="text-gray-100 -m-2.5 inline-flex items-center justify-center rounded-md p-2.5"><span class="sr-only">Open main menu</span> <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path></svg></button></div>
    <div class="hidden lg:flex lg:gap-x-12"><a href="{{ route('result.index') }}" target="_blank" class="text-gray-100 text-sm font-semibold leading-6" style="margin-top:5px;">Results</a><div class="hidden lg:flex lg:gap-x-12"><a href="#basic-content-image-0" target="_self" class="text-gray-100 text-sm font-semibold leading-6" style="margin-top:5px;">About Us</a><a href="#three-column-images-0" target="_self" class="text-gray-100 text-sm font-semibold leading-6" style="margin-top:5px;">Our Services</a><a href="#basic-contact-form-0" target="_self" class="text-gray-100 text-sm font-semibold leading-6" style="margin-top:5px;">Contact Us</a>
      
    @if (Route::has('login'))
     
    @auth

    <form method="POST" action="{{ route('logout') }}" x-data>
         @csrf
      
          <button class="btn btn-danger"> LOGOUT </button>
    </form>
   
     @else

    <a href="{{ route('login') }}" target="_blank"  id= "loginCss" class="btn btn-primary">LOGIN</a>
    <a href="{{ route('register') }}" target="_self" id= "registerCss" class="btn btn-success">REGISTER</a>

    @endauth

    @endif
   
    
</div></nav> </header>      -->

                            <!-- Same Code but Clean code by CHATGPT -->

  <!-- <header class="bg-gray-900 relative sticky top-0 z-50">
  <a id="basic-header-0"></a>
  <nav role="navigation" class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
    <div class="flex lg:flex-1">
      <a href="/" class="-m-1.5 p-1.5 flex items-center gap-3">
        <img src="https://res.cloudinary.com/dq0gbgsdy/image/upload/c_limit,h_147/uploads/-oYpaNES2.png" class="w-auto h-[49px]" alt="">
        <h1 class="text-gray-100 font-semibold">Biro College</h1>
      </a>
    </div>
    <div class="flex order-last ml-12 lg:hidden">
      <button type="button" class="text-gray-100 -m-2.5 inline-flex items-center justify-center rounded-md p-2.5">
        <span class="sr-only">Open main menu</span>
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
        </svg>
      </button>
    </div>
    <div class="hidden lg:flex lg:gap-x-12">
      <a href="{{ route('result.index') }}" target="_blank" class="text-gray-100 text-sm font-semibold leading-6" style="margin-top:5px;">Results</a>
      <a href="#basic-content-image-0" target="_self" class="text-gray-100 text-sm font-semibold leading-6" style="margin-top:5px;">About Us</a>
      <a href="#three-column-images-0" target="_self" class="text-gray-100 text-sm font-semibold leading-6" style="margin-top:5px;">Our Services</a>
      <a href="#basic-contact-form-0" target="_self" class="text-gray-100 text-sm font-semibold leading-6" style="margin-top:5px;">Contact Us</a>
    @if (Route::has('login'))
      @auth
        <form method="POST" action="{{ route('logout') }}" x-data>
          @csrf
          <button class="btn btn-danger">LOGOUT</button>
        </form>
      @else
        <a href="{{ route('login') }}" target="_blank" id="loginCss" class="btn btn-primary">LOGIN</a>
        <a href="{{ route('register') }}" target="_self" id="registerCss" class="btn btn-success">REGISTER</a>
      @endauth
    @endif
    </div>
  </nav>
</header>   -->
                           <!-- responsive side bar good well by ChatGpt  -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Sidebar Navigation</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
    }
    body {
      min-height: 100vh;
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    nav {
      background-color: rgb(17 24 39);
      box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.1);
    }
    nav ul {
      width: 100%;
      list-style: none;
      display: flex;
      justify-content: flex-end;
      align-items: center;
    }
    nav li {
      height: 50px;
    }
    nav a {
      height: 100%;
      /* padding: 0 30px; */
      text-decoration: none;
      display: flex;
      align-items: center;
      color: black;
    }
    nav a:hover {
      background-color: black;
    }
    nav li:first-child {
      margin-right: auto;
    }
    .sidebar {
      transform: translateX(-100%);
      transition: transform 0.3s ease-in-out;
      position: fixed;
      top: 0;
      left: 0;
      height: 100vh;
      width: 100%;
      background-color: rgba(17, 24, 39, 0.95);
      backdrop-filter: blur(12px);
      z-index: 50;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding-top: 50px;
    }
    .sidebar-open {
      transform: translateX(0);
    }
    .sidebar a {
      width: 100%;
      text-align: center;
      color: white;
      margin: 10px 0;
    }
    .menu-button {
      display: none;
    }
    @media(max-width: 800px) {
      .hideOnMobile {
        display: none;
      }
      .menu-button {
        display: block;
        color: white;
      }
    }
  </style>
</head>
<body class="bg-gray-100">

<header class="bg-gray-900 relative sticky top-0 z-50">
  <nav role="navigation" class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
    <div class="flex lg:flex-1">
      <a href="/" class="-m-1.5 p-1.5 flex items-center gap-3">
        <img src="https://res.cloudinary.com/dq0gbgsdy/image/upload/c_limit,h_147/uploads/-oYpaNES2.png" class="w-auto h-[49px]" alt="">
        <h1 class="text-gray-100 font-semibold">Biro College</h1>
      </a>
    </div>
    <div class="flex order-last ml-12 lg:hidden">
      <button type="button" class="text-gray-100 -m-2.5 inline-flex items-center justify-center rounded-md p-2.5 menu-button" id="menu-button">
        <span class="sr-only">Open main menu</span>
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
        </svg>
      </button>
    </div>
    <div class="hidden lg:flex lg:gap-x-12">
      <a href="{{ route('result.index') }}" target="_self" class="text-gray-100 text-sm font-semibold leading-6" style="margin-top:5px;">Results</a>
      <a href="#basic-content-image-0" target="_self" class="text-gray-100 text-sm font-semibold leading-6" style="margin-top:5px;">About Us</a>
      <a href="#three-column-images-0" target="_self" class="text-gray-100 text-sm font-semibold leading-6" style="margin-top:5px;">Our Services</a>
      <a href="#basic-contact-form-0" target="_self" class="text-gray-100 text-sm font-semibold leading-6" style="margin-top:5px;">Contact Us</a>
   
    @if (Route::has('login'))
      @auth
        <form method="POST" action="{{ route('logout') }}" x-data>
          @csrf
          <button class="btn btn-danger">LOGOUT</button>
        </form>
      @else
        <a href="{{ route('login') }}" target="_self" id="loginCss" class="btn btn-primary">LOGIN</a>
        <a href="{{ route('register') }}" target="_self" id="registerCss" class="btn btn-success">REGISTER</a>
      @endauth
    @endif
    </div>
  </nav>
</header>

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
  <div class="p-6">
    <a href="/" class="flex items-center gap-3 mb-8">
      <img src="https://res.cloudinary.com/dq0gbgsdy/image/upload/c_limit,h_147/uploads/-oYpaNES2.png" class="w-auto h-[49px]" alt="">
      <h1 class="text-gray-100 font-semibold">Biro College</h1>
    </a>
    <nav class="space-y-4">
      <a href="{{ route('result.index') }}" target="_self" class="block text-sm font-semibold">Results</a>
      <a href="#basic-content-image-0" target="_self" class="block text-sm font-semibold">About Us</a>
      <a href="#three-column-images-0" target="_self" class="block text-sm font-semibold">Our Services</a>
      <a href="#basic-contact-form-0" target="_self" class="block text-sm font-semibold">Contact Us</a>
    </nav>
    @if (Route::has('login'))
      @auth
        <form method="POST" action="{{ route('logout') }}" x-data class="mt-6">
          @csrf
          <button class="btn btn-danger w-full">LOGOUT</button>
        </form>
      @else
        <div class="mt-6">
          <a href="{{ route('login') }}" target="_self" id="loginCss" class="btn btn-primary w-full mb-2">LOGIN</a>
          <a href="{{ route('register') }}" target="_self" id="registerCss" class="btn btn-success w-full">REGISTER</a>
        </div>
      @endauth
    @endif
  </div>
</div>

<!-- Overlay -->
<div class="fixed inset-0 bg-black opacity-50 hidden" id="overlay"></div>

<script>
  document.getElementById('menu-button').addEventListener('click', function() {
    document.getElementById('sidebar').classList.toggle('sidebar-open');
    document.getElementById('overlay').classList.toggle('hidden');
  });

  document.getElementById('overlay').addEventListener('click', function() {
    document.getElementById('sidebar').classList.remove('sidebar-open');
    document.getElementById('overlay').classList.add('hidden');
  });

  const sidebarLinks = document.querySelectorAll('.sidebar a');
  sidebarLinks.forEach(link => {
    link.addEventListener('click', () => {
      document.getElementById('sidebar').classList.remove('sidebar-open');
      document.getElementById('overlay').classList.add('hidden');
    });
  });
</script>

</body>
</html>
