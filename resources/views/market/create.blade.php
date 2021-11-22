<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<h2>Thêm mới cửa hàng</h2>
<form method="post" action="{{route('market.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-row" >
        <div class="form-group col-md-6">
            <label>Tên cửa hàng</label>
            <input type="text" class="form-control" value="" name="name" >
        </div>
    </div>
    <div class="form-row" >
        <div class="form-group col-md-6">
            <label>Số điện thoại</label>
            <input type="text" class="form-control" value="" name="phone" >
        </div>
    </div>
    <div class="form-row">
        <label>Email</label>
        <input type="email" class="form-control" name="email">
    </div>
    <div class="form-row">
        <label>Địa chỉ</label>
        <input type="address" class="form-control" name="address">
    </div>
    <div class="form-row">
        <label>Người quản lý</label>
        <input type="text" class="form-control" name="customer_manager">
    </div>
    <button type="submit" class="btn btn-primary">Lưu</button>
</form>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
