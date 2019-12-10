<!DOCTYPE html>
<html>

    <head>
        <title>Guest page</title>
        <link rel="stylesheet"
                  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
                  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
                  crossorigin="anonymous">
    </head>

    <body >
    <nav class="navbar navbar-light bg-light">
        <span class="navbar-brand mb-0 h1">@okriukova</span>
        <div class="btn-group" role="group" aria-label="Basic example">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
                Login
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Login form</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="php/login.php">
                                <label>
                                Username
                                    <br>
                                    <input required type="text" name="login" placeholder="username">
                                </label>
                                <br>
                                <label>
                                    Password
                                    <br>
                                <input required type="password" name="password" placeholder="password">
                                    <br>
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </label>
                                <br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <button class="btn btn-secondary" type="submit" onclick="window.location.href = '/registration.php'">Registration</button>
        </div>zz
    </nav>
    <table class="table">
            <thead class="thead-dark">
            <tr>
                <th>Username</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Avatar</th>
            </tr>
            </thead>
           <?php require_once 'php/show_data.php'?>
        </table>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    </body>
</html>