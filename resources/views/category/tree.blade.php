@extends('layouts.main')
@section('content')
    <style>
        .modal-view {
            min-width: 100%;
            height: 400px;
            display: none;
            position: absolute;
            justify-content: center;
        }

        .modal-content {
            min-width: 400px;
            height: 150px;
        }
    </style>
    <div class="modal-view">

        <div class="modal-content">
            <label for="category">CATEGORIES</label>
            <select name="category" class="form-control" id="category">
            </select>

            <button style="float: right; margin: 50px 10px;" class="btn btn-success" id="save">SAVE</button>
        </div>
        <div class="modal-close"
             style="font-size: 20px;background: #6c757d;height: 30px; width: 20px;text-align: center;color: white;border-radius: 50%; cursor: pointer">
            X
        </div>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Category Name</th>
            <th scope="col">Category Child</th>
            <th scope="col">ACTION</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <th>{{ $category->id }}</th>
                <td>{{ $category->name }}</td>
                <td>@foreach($category->childrens as $c) <span
                        class="child-{{$c->id}}">{{ $c->name }}</span><br> @endforeach</td>
                <td>
                    <a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-primary">ADDED CHILD</a>
                    <a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-success">EDIT</a>
                    <a href="{{ route('admin.category.delete', $category->id) }}" class="btn btn-danger">DELETE</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
    <script>
        document.querySelectorAll('.btn-primary').forEach(function (btn) {
            btn.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector('.modal-view').style.display = 'flex';

                $.ajax({
                    url: "{{ route('admin.category.get.dont-parent') }}",
                    method: "GET",
                    success: function (response) {
                        let options = '';
                        $.each(response,function (i, v) {
                            options = options + '<option value="'+ v['id'] +'">'+ v['name'] +'</option>'
                        })
                        $('#category').empty().append(options)
                    }
                })
            })


        })

        document.getElementById('save').addEventListener('click', function () {
            let e = document.getElementById('category');
            // e.options[e.selectedIndex].text
            document.querySelector('.modal-view').style.display = 'none';
        })
    </script>
@endsection
