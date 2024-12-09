<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login Form</title> 
    <link rel="stylesheet" href="{{url('CSS/styles.css')}}">
   </head>
<body>
  <div class="wrapper">
    <h2>Login</h2>
    <form action="{{route('login')}}", method="post">
        @csrf
      <div class="input-box">
        <input type="email" placeholder="Enter your email" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="password" required>
      </div>
      <div class="input-box button">
        <input type="Submit" name="submit">
      </div>
      <div class="text">
        <h3>Don't Have an account ? <a href="{{route('signup')}}">Create Account</a></h3>
      </div>
    </form>
  </div>
</body>
</html>