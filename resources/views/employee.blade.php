<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee - Cruds</title>

    {{-- Bootstrap 4 --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <a href="javascript:void(0)" onclick="editPost(event.target)" class="btn btn-success">
        add new
    </a>
    <table id="itemTable" class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employeeData as $employee)
                <tr id="row_{{ $employee->id }}">
                    <td>{{ $employee->id }}</td>
                    <td>{{ $employee->name }}</td>
                    <td>
                        <a href="javascript:void(0)" data-id="{{ $employee->id }}" onclick="editPost(event.target)"
                            class="btn btn-info" style="width: 45%; padding: 6px 6px;">
                            edit
                        </a>
                        <a href="javascript:void(0)" data-id="{{ $employee->id }}" onclick="deletePost(event.target)"
                            class="btn btn-danger" style="width: 45%; padding: 6px 6px;">
                            delete
                        </a>
                    </td>
                </tr>
            @endforeach
            {{-- @foreach ($items as $item)
                <tr id="row_{{ $item->id }}">
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>
                    </td>
                </tr>
            @endforeach --}}
        </tbody>
    </table>

    {{-- Bootstrap 4 --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
