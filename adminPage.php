<?php require_once 'php/auth_admin.php'?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin page</title>
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
    <style>
        .ButWrapper {
            text-align: center;
        }
    </style>
</head>

<body>
<div class="jumbotron">
    <h1 class="display-4">Welcome, <?php
        echo " " . $_SESSION['login']; ?>. Admin page</h1>
</div>
<h2 style="text-align: center">User control panel</h2>
<br>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th>Username</th>
        <th>Password</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Avatar</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    </thead>
    <?php require_once 'php/show_editableData.php'?>
</table>
<div class = "ButWrapper">
    <button style="align: center" type="button" class="btn btn-secondary" onclick="window.location.href='php/logout.php'">Logout</button>
</div>
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