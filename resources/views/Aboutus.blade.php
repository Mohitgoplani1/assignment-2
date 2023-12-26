<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
  @stack('styles')
</head>
<header>
    <div class="logo">
      <img src="Images/62e1154107d87_json_image_1658918209.webp" alt="Food Blog Logo">
    </div>
    <nav>
      <ul>
        <li><a href="{{route('home')}}">Food Blog</a></li>
        {{-- <li><a href="#">Listings Your Recipe</a></li> --}}
        <li><a href="{{route('home')}}">Blog</a></li>
        <li class="active"><a href="/Aboutus">About Us</a></li>
        @if (Route::has('login'))
                    @auth
                        <li><a href="{{ url('/dashboard') }}" >Dashboard</a></li>
                    @else
                        <li><a href="{{ route('login') }}" >Log in</a></li>

                        @if (Route::has('register'))
                    <li><a href="{{ route('register') }}" >Register</a></li>
                        @endif
                    @endauth
        @endif
      </ul>
    </nav>
    <div class="cta-buttons">
      <a href="#" class="cta-button">List Your Place</a>
      <a href="{{ route('admin-posts-create') }}" class="cta-button">Share Your Recipe</a>
    </div>
  </header>
<br>
<body>


<div class="container mt-5 d-flex justify-content-center">

    <div class="card p-3 justify-content-center" style="margin-left: 718px;width: 373px;
    border: none;
    border-radius: 10px;
    background-color: #fff;
    height: 371px;
    margin-top:202px;
  ">

        <div class="d-flex justify-content-center">

            <div style="margin-left: 97px;
            margin-bottom: 19px;
            padding: 5px;">
        <img src="Images/WhatsApp Image 2023-12-23 at 5.13.40 PM.jpeg" class="rounded" style="border-radius: 20.4rem" width="155" >
        </div>

        <div class="ml-3 w-100">

           <h4 class="mb-2 mt-5 ml-24" style="margin-left: 90px;">__Aditya Wanwade__</h4>
           <span class="mb-0 mt-0 ml-24" style="margin-left: 92px;">__Web Developer__</span>

           <div class="p-2 mt-2 bg-primary d-flex justify-content-between rounded text-white stats">

            <div class="d-flex flex-column" style="margin-left: 37px;
            margin-bottom: 31px;
            margin-top: 31px;">

                <span class="articles">Articles</span>
                <span class="number1">38</span>





                <span class="followers">Followers</span>
                <span class="number2">980</span>






                <span class="rating">Rating</span>
                <span class="number3">8.9</span>



           </div>


           <div class="button ml-20 mt-5 d-flex flex-row align-items-center">

            <button style="color: #e7e8ee;
            background-color: #8a879c;
            border-radius: 10px;
            padding: 11px;
            margin-left: 90px;">
            <a href="https://instagram.com/adwanwade?igshid=M2RkZGJiMzhjOQ==" style="text-decoration: none">
                Follow
            </button>
<button style="color: #e7e8ee;
background-color: #8a879c;
border-radius: 10px;
padding: 11px;margin-left:30px"><a href="https://www.linkedin.com/in/aditya-wanwade-07b888216?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" style="text-decoration: none">Connect</button>

           </div>





        </div>

    </div>
</div>
</div>


 <style>
    body{

background-color:#9d2424d4;
border-radius: 10px;

}


.card{
width: 400px;
border: none;
border-radius: 10px;

background-color: #fff;
}



.stats{

  background: #f2f5f8 !important;

color: #000 !important;
}
.articles{

color: #595b60;
}
.number1{
font-weight:500;
padding: 5px;
}
.followers{

color: #595b60;
padding: 5px;
}
.number2{
font-weight:500;
padding: 5px;
}
.rating{
    padding: 5px;
color: #595b60;
}
.number3{
font-weight:500;
padding: 5px;
}
</style>
</body>
</html>
