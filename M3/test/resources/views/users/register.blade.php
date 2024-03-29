<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <section class="vh-100" style="background-color: #eee;">
                    <div class="container h-100">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col-lg-12 col-xl-11">
                                <div class="card text-black" style="border-radius: 25px;">
                                    <div class="card-body p-md-5">
                                        <div class="row justify-content-center">
                                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                                                <form class="mx-1 mx-md-4" action="{{ route('register.store') }}"
                                                    method="POST">
                                                    @csrf
                                                    <div class="d-flex flex-row align-items-center mb-4">
                                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                                        <div class="form-outline flex-fill mb-0">
                                                            <label class="form-label" for="form3Example1c">Your
                                                                Name</label>
                                                            <input name="name" type="text" id="form3Example1c"
                                                                class="form-control" />
                                                            <span style="color: red">{{ $errors->first('name') }}</span>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex flex-row align-items-center mb-4">
                                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                                        <div class="form-outline flex-fill mb-0">
                                                            <label class="form-label" for="form3Example3c">Your
                                                                Email</label>
                                                            <input name="email" type="input" id="form3Example3c"
                                                                class="form-control" />
                                                            <span style="color: red">{{ $errors->first('email') }}</span>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex flex-row align-items-center mb-4">
                                                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                                        <div class="form-outline flex-fill mb-0">
                                                            <label class="form-label"
                                                                for="form3Example4c">Password</label>
                                                            <input name="password" type="password" id="form3Example4c"
                                                                class="form-control" />
                                                            <span style="color: red">{{ $errors->first('password') }}</span>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex flex-row align-items-center mb-4">
                                                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                                        <div class="form-outline flex-fill mb-0">
                                                            <label class="form-label" for="form3Example4cd">Repeat your
                                                                password</label>
                                                            <input name="re_password" type="password"
                                                                id="form3Example4cd" class="form-control" />
                                                            <span style="color: red">{{ $errors->first('re_password') }}</span>
                                                        </div>
                                                    </div>

                                                    <div class="form-check d-flex justify-content-center mb-5">
                                                        <label class="form-check-label" for="form2Example3">
                                                            <input name="" class="form-check-input me-2" type="checkbox" value="" id="form2Example3c"/>
                                                            I agree all statements in <a href="#!">Terms of
                                                                service</a>
                                                        </label>
                                                    </div>

                                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                                        <button type="submit"
                                                            class="btn btn-primary btn-lg">Register</button>
                                                    </div>

                                                </form>

                                            </div>
                                            <div
                                                class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                                                    class="img-fluid" alt="Sample image">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
        </script>
</body>

</html>