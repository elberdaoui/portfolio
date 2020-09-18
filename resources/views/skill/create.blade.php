<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Create a Skill</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
  </head>
  <body class="bg-light">
    <h2 class="text-secondary mt-5 text-center">Add a Skill</h2>
    <form action="{{url('/skill')}}" method="post">
      @csrf

      <div class="input-group mx-auto" style="width: 500px; ">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Skill Name</span>
          </div>
          <input type="text" class="form-control" name="skill_name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Percentage</span>
          </div>
          <input type="text" class="form-control" name="percentage" placeholder="between 0 to 100" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Add</button>
          </div>
        </div>
      </div>
</form>
      <!-- <div class="input-group mx-auto" style="width: 500px; margin-top: 30vh">
      <input class="form-control" type="text" name="skill_name" aria-describedby="button-addon2">
      <input class="form-control" type="number" name="percentage" aria-describedby="button-addon2">
      <div class="input-group-append">
        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Add</button>
      </div>

    </div> -->
  </body>
</html>
