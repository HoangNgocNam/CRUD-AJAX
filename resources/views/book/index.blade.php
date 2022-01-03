<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <button class="btn btn-success form-create">CREATE BOOK</button>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tiêu Đề</th>
            <th scope="col">Mã Sách</th>
            <th scope="col">Tác Giả</th>
        </tr>
        </thead>
        <tbody class="books-list">

        </tbody>
    </table>
</div>


<div class="modal modal-create" tabindex="1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form class="form-add" method="post">
            <div class="modal-header">
                <h5 class="modal-title">Thêm Mới Sách</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tiêu Đề</label>
                        <input type="text" name="title" class="form-control" id="title-book" aria-describedby="emailHelp" placeholder="Tiêu Đề">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mã Sách</label>
                        <input type="number" name="code" class="form-control" id="code-book" placeholder="Mã Sách">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Tác Giả</label>
                        <input type="text" name="author" class="form-control" id="author-book" placeholder="Tác Giả">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary add-form">Add New</button>
                <button type="button" class="btn btn-secondary close" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>


<div class="modal modal-updata" tabindex="2" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form class="form-updata" method="post">
                <div class="modal-header">
                    <h5 class="modal-title">Cập Nhật Sách</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">ID</label>
                        <input type="text" name="id" class="form-control" id="id" aria-describedby="emailHelp" placeholder="ID" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tiêu Đề</label>
                        <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Tiêu Đề">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mã Sách</label>
                        <input type="number" name="code" class="form-control" id="code" placeholder="Mã Sách">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Tác Giả</label>
                        <input type="text" name="author" class="form-control" id="author" placeholder="Tác Giả">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary updata-form">Updata</button>
                    <button type="button" class="btn btn-secondary close" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{asset("js/my.js")}}"></script>
</html>
