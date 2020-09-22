<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Create an Experience</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    @include(backpack_view('inc.head'))
  </head>
  @if (backpack_auth()->check())

  <body class="{{ config('backpack.base.body_class') }}">
    @include(backpack_view('inc.main_header'))
    <div class="app-body">
      @include(backpack_view('inc.sidebar'))

      <main class="main pt-2">

         @yield('before_breadcrumbs_widgets')

         @includeWhen(isset($breadcrumbs), backpack_view('inc.breadcrumbs'))

         @yield('after_breadcrumbs_widgets')

         @yield('header')

         <div class="container-fluid animated fadeIn">

           @yield('before_content_widgets')

           @yield('content')

           @yield('after_content_widgets')

    <h2 class=" mb-5 text-center" style="color: #4070F4;">Add an Experience</h2>
    <form action="{{url('/experience')}}" method="post">
      @csrf

      <div class="input-group mx-auto" style="width: 500px; ">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Duration</span>
          </div>
          <input type="text" placeholder="Format: xxxx - xxxx" class="form-control" name="duration" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Career</span>
          </div>
          <input type="text" placeholder="What you studied" class="form-control" name="career" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Company</span>
          </div>
          <input type="text" placeholder="Where you studied" class="form-control" name="company" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Country</span>
          </div>
          <input type="text" class="form-control" name="place" placeholder="Format: Country - City" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
          <div class="input-group-append">
            <button class="btn btn-outline-primary" type="submit" id="button-addon2">Add</button>
          </div>
        </div>
      </div>

      <!-- <div class="input-group mx-auto" style="width: 500px; margin-top: 30vh">
      <input class="form-control" type="text" name="skill_name" aria-describedby="button-addon2">
      <input class="form-control" type="number" name="percentage" aria-describedby="button-addon2">
      <div class="input-group-append">
        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Add</button>
      </div>
    </form>
    </div> -->
  </div>

  </main>

  </div><!-- ./app-body -->
  @else (!backpack_auth()->check())


  <blockquote class="blockquote text-center">
  <p class="mb-0">You are not allowed to navigate here</p>
  <footer class="blockquote-footer">Admin section <cite title="Source Title"></cite></footer>
  </blockquote>
  @endif
  @yield('before_scripts')
  @stack('before_scripts')

  @include(backpack_view('inc.scripts'))

  @yield('after_scripts')
  @stack('after_scripts')
  </body>
</html>
