<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tugas 11 | Fikri</title>
    <link href="bootstrap-v5/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>
    <div class="container-fluid vh-100 d-flex justify-content-center align-items-center">
        <div class="card bg-light-subtle" style="max-width: 700px; min-height: auto">
            <div class="row g-0">
                <div class="col-md-5">
                    <img src="assets/img/online-dating.png" class="img-fluid rounded-start" alt="..." />
                </div>
                <div class="col-md-7 d-flex align-items-center">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold mb-4">Login Form</h5>
                        <form action="logic-login.php" method="post">
                            <!-- Form ditambahkan -->
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="username" name="username"
                                    placeholder="Username" /> <!-- Name ditambahkan -->
                                <label for="username">Username</label>
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Password" /> <!-- Name ditambahkan -->
                                <label for="password">Password</label>
                            </div>
                            <button type="submit" class="btn btn-dark w-100 mt-3">
                                <!-- Type diganti menjadi submit -->
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="bootstrap-v5/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>