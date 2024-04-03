<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
      .login-card {
          max-width: 400px;
          margin: auto;
      }
  </style>
<body class="container-md">
    <div class="container mt-5">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card login-card">
                  <div class="card-body">
                      <h2 class="text-center mb-4">Login</h2>
                      <form action="/signin" method="POST">
                          @csrf
                       <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  @error('email')
                  <div class="text-danger">{{$message}}</div>
                  @enderror
                </div>
    
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" name="password"class="form-control" id="exampleInputPassword1">
                  @error('password')
                  <div class="text-danger">{{$message}}</div>
                  @enderror
                </div>
                          <button type="submit" class="btn btn-primary btn-block w-100 mx-auto">Login</button>
                      </form>
                      <hr>
                      <div class="text-center mt-3">
                          <a href="#" class="btn btn-danger"><i class="fab fa-google"></i> Login with Google</a>
                      </div>
                      <a href="/register" class="d-block text-center mt-3">Don't have an account?</a>
                  </div>
              </div>
          </div>
      </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
