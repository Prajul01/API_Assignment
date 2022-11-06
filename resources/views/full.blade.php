<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Fullscreen API</title>
</head>
<body>
<h1 class="text-center"><kbd>Fullscreen API</kbd></h1>

{{--<h2></h2>--}}
<p>Click on the button to open the image in fullscreen mode.</p>
<button onclick="openFullscreen();">Open image in Fullscreen Mode</button>
<p><strong>Tip:</strong> Press the "Esc" key to exit full screen.</p>
<div class="container">
    <img src="{{asset('np.png')}}" alt="no image found" id="myimg" style="height: 100px;width: 100px">



</div>


</body>
</html>

    <script>
        /* Get the element you want displayed in fullscreen */
        var elem = document.getElementById("myimg");

        /* Function to open fullscreen mode */
        function openFullscreen() {
        if (elem.requestFullscreen) {
        elem.requestFullscreen();
    } else if (elem.webkitRequestFullscreen) { /* Safari */
        elem.webkitRequestFullscreen();
    } else if (elem.msRequestFullscreen) { /* IE11 */
        elem.msRequestFullscreen();
    }
    }
</script>
