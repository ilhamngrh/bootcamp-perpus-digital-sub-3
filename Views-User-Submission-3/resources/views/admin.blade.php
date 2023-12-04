<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Tutorial Laravel : CRUD Eloquent</title>
</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                CRUD Data Admin
            </div>

            <div class="card-body">
                <a href="/admin/tambah" class="btn btn-primary">Input admin Baru</a>
                <br />
                <br />

                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>nama</th>
                            <th>Username</th>
                            <th>Password</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($admin as $g)
                            <tr>
                                <td>{{ $g->nama }}</td>
                                <td>{{ $g->username }}</td>
                                <td>{{ $g->password }}</td>
                                <td>
                                    <a href="/admin/edit/{{ $g->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/admin/hapus/{{ $g->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
