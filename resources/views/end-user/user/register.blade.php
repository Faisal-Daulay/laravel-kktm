<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('template') }}/fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{ url('template') }}/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('template') }}/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="{{ url('template') }}/css/style_login.css">

    <title>Sign Up</title>
</head>

<body>

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ url('template') }}/images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <h3>Sign Up</h3>
                                <p class="mb-4"></p>
                            </div>
                            <form action="{{ url('/staff') }}" method="POST">
                                @csrf
                                <div class="form-group first mb-4">
                                    <input type="text" name="name" required id="fullname" class="form-control"
                                        placeholder="Name">
                                </div>
                                <div class="form-group last mb-4">
                                    <input type="text" name="address" required id="address" class="form-control"
                                        placeholder="Address">
                                </div>
                                <div class="form-group last mb-4">
                                    <input type="email" name="email" required id="email" class="form-control"
                                        placeholder="Email">
                                </div>
                                <div class="form-group last mb-4">
                                    <input type="text" class="form-control" name="phone_number" required
                                        id="phone_number" placeholder="+60">
                                </div>
                                <div class="form-group last mb-4">
                                    <input type="password" name="password" required id="password" class="form-control"
                                        placeholder="password">
                                </div>
                                <input type="submit" value="Sign Up" class="btn btn-block btn-primary mb-3 text-light">
                            </form>
                            <a href="/signin">Already have account</a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <script src="{{ url('template') }}/js/jquery-3.3.1.min.js"></script>
    <script src="{{ url('template') }}/js/popper.min.js"></script>
    <script src="{{ url('template') }}/js/bootstrap.min.js"></script>
    <script src="{{ url('template') }}/js/main.js"></script>
</body>

</html>
