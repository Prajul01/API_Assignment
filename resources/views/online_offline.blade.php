<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Online Offline API</title>
</head>
<body>
<h1 class="text-center"><kbd>Online Offline API</kbd></h1>


<div class="container">

    <div id="demo" style="color: #718096;border: 2px solid black "></div>

</div>
</body>
</html>
<script>
if (navigator.onLine) {
    document.getElementById("demo").innerHTML='The user is Online'
    console.log('online');
} else {
    document.getElementById("demo").innerHTML='The user is offline'

    console.log('offline');
}
</script>
