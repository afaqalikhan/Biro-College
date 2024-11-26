<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Records</title>
    <link rel="stylesheet" href="{{ asset('css 3/AllRegisterUsers.css') }}">
</head>
<body>
    <div class="table-container">
        <table class="user-table">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Google ID</th>
                    <th>Phone</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>

                @foreach ( $AllRegisterUsers as $AllRegisterUsers1 )
                    
                <tr>
                    <td>{{ $AllRegisterUsers1->id }}</td>
                    <td>{{ $AllRegisterUsers1->name }}</td>
                    <td>{{ $AllRegisterUsers1->email }}</td>
                    <td>{{ $AllRegisterUsers1->role }}</td>
                    <td>{{ $AllRegisterUsers1->google_id }}</td>
                    <td>{{ $AllRegisterUsers1->phone }} </td>
                    <td>{{ $AllRegisterUsers1->address }} </td>
                </tr>

                 @endforeach
                
                <!-- Add more user records as needed -->
            </tbody>
        </table>
    </div>
</body>
</html>
