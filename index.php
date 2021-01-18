<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giriş Ekranı</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/materia/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto mt-5">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Giriş Ekranı</h3>
                </div>
                <div class="card-body">
                    <form id="loginFrm">
                        <div class="form-group">
                            <input type="text" name="username" id="name" class="form-control name" placeholder="Kullanıcı adı">
                            <div class="invalid-feedback" style="font-size:16px;">Kullanıcı adı boş olamaz!</div>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" id="password" class="form-control password" placeholder="Paralo">
                            <div class="invalid-feedback" style="font-size:16px;">Paralo boş olamaz!</div>
                        </div>
                        <div class="form-group text-center">
                            <button type="button" id="btn-submit" class="btn btn-primary btn-block">Giriş Yap &rarr;</button>
                        </div>
                        <div class="alert alert-danger message" role="alert" style="display: none;"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="/assets/js/scripts.js"></script>
</body>
</html>