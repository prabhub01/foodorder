<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
  <div class="container"> 
    <p style="float:right;"> <a href="{{ route('login') }}">Login</a> | <a href="{{ route('register') }}">Register</a> </p>
  <br>
    <h3>Welcome to ABC Restaurant. Please place your order down below</h3>
     <hr> 
    <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="input1">Full Name</label>
      <input type="text" class="form-control" id="input1" placeholder="Your Full Name">
    </div>
    <div class="form-group col-md-6">
      <label for="input2">Contact</label>
      <input type="number" class="form-control" id="input2" placeholder="Contact Number">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Your Full Address">
  </div>
 
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="Breakfast">
      <label class="form-check-label" for="Breakfast">
        Breakfast &nbsp;  <small style="color:red;"> * Check to expand menu</small>
      </label> <br>
      <p id="breakfast-data" style="display: none; padding-left:50px;">
      <input class="form-check-input" type="checkbox" value="Tea"> Tea <br>
      <input class="form-check-input" type="checkbox" value="Coffee"> Coffee <br>
      <input class="form-check-input" type="checkbox" value="Bread"> Bread <br>
      <input class="form-check-input" type="checkbox" value="Egg"> Egg <br>
      <input class="form-check-input" type="checkbox" value="Hot Lemon"> Hot Lemon <br>
      </p>
    </div>
  </div>

  <div class="form-group">
  <div class="form-check">
      <input class="form-check-input" type="checkbox" id="Meal">
      <label class="form-check-label" for="Meal">
        Meal
      </label> <br>
      <p id="meal-data" style="display: none; padding-left:50px;">
      <input class="form-check-input" type="checkbox" value="Dhal Bhat"> Dhal Bhat <br>
      <input class="form-check-input" type="checkbox" value="Thakali"> Thakali <br>
      </p>
    </div>
  </div>

  <div class="form-group">
  <div class="form-check">
      <input class="form-check-input" type="checkbox" id="Dinner">
      <label class="form-check-label" for="Dinner">
        Dinner
      </label> <br>
      <p id="dinner-data" style="display: none; padding-left:50px;">
      <input class="form-check-input" type="checkbox" value="Nepalese"> Nepalese <br>
      <input class="form-check-input" type="checkbox" value="Indian"> Indian <br>
      </p>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Order This</button>
</form>
</div>
    </body>

 <script>
$(document).ready(function(){
  $("#Breakfast").click(function(){
    $("#breakfast-data").toggle();
  });
});

$(document).ready(function(){
  $("#Meal").click(function(){
    $("#meal-data").toggle();
  });
});

$(document).ready(function(){
  $("#Dinner").click(function(){
    $("#dinner-data").toggle();
  });
});
</script>

</html>
