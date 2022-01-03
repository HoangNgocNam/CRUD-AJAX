$(document).ready(function () {
    let baseUrl = origin;

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: baseUrl + '/api/books',
        type: "GET",
        dataType: "json",
        success: function (res) {
            displayBook(res)
        }
    })

    function displayBook(books) {
        let html = "";
        for (let i = 0; i < books.length; i++) {
            html += `<tr id="book-${books[i].id}">
            <td>${books[i].id}</td>
            <td>${books[i].title}</td>
            <td>${books[i].code}</td>
            <td>${books[i].author}</td>
            <td><button data-id="${books[i].id}" class="btn btn-primary edit-function">Update</button></td>
            <td><button data-id="${books[i].id}" class="btn btn-danger delete-function">Delete</button></td>
            </tr>`;
        }
        $(".books-list").html(html);
    }

    $('body').on('click', '.delete-function', function () {
        let id = $(this).attr("data-id");
        if (confirm("bạn chắc choắn chưa???")) {
            $.ajax({
                url: baseUrl + '/api/books/delete/' + id,
                type: "GET",
                dataType: "json",
                success: function (res) {
                    console.log(res);
                    $(`#book-${id}`).remove();

                }
            })
        }
    })

    $('body').on('click', '.form-create', function () {
        $('.modal-create').show();
    })

    $('body').on('click', '.close', function () {
        $('.modal').hide();
    })

    function addNew(book) {
        let html = `<tr id="book-${book.id}">
            <td>${book.id}</td>
            <td>${book.title}</td>
            <td>${book.code}</td>
            <td>${book.author}</td>
            <td><button data-id="${book.id}" class="btn btn-primary edit-function">Update</button></td>
            <td><button data-id="${book.id}" class="btn btn-danger delete-function">Delete</button></td>
            </tr>`;
        $(".books-list").prepend(html);
    }


    $('body').on('click', '.add-form', function () {

        let title = $('#title-book').val();
        let code = $('#code-book').val();
        let author = $('#author-book').val();
        $('.add-form').attr('disabled', true);

        $.ajax({
            url: baseUrl + '/api/books/add',
            type: "POST",
            dataType: "json",
            data: {
                title: title,
                code: code,
                author: author,
            }, success: function (res) {
                console.log(res.data)
                $('.add-form').attr('disabled', false);
                $('.form-add').trigger('reset');
                $('.modal').hide();
                addNew(res.data);
            }
        })
    });

    $('body').on('click', '.edit-function', function () {
        $('.modal-updata').show();
        let id = $(this).attr('data-id');
        $.ajax({
            url: baseUrl + '/api/books/edit/' + id,
            type: "GET",
            dataType: "json",
            success: function (res) {
                console.log(res.data);
                $('#id').val(res.data.id);
                $('#title').val(res.data.title);
                $('#code').val(res.data.code);
                $('#author').val(res.data.author);
            }
        })
    })
    $('body').on('click', '.updata-form', function () {
        let id = $('#id').val();
        $.ajax({
            url: baseUrl + '/api/books/update/' + id,
            type:"POST",
            dataType:"json",
            data:{
                id:id,
                title: $('#title').val(),
                code: $('#code').val(),
                author: $('#author').val(),
            },
            success:function (res){
                console.log(res.data)
                $('.modal').hide();
                $(`#book-${id} td:nth-child(1)`).html(res.data.id);
                $(`#book-${id} td:nth-child(2)`).html(res.data.title);
                $(`#book-${id} td:nth-child(3)`).html(res.data.code);
                $(`#book-${id} td:nth-child(4)`).html(res.data.author);
            }
        })
    })
})
