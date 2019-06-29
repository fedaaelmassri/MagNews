<!DOCTYPE HTML>
<!--
  Future Imperfect by HTML5 UP
  html5up.net | @ajlkn
  Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
  <head>
    <title>@yield('title', 'Homepage')</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

  </head>
  <body class="is-preload">

    <!-- Wrapper -->
      <div id="wrapper">

        <!-- Header -->
          <header id="header">
            <h1><a href="{{ route('home') }}">Future Imperfect</a></h1>
            <nav class="links">
              <ul>
                <li><a href="#">Lorem</a></li>
                <li><a href="#">Ipsum</a></li>
                <li><a href="#">Feugiat</a></li>
                <li><a href="#">Tempus</a></li>
                <li><a href="#">Adipiscing</a></li>
              </ul>
            </nav>
            <nav class="main">
              <ul>
                <li class="search">
                  <a class="fa-search" href="#search">Search</a>
                  <form id="search" method="get" action="#">
                    <input type="text" name="query" placeholder="Search" />
                  </form>
                </li>
                <li class="menu">
                  <a class="fa-bars" href="#menu">Menu</a>
                </li>
              </ul>
            </nav>
          </header>

        <!-- Menu -->
          <section id="menu">

            <!-- Search -->
              <section>
                <form class="search" method="get" action="#">
                  <input type="text" name="query" placeholder="Search" />
                </form>
              </section>

            <!-- Links -->
              <section>
                <ul class="links">
                  <li>
                    <a href="#">
                      <h3>Lorem ipsum</h3>
                      <p>Feugiat tempus veroeros dolor</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <h3>Dolor sit amet</h3>
                      <p>Sed vitae justo condimentum</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <h3>Feugiat veroeros</h3>
                      <p>Phasellus sed ultricies mi congue</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <h3>Etiam sed consequat</h3>
                      <p>Porta lectus amet ultricies</p>
                    </a>
                  </li>
                </ul>
              </section>

            <!-- Actions -->
              <section>
                <ul class="actions stacked">
                  <li><a href="#" class="button large fit">Log In</a></li>
                </ul>
              </section>

          </section>

        <!-- Main -->
          <div id="main">

            @yield('content')

          </div>

        <!-- Sidebar -->
          <section id=" -m">

            <!-- Intro -->
              <section id="intro">
                <a href="#" class="logo"><img src="{{ asset('assets/images/logo.jpg')}}" alt="" /></a>
                <header>
                  <h2>Future Imperfect</h2>
                  <p>Another fine responsive site template by <a href="http://html5up.net">HTML5 UP</a></p>
                </header>
              </section>

            <!-- Mini Posts -->
              <section>
                <div class="mini-posts">

                  <!-- Mini Post -->
                    <article class="mini-post">
                      <header>
                        <h3><a href="single.html">Vitae sed condimentum</a></h3>
                        <time class="published" datetime="2015-10-20">October 20, 2015</time>
                        <a href="#" class="author"><img src="{{asset('asset/images/avatar.jpg')}}" alt="" /></a>
                      </header>
                      <a href="single.html" class="image"><img src="{{asset('asset/images/pic04.jpg')}}" alt="" /></a>
                    </article>

                  <!-- Mini Post -->
                    <article class="mini-post">
                      <header>
                        <h3><a href="single.html">Rutrum neque accumsan</a></h3>
                        <time class="published" datetime="2015-10-19">October 19, 2015</time>
                        <a href="#" class="author"><img src="{{asset('asset/images/avatar.jpg')}}" alt="" /></a>
                      </header>
                      <a href="single.html" class="image"><img src="{{asset('asset/images/pic05.jpg')}}" alt="" /></a>
                    </article>

                  <!-- Mini Post -->
                    <article class="mini-post">
                      <header>
                        <h3><a href="single.html">Odio congue mattis</a></h3>
                        <time class="published" datetime="2015-10-18">October 18, 2015</time>
                        <a href="#" class="author"><img src="{{asset('asset/images/avatar.jpg')}}" alt="" /></a>
                      </header>
                      <a href="single.html" class="image"><img src="{{asset('asset/images/pic06.jpg')}}" alt="" /></a>
                    </article>

                  <!-- Mini Post -->
                    <article class="mini-post">
                      <header>
                        <h3><a href="single.html">Enim nisl veroeros</a></h3>
                        <time class="published" datetime="2015-10-17">October 17, 2015</time>
                        <a href="#" class="author"><img src="{{asset('asset/images/avatar.jpg')}}" alt="" /></a>
                      </header>
                      <a href="single.html" class="image"><img src="{{asset('asset/images/pic07.jpg')}}" alt="" /></a>
                    </article>

                </div>
              </section>

            <!-- Posts List -->
              <section>
                <ul class="posts">
                  <li>
                    <article>
                      <header>
                        <h3><a href="single.html">Lorem ipsum fermentum ut nisl vitae</a></h3>
                        <time class="published" datetime="2015-10-20">October 20, 2015</time>
                      </header>
                      <a href="single.html" class="image"><img src="{{asset('asset/images/pic08.jpg')}}" alt="" /></a>
                    </article>
                  </li>
                  <li>
                    <article>
                      <header>
                        <h3><a href="single.html">Convallis maximus nisl mattis nunc id lorem</a></h3>
                        <time class="published" datetime="2015-10-15">October 15, 2015</time>
                      </header>
                      <a href="single.html" class="image"><img src="{{asset('asset/images/pic09.jpg')}}" alt="" /></a>
                    </article>
                  </li>
                  <li>
                    <article>
                      <header>
                        <h3><a href="single.html">Euismod amet placerat vivamus porttitor</a></h3>
                        <time class="published" datetime="2015-10-10">October 10, 2015</time>
                      </header>
                      <a href="single.html" class="image"><img src="{{asset('asset/images/pic10.jpg')}}" alt="" /></a>
                    </article>
                  </li>
                  <li>
                    <article>
                      <header>
                        <h3><a href="single.html">Magna enim accumsan tortor cursus ultricies</a></h3>
                        <time class="published" datetime="2015-10-08">October 8, 2015</time>
                      </header>
                      <a href="single.html" class="image"><img src="{{asset('asset/images/pic11.jpg')}}" alt="" /></a>
                    </article>
                  </li>
                  <li>
                    <article>
                      <header>
                        <h3><a href="single.html">Congue ullam corper lorem ipsum dolor</a></h3>
                        <time class="published" datetime="2015-10-06">October 7, 2015</time>
                      </header>
                      <a href="single.html" class="image"><img src="{{('images/pic12.jpg')}}" alt="" /></a>
                    </article>
                  </li>
                </ul>
              </section>

            <!-- About -->
              <section class="blurb">
                <h2>About</h2>
                <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod amet placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at phasellus sed ultricies.</p>
                <ul class="actions">
                  <li><a href="#" class="button">Learn More</a></li>
                </ul>
              </section>

            <!-- Footer -->
              <section id="footer">
                <ul class="icons">
                  <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                  <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                  <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                  <li><a href="#" class="icon solid fa-rss"><span class="label">RSS</span></a></li>
                  <li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
                </ul>
                <p class="copyright">&copy; Untitled. Design: <a href="http://html5up.net">HTML5 UP</a>. Images: <a href="http://unsplash.com">Unsplash</a>.</p>
              </section>

          </section>

      </div>

    <!-- Scripts -->
      <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
      <script src="{{ asset('assets/js/browser.min.js') }}"></script>
      <script src="{{ asset('assets/js/breakpoints.min.js') }}"></script>
      <script src="{{ asset('assets/js/util.js') }}"></script>
      <script src="{{ asset('assets/js/main.js') }}"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
  
  </body>
</html>