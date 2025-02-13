<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Signup Form</title> 
    <link rel="stylesheet" href="{{url('CSS/styles.css')}}">
   </head>
<body>
  <div class="wrapper">
    <h2>Registration</h2>
    <form action="{{route('registerSave')}}", method="post">
      @csrf
      <div class="input-box">
        <input type="text" name ="name" placeholder="Enter your name" required>
      </div>
      <div class="input-box">
        <input type="text" name="email" placeholder="Enter your email" required>
      </div>
      <div class="input-box">
        <input type="password" name = "passsword" placeholder="Create password" required>
      </div>
      <div class="input-box">
        <input type="password" name ="password_conformation"placeholder="Confirm password" required>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Register Now">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="{{route('login')}}">Login now</a></h3>
      </div>
    </form>
  </div>
</body>
</html>