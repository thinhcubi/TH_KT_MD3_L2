<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>
<body>
<table class="table">
    <h2>Danh sách các đại lý</h2>
    <div class="row">
        <div class="col-md-6">
    <button class="btn btn-success"><a href="{{route('market.create')}}">Thêm mới</a></button>
        </div>
        <div>
            <form method="post" action="{{route('market.search')}}">
                @csrf
            <input type="text" name="keyword">
                <button type="submit">Search</button>
            </form>
        </div>
    </div>
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Tên đại lý</th>
        <th scope="col">Điện thoại</th>
        <th scope="col">Email</th>
        <th scope="col">Địa chỉ</th>
        <th scope="col">Tên người quản lý</th>
        <th scope="col">Trạng thái</th>
        <th scope="col">Chức năng</th>
    </tr>
    </thead>
    <tbody>
    @foreach($markets as $key => $market)
    <tr>
        <th scope="row">{{++$key}}</th>
        <th> {{$market->name}}</th>
        <td>{{$market->phone}}</td>
        <td>{{$market->email}}</td>
        <td>{{$market->address}}</td>
        <td>{{$market->customer_manager}}</td>
            @if($market->status == 1)
            <td>Hoạt đông</td>
            @else
            <td>Ngừng hoạt động</td>
            @endif
        <td><a onclick="confirm('Bạn chắc chắn muốn xóa chứ?')" href="{{route('market.delete',$market->id)}}">Xóa|</a>
       <a href="{{route('market.edit',$market->id)}}">|Sửa</a></td>
    </tr>
    @endforeach
    </tbody>
</table>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
