{{--
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>CRUD Eloquent ORM</title>
</head>

<body>
    <div class="container mt-6" ; justify-content-center>
        <h2 class="text-center mb-4">Student Registration Form</h2>
        <div class="row">
            <div class="col-sn-8 col-md-8">
                <form action="" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="first-name" name="first_name">
                    </div>
                    <div class=mb-3>
                        <label for="last_name" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="last-name" name="last_name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="date_of_birth" class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" id="date-of-birth" name="date_of_birth">
                    </div>
                    <div class="mb-3">
                        <label for="phone_number" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="phone-number" name="phone_number">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-sn-4 col-md-4">
                <h3 class="text-center mb-4">Registered Students</h3>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Date of Birth</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Address</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                        <tr>
                            <th>{{$student->id}}</th>
                            <td>{{$student->first_name}}</td>
                            <td>{{$student->last_name}}</td>
                            <td>{{$student->email}}</td>
                            <td>{{$student->date_of_birth}}</td>
                            <td>{{$student->phone_number}}</td>
                            <td>{{$student->address}}</td>
                            <td>{{$student->created_at}}</td>
                            <td>
                                <a href="{{route('edit',['id'=>$student->id])}}" class="btn btn-sm btn-primary">Edit</a>
                                <a href="{{route('delete',['id'=>$student->id])}}"
                                    class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
        </script>
</body>

</html> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>CRUD Eloquent ORM</title>

    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #e3f2fd, #f4f6f9);
        }

        .navbar-brand {
            font-weight: 700;
            letter-spacing: 1px;
        }

        .page-title {
            font-weight: 700;
            letter-spacing: 1px;
            color: #343a40;
        }

        .card-custom {
            border-radius: 16px;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
            border: none;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .card-custom:hover {
            transform: translateY(-3px);
            box-shadow: 0 16px 40px rgba(0, 0, 0, 0.12);
        }

        .card-header-custom {
            border-bottom: none;
            background: linear-gradient(135deg, #007bff, #6610f2);
            color: #fff;
            border-radius: 16px 16px 0 0;
        }

        .badge-stat {
            font-size: 0.85rem;
            padding: 0.45rem 0.75rem;
            border-radius: 50px;
        }

        .table thead th {
            background-color: #343a40;
            color: #fff;
            border: none;
            font-size: 0.85rem;
            text-transform: uppercase;
        }

        .table-hover tbody tr:hover {
            background-color: #f1f3f5;
        }

        .table td,
        .table th {
            vertical-align: middle !important;
        }

        .search-input {
            max-width: 260px;
        }

        .btn-pill {
            border-radius: 50px;
        }
    </style>
</head>

<body>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}">
                Student CRUD
            </a>
        </div>
    </nav>

    <div class="container py-5">

        <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap">
            <h2 class="page-title mb-2">Student Registration System</h2>

            {{-- Small Stats Badge --}}
            <span class="badge badge-primary badge-stat mb-2">
                Total Students: <strong>{{ $students->count() }}</strong>
            </span>
        </div>

        {{-- Success Message --}}
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        {{-- Validation Errors --}}
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>There were some problems with your input:</strong>
            <ul class="mb-0 mt-2">
                @foreach ($errors->all() as $error)
                <li>- {{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="row">
            {{-- Form --}}
            <div class="col-lg-4 mb-4">
                <div class="card card-custom">
                    <div class="card-header card-header-custom text-center">
                        <h5 class="mb-0">Register New Student</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('students.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control @error('first_name') is-invalid @enderror"
                                    id="first_name" name="first_name" placeholder="Enter first name"
                                    value="{{ old('first_name') }}">
                                @error('first_name')
                                <small class="invalid-feedback">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control @error('last_name') is-invalid @enderror"
                                    id="last_name" name="last_name" placeholder="Enter last name"
                                    value="{{ old('last_name') }}">
                                @error('last_name')
                                <small class="invalid-feedback">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                    name="email" placeholder="example@email.com" value="{{ old('email') }}">
                                @error('email')
                                <small class="invalid-feedback">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="date_of_birth">Date of Birth</label>
                                <input type="date" class="form-control @error('date_of_birth') is-invalid @enderror"
                                    id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth') }}">
                                @error('date_of_birth')
                                <small class="invalid-feedback">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="phone_number">Phone Number</label>
                                <input type="text" class="form-control @error('phone_number') is-invalid @enderror"
                                    id="phone_number" name="phone_number" placeholder="e.g. 0315-XXXXXXX"
                                    value="{{ old('phone_number') }}">
                                @error('phone_number')
                                <small class="invalid-feedback">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control @error('address') is-invalid @enderror"
                                    id="address" name="address" placeholder="Enter full address"
                                    value="{{ old('address') }}">
                                @error('address')
                                <small class="invalid-feedback">{{ $message }}</small>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary btn-block btn-pill">
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            {{-- Table --}}
            <div class="col-lg-8">
                <div class="card card-custom">
                    <div class="card-header d-flex justify-content-between align-items-center card-header-custom">
                        <h5 class="mb-0">Registered Students</h5>
                        {{-- (Optional) Fake search UI only for design now --}}
                        <input type="text" class="form-control form-control-sm search-input"
                            placeholder="Search (UI only)">
                    </div>
                    <div class="card-body">
                        @if ($students->count())
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered mb-0">
                                <thead>
                                    <tr class="text-center">
                                        <th>ID</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>DOB</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)
                                    <tr>
                                        <td class="text-center">{{ $student->id }}</td>
                                        <td>{{ $student->first_name }}</td>
                                        <td>{{ $student->last_name }}</td>
                                        <td>{{ $student->email }}</td>
                                        <td class="text-center">{{ $student->date_of_birth }}</td>
                                        <td>{{ $student->phone_number }}</td>
                                        <td>{{ $student->address }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('edit', ['id' => $student->id]) }}"
                                                class="btn btn-sm btn-outline-primary btn-pill mb-1">
                                                Edit
                                            </a>

                                            <form action="{{ route('delete', ['id' => $student->id]) }}" method="POST"
                                                style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger btn-pill"
                                                    onclick="return confirm('Are you sure you want to delete this student?')">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @else
                        <p class="text-center mb-0">No students registered yet.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Bootstrap JS --}}
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEw3xZJMtCZSmjIM9Q7GIl6JQ5bB8E" crossorigin="anonymous">
    </script>
</body>

</html>