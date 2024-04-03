<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container-md">
    {{-- <div class="card">
        <div class="card-body">
            <form method="POST" action="/register-user">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  @error('email')
                  <div class="text-danger">{{$message}}</div>
                  @enderror
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Name</label>
                    <input name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp">
                    @error('name')
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
             
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> --}}
    <div class="container mt-5">
      <div class="row justify-content-center">
          <div class="col-md-6">
              <div class="card signup-card">
                  <div class="card-body">
                      <h2 class="text-center mb-4">Sign Up</h2>
                      <form action="/register-user" method="POST">
                          @csrf
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            @error('email')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                          </div>
                          <div class="mb-3">
                              <label for="username" class="form-label">Name</label>
                              <input name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp">
                              @error('name')
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
                          <button type="submit" class="btn btn-primary btn-block w-100 mx-auto">Sign Up</button>
                      </form>
                      <a href="#" class="d-block text-center mt-3">Already have an account?</a>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>