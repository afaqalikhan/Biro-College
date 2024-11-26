<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Biro Certificate</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Great+Vibes&family=Roboto:wght@300;400&display=swap');

        body {
            font-family: 'Roboto', sans-serif;
            background: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .certificate-container {
            width: 900px;
            height: 600px;
            padding: 40px;
            border: 15px solid #b3a369;
            background: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            text-align: center;
            position: relative;
        }

        .certificate-container h1 {
            font-family: 'Great Vibes', cursive;
            font-size: 56px;
            color: #b3a369;
            margin: 0;
        }

        .certificate-container h2 {
            font-size: 24px;
            color: #333;
            margin-top: 10px;
        }

        .certificate-container p {
            font-size: 20px;
            color: #555;
            margin: 30px 0;
        }

        .certificate-container .name {
            font-size: 36px;
            font-weight: bold;
            margin: 20px 0;
            text-decoration: underline;
            color: #333;
        }

        .certificate-container .course {
            font-size: 22px;
            color: #555;
        }

        .certificate-container .date {
            font-size: 18px;
            margin-top: 50px;
            color: #777;
        }

        .certificate-container .signature {
            position: absolute;
            bottom: 40px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 18px;
            color: #777;
            text-align: center;
        }

        .certificate-container .signature .sign {
            font-family: 'Great Vibes', cursive;
            font-size: 32px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="certificate-container">
        <h1>Certificate of Achievement</h1>
        <h2>This is to certify that</h2>
        <p class="name">[ {{ $student->name }} ]</p>
        <p class="course">has successfully completed</p>
        <!-- <p class="course">[{{ $student->course }}]</p> -->
        <h3 class="course"> [{{ $student->course }}] <p> From </p> [Biro College] </h3>
        <div class="date">Date: [ {{$student->date}} ]</div>
        <div class="signature">
            <div class="sign">[ TouseefHaider]</div>
            <div>Authorized Signature</div>
        </div>
    </div>

</body>
</html>
