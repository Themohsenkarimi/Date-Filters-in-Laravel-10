<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Date Filters in Laravel 10</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <div class="container">
        <h1 class="text-center text-danger pt-4">Date Filters in Laravel 10</h1>
        <hr>

    <div class="row py-2">
        <div class="col-md-6">
            <h2>List of Empoyees</h3>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="date_filter">Filter by Date:</label>

                <form method="get" action="employee">
                    <div class="input-group">
                        <select class="form-select" name="date_filter">
                            <option value="">All Dates</option>
                            <option value="today" {{ $dateFilter == 'today' ? 'selected' : '' }}>Today</option>
                            <option value="yesterday" {{ $dateFilter == 'yesterday' ? 'selected' : '' }}>Yesterday</option>
                            <option value="this_week" {{ $dateFilter == 'this_week' ? 'selected' : '' }}>This Week</option>
                            <option value="last_week" {{ $dateFilter == 'last_week' ? 'selected' : '' }}>Last Week</option>
                            <option value="this_month" {{ $dateFilter == 'this_month' ? 'selected' : '' }}>This Month</option>
                            <option value="last_month" {{ $dateFilter == 'last_month' ? 'selected' : '' }}>Last Month</option>
                            <option value="this_year" {{ $dateFilter == 'this_year' ? 'selected' : '' }}>This Year</option>
                            <option value="last_year" {{ $dateFilter == 'last_year' ? 'selected' : '' }}>Last Year</option>
                            </select>
                        <button type="submit" class="btn btn-primary">Filter</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    
    <table class="table  table-bordered table-hover">
        <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Last Name</th>
                    <th>Position</th>
                    <th>Gender</th>
                    <th>E-mail</th>
                    <th>Date Created</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->id }}</td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->last_name }}</td>
                    <td>{{ $employee->position }}</td>
                    <td>{{ $employee->gender }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->created_at->format('Y-m-d H:i:s') }}</td>
                </tr>
                    
                @endforeach


            </tbody>
        </table>

    </div>
    
</body>
</html>