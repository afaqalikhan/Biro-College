<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Certified Students Records</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background: linear-gradient(135deg, #f06, #ffcc00);
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }
    .table-container {
        width: 80%;
        height: 70vh; /* Adjust the height as needed */
        overflow: auto; /* Enable scrolling */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .table {
        width: 100%;
        border-collapse: collapse;
        background-color: #fff;
        overflow: hidden;
        border-radius: 8px;
    }
    .table th, .table td {
        border: 1px solid #ddd;
        padding: 12px 15px;
        text-align: left;
    }
    .table th {
        background-color: #ff5733;
        color: white;
        font-weight: bold;
    }
    .table tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    .table tr:hover {
        background-color: #ffe6e6;
    }
</style>
</head>
<body>
<div class="table-container">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Roll Number</th>
                <th>Name</th>
                <th>College Name</th>
                <th>Course</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($CertifiedStudents as $CertifiedStudents1)
            <tr>
                <td>{{ $CertifiedStudents1->id }}</td>
                <td>{{ $CertifiedStudents1->roll_number }}</td>
                <td>{{ $CertifiedStudents1->name }}</td>
                <td>{{ $CertifiedStudents1->college }}</td>
                <td>{{ $CertifiedStudents1->course }}</td>
                <td>{{ $CertifiedStudents1->date }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="6">No student records found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
</body>
</html>
