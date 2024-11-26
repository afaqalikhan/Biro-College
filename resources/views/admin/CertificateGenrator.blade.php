<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Certification</title>
    <link rel="stylesheet" href="{{ asset('css 3/CertificateGenrator.css') }}">
    <style>
        .alert {
            padding: 15px;
            background-color: #4CAF50;
            color: white;
            opacity: 1;
            transition: opacity 0.6s;
            margin-bottom: 15px;
            border-radius: 4px;
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            width: 50%;
            z-index: 1000;
            animation: slideDown 0.3s ease-out; /* Decreased slide-down duration */
        }

        .alert.success {
            background-color: #4CAF50;
        }

        .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
        }

        .closebtn:hover {
            color: black;
        }

        @keyframes slideDown {
            from {
                top: -100px;
                opacity: 0;
            }
            to {
                top: 10px;
                opacity: 1;
            }
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const alert = document.querySelector('.alert');
            if (alert) {
                setTimeout(() => {
                    alert.style.opacity = '0';
                    setTimeout(() => {
                        alert.style.display = 'none';
                    }, 600);
                }, 3000);
            }
        });
    </script>
</head>
<body>

    @if (session('success'))
        <div class="alert success">
            {{ session('success') }}
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        </div>
    @endif

    <div class="form-container">
    <a href="/home" style="text-decoration:none;"> <h1>Student Certification</h1> </a>
        <form action="{{ route('SubmitCertificationForm') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="text">Roll Number:</label>
                <input type="text" id="RollNumber" name="roll_number" required>
            </div>
            <div class="form-group">
                <label for="text">College Name:</label>
                <input type="text" id="college-name" name="college" required>
            </div>
            <div class="form-group">
                <label for="course">Course:</label>
                <input type="text" id="course" name="course" required>
            </div>
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
