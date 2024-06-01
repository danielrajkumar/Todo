<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .wrape {
            width: 700px;
            display: block;
            background-color: rgb(49, 46, 46);
            padding: 40px;
            padding-bottom: 20px;
        }

        label {
            color: white;
        }
    </style>
</head>

<body style="background-image:url('/images/bg1.jpg');background-size:cover;background-repeat:no-repeat;">
    <div class="container">

        <div class="row justify-content-center align-items-center">
            <div class="col-md-6">
                <h2 class="text-center mt-5 mb-4" style="color:rgb(46, 199, 92);">Login Page</h2>
                <div class="wrape">
                    <form method="POST" action="/login">
                        @csrf
                        <div class="form-group">
                            <label for="name">User :</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name"
                                name="user" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password :</label>
                            <input type="password" class="form-control" id="password" placeholder="Password"
                                name="psw" required>
                        </div>
                        <div class="form-group" style="margin-top: 60px;">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
