<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/techlogin.css">
    <link rel="icon" type="image/png" href="Images/gamepad.png" sizes="16x16"/>
    <title>Login/Registration</title>
</head>
<body>
    <nav id="nav">
    
    </nav>
         <div id="logo" style="margin-top: -4.8%;margin-left: 2%;">
  <img src="{{asset('Images/gamepad.png')}}" alt="logo" width="50" height="40">
     </div>
    <main id="login">
            <div class="container login-container">
                    <div class="row">
                        <div class="col-md-6 login-form-1">
                            <h3>ლოგინი</h3>
                            <form action="{{ route('login') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input name="email" type="email" class="form-control" placeholder="მეილი*" value="" />
                                </div>
                                <div class="form-group">
                                    <input name="password" type="password" class="form-control" placeholder="პაროლი*" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btnSubmit" value="ავტორიზაცია" />
                                </div>
                            </form>  
                            
                        </div>
                        <div class="col-md-6 login-form-2">
                            <div class="login-logo">
                                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                            </div>
                            <h3>რეგისტრაცია</h3>
                            <form action="{{ route('register') }}" method="POST">
                                {{ csrf_field() }}
                            <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="სახელი / გვარი" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="მეილი" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="პაროლი" value="" />
                                </div>
                                <div class="form-group">
                                        <input type="password"name="password_confirmation" required autocomplete="new-password" class="form-control" placeholder="გაიმეორეთ პაროლი" value="" />
                                    </div>
                                <div class="form-group">
                                    <input type="submit" class="btnSubmit" value="რეგისტრაცია" />
                                </div>
                              
                            </form>
                        </div>
                    </div>
                </div>
    </main>
    
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>