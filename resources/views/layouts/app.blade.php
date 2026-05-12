<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduCourse Management</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body.dark-mode{
            background:#121212;
            color:white;
        }

        .dark-mode .card{
            background:#1f1f1f;
            color:white;
        }

    </style>

</head>

<body id="body">

@include('partials.navbar')

<div class="container mt-4">

    @yield('content')

</div>

@include('partials.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>

function toggleDarkMode(){
    document.getElementById('body')
    .classList.toggle('dark-mode');
}

</script>

</body>
</html>