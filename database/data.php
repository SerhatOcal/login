<?php
session_start();
if(empty($_SESSION["userid"])){
    die("Giriş yetkiniz bulunmamaktadır !");
    exit;
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Ekranı</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/materia/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto mt-5">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Data Ekranı</h3>
                </div>
                <div class="card-body">
                    <div class="form-group text-center">
                        <button type="button" id="btn-data-getir" class="btn btn-success btn-block">Data Getir</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-5 mx-auto mt-5">
        <table class="table table-hover" style="display: none;">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Parola</th>
            </tr>
            </thead>
            <tbody class="dataBody">
            </tbody>
        </table>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="/assets/js/scripts.js"></script>
</body>
</html>