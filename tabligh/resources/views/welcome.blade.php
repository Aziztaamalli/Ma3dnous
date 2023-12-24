<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Corruption</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .report-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 400px;
        }

        .corrupt-list {
            margin-top: 30px;
            border-top: 1px solid #ccc;
            padding-top: 20px;
        }

        .corrupt-item {
            margin-bottom: 10px;
        }

        h1, h2 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
            color: #555;
        }

        input, textarea {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        textarea {
            resize: vertical;
        }

        button {
            background-color: #5d1846;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .corrupt-item img {
            max-width: 100%;
            height: auto;
            border-radius: 4px;
        }
        button.reset {
            background-color: #ccc;
            color: #333;
        }

        button.reset:hover {
            background-color: #ddd;
        }

    </style>
</head>
<body>

<div class="report-container">
    @include('include.navbar')
    <h1>Report Corruption</h1>
    @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>

    @endif
    <ul>
        @foreach ($errors->all() as $error )
        <li class="alert alert-danger">{{$error}}</li>
        @endforeach
    </ul>
    <form action="{{route('ajouter')}}" method="post" enctype="multipart/form-data" id="reportForm">
        @csrf
        <label for="yourName">ESMEK</label>
        <input type="text" id="yourName" name="yourName" required>

        <label for="nickname" >Username:</label>
        <input type="text" id="nickname" name="nickname" required placeholder="ma tektebch esmek , het tarbija">

        <label for="idCard">TA9TA3RIF</label>
        <input type="number" id="idCard" name="idCard" required>

        <label for="corruptName">B CHKOUN T7EB TECHKI :</label>
        <input type="text" id="corruptName" name="corruptName" required>

        <label for="workplace">WIN YEKHDEM:</label>
        <input type="text" id="workplace" name="workplace" required>

        <label for="report">AKTHER DETAIL 3LIH:</label>
        <textarea id="report" name="report" rows="4" required></textarea>

        <label for="image">AATINA TASWIRTOU (KEN FAMMA):</label>
        <input type="file" id="image" name="image">

        <button type="submit">Submit Report</button>

        <button type="reset" class="reset">Reset</button>
    </form>
</div>

{{-- <div class="corrupt-list">
    <h2>Corrupt Individuals</h2>
    <div class="corrupt-item">
        <strong>Your Name:</strong> John Doe<br>
        <strong>Nickname:</strong> JD<br>
        <strong>Your ID Card:</strong> ABC123456<br>
        <strong>Person Involved:</strong> Jane Doe<br>
        <strong>Workplace:</strong> XYZ Corporation<br>
        <strong>Details:</strong> Involved in bribery.<br>
        <strong>Image:</strong> <img src="path/to/image.jpg" alt="Corrupt Individual">
    </div>
    <!-- Add more corrupt individuals as needed -->
</div> --}}

</body>
</html>
