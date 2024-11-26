<!DOCTYPE html>
<html>

<head>
    <title>Check Result</title>
    <link rel="stylesheet" href=" {{ asset('home/css 3/exam.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-5 mt-5">
                <div class="card">
                    <div id="khan" class="card-header">
                        <h3> GET YOUR RESULT </h3>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('result.show') }}" method="POST">
                            @csrf

                            <label for="roll_number" class="form-label">Roll Number:</label>
                            <div class="mb-3">
                                <input type="text" id="roll_number" name="roll_number" required class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Check Result</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>