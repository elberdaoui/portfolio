
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Works</title>
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

    <h2 class=" mb-5 text-center" style="color: #4070F4;">Works</h2>
    <ul class="mx-auto" style="width: 75vw;">
      @foreach ($work as $wrk)
      <li class="d-flex flex-row bd-highlight mb-3">
        {{$wrk->work_name}}
        <a type="button" class="btn btn-warning ml-auto" href="{{url('/work/'.$wrk->id.'/edit')}}">Edit</a>
        <form action="{{url('work/'.$wrk->id)}}" method="post">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger mx-2" type="submit">Delete</button>
        </form>
      </li>
        @endforeach
    </ul>
    <div class="text-center">

      <a type="button" class="btn bg-primary mt-3 px-5" href="{{url('work/create')}}" style="background-color: #4070F4;">Add a Work</a>
    </div>
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

  <!-- <div class="text-center" style=" width: 750px; margin: auto;">
  <h2 class="text-primary mt-5 text-center" style="border-radius: 10px; height: 50px; background-color: #FFC107;">You are not allowed to access here</h2> -->
<!-- </div> -->
</html>
