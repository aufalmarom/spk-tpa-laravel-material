<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="{{url('css/app.css')}}">
<head>

</head>
<body>
    <div class="row items-center">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-6">
            <form method="POST" action="{{route('login')}}">
                {{csrf_field()}}
                <div class="form">
                    <div class="form-group">
                        <label for="inputEmail4" class="label-control">Username</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword4"class="label-control">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                </div>
                <button type="submit" class="bg-transparent text-grey-darkest font-bold uppercase tracking-wide py-3 px-6 border-2 border-grey hover:border-black.rounder-lg btn">LOGIN</button>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <img src="" alt="">
        </div>
    </div>

</body>
</html>
