
 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Food Blog</title>
  <link rel="stylesheet" href="{{ asset('css/app.css')}}">
  @stack('styles')
</head>

<body>
  <header>
    <div class="logo">
      <img src="Images/62e1154107d87_json_image_1658918209.webp" alt="Food Blog Logo" style="max-width: 30%">
    </div>
    <nav>
      <ul>
        <li><a href="#">Food Blog</a></li>
        {{-- <li><a href="#">Listings</a></li> --}}
        <li class="active"><a href="#">Blog</a></li>
        <li><a href="/Aboutus">About Us</a></li>
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
  <main>


<h2 class="page-name" >Blogs</h2>

<div style="display: flex;justify-content:center">
    <section class="blog-posts">
        <article class="post">
            <div class="post-image">
              <a href="">
                <img loading="lazy" decoding="async" src="Images/3_47ad27a4-db92-4c31-a3ca-d98e645f6ab4.webp" alt="White Sauce Pasta Recipe">
              </a>
            </div>
            <div class="post-content">
              <h2 class="post-title"><a href="">White Sauce Pasta Recipe (White Pasta)</a></h2>
              <div class="post-description">
                White Sauce Pasta...
              </div>
              <div class="post-read-more">
                <a href=''>Read More</a>
              </div>
            </div>
          </article>
    </section>
    <section class="blog-posts">
          <article class="post">
            <div class="post-image">
              <a href="">
                <img loading="lazy" decoding="async" src="Images/photo-1567620905732-2d1ec7ab7445.jpg" alt="White Sauce Pasta Recipe">
              </a>
            </div>
            <div class="post-content">
              <h2 class="post-title"><a href="">Mango Pancakes with Coconut Recipe</a></h2>
              <div class="post-description">
                Mango Pancakes...
              </div>
              <div class="post-read-more">
                <a href=''>Read More</a>
              </div>
            </div>
          </article>
    </section>
  </div>
  <div style="display: flex;justify-content:center">
    <section class="blog-posts">
      <article class="post">
        <div class="post-image">
          <a href="">
            <img loading="lazy" decoding="async" src="Images/pexels-abhinav-goswami-291528-1024x863.jpg" alt="White Sauce Pasta Recipe">
          </a>
        </div>
        <div class="post-content">
          <h2 class="post-title"><a href="">Dark Valrhona Chocolate Cake recipe</a></h2>
          <div class="post-description">
            Dark Chocolate Cake....
          </div>
          <div class="post-read-more">
            <a href=''>Read More</a>
          </div>
        </div>
      </article>
</section>
<section class="blog-posts">
  <article class="post">
    <div class="post-image">
      <a href="">
        <img loading="lazy" decoding="async" src="Images/veggie-spring-rolls-blog.jpg" alt="White Sauce Pasta Recipe">
      </a>
    </div>
    <div class="post-content">
      <h2 class="post-title"><a href="">Spring Rolls Recipe </a></h2>
      <div class="post-description">
        Spring Rolls are...
      </div>
      <div class="post-read-more">
        <a href=''>Read More</a>
      </div>
    </div>
  </article>
</section>
  </div>


<section style="display: grid;
grid-template-columns: repeat(2,4fr);
grid-gap: 50px;
margin-left: 385px;
width: 1149px;
margin-top: 29px;
">
    @if($posts)
    @foreach ($posts as $post)


            <article class="post">
    <div  class="post-image">
      <a href="">
        <img loading="lazy" decoding="async" src="Images/veggie-spring-rolls-blog.jpg" alt="White Sauce Pasta Recipe">
      </a>
    </div>
    <div class="post-content">
      <h2 class="post-title"><a href="">{{ $post->title }} </a></h2>
      <div class="post-description">
        {{ $post->content }}
      </div>
      <div class="post-read-more">
        <a href='{{ route('post-show', $post->id)}}'>Read More</a>
      </div>
    </div>
  </article>

@endforeach

@else
        <div class="p-6">No content yet, please visit after some days.</div>
    @endif

</section>




  </main>

  <script src="script.js"></script>
</body>
<x-footer></x-footer>
</html>



