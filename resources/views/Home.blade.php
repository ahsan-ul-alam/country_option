<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="row mt-5">
        <div class="col-md-4"></div>
        <div class="col-md-4">
        your Country
            <input type="text" data-bs-toggle="tooltip" data-bs-placement="bottom" class="form-control" id="country" list="list">
    <datalist id="list">
        @foreach ($list as $item)
            <option value="{{ $item }}">
        @endforeach
    </datalist>
    <button class="btn btn-primary w-100 my-2" id="showbtn">
        show
    </button>
    <h2 id="display"></h2>
        </div>
        <div class="col-md-4"></div>
    </div>





    {{-- js her  --}}
    <script>
        document.getElementById("showbtn").addEventListener("click", (event) => {
            event.preventDefault();
            let country = document.getElementById('country').value;
            document.getElementById("display").innerText = country;
        })
    </script>
</body>

</html>
