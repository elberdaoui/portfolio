
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Educations</title>
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

    <h2 class=" mb-5 text-center" style="color: #4070F4;">Educations</h2>
    <table class="table table-striped">
      <thead>
        <tr id="myth">
          <th id="myth" scope="col">#</th>
          <th scope="col">Duration</th>
          <th scope="col">Profession</th>
          <th scope="col">Establishment</th>
          <th scope="col">Country</th>
          <th scope="col">Modifier</th>
          <th scope="col">Suprimer</th>


        </tr>
      </thead>

      @foreach ($education as $educate)
     <tbody>
       <tr>

         <th scope="row">{{$educate->id}}</th>
         <td>{{$educate->duration}}</td>
         <td>{{$educate->profession}}</td>
         <td>{{$educate->establishment}}</td>
         <td>{{$educate->place}}</td>
         <td><a type="button" class="btn btn-warning ml-auto" href="{{url('/education/'.$educate->id.'/edit')}}">Edit</a></td>
          <td><form action="{{url('education/'.$educate->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger mx-2" type="submit">Delete</button>
          </form></td>
         @endforeach
</table>
<div class="text-center">

  <a type="button" class="btn bg-primary mt-3 px-5" href="{{url('education/create')}}">Add an education</a>
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
</html>
