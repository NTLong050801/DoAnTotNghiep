<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>
        * {
            box-sizing: border-box;
            background-color: pink;
        }

        #fullscreen-div {
            height: 100%;
            padding: 1rem;
            text-align: center;
        }

        #toggle-fullscreen {
            background-color: red;
            margin-top: 20%;
        }
    </style>
</head>
<body>

<div id="fullscreen-div">
    <button id="toggle-fullscreen"><h1>Yêu cầu vào chế độ full-screen</h1></button>
    <div id="data" class="d-none">
        <form>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>
        </form>
    </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    const fullScreenElement = document.querySelector("#fullscreen-div");
    var tab = 0;

    function fullscreenchanged(event) {
        if (document.fullscreenElement) {
            $('#data').removeClass('d-none')
            $('#data').addClass('d-block')
            $('#toggle-fullscreen').addClass('d-none');
            $('*').addClass('bg-white')
        } else {
            $('#data').removeClass('d-block')
            $('#data').addClass('d-none')
            $('#toggle-fullscreen').removeClass('d-none')

            $('*').removeClass('bg-white')
        }
    }

    document.addEventListener("visibilitychange", function () {
        if (document.hidden) {
            // The user switched to another tab or minimized the window
            $('#data').removeClass('d-block')
            $('#data').addClass('d-none')
            $('#toggle-fullscreen').removeClass('d-none')

            $('*').removeClass('bg-white')
            tab += 1;
            $('#toggle-fullscreen h1').html("Không tab màn hình , đã tab lần thứ " + tab + ' ấn vào đây để tiếp tục');
            if (confirm("đừng tab nữa bro ? tab lần thứ " + tab) == true) {
                // The user switched back to this tab
                $('#data').removeClass('d-none')
                $('#data').addClass('d-block')
                $('#toggle-fullscreen').addClass('d-none');
                $('*').addClass('bg-white')
            }
        }
    });
    document.addEventListener("keydown", function (event) {
        if (event.keyCode == 122) {
            if (fullScreenElement.requestFullscreen()) {

            }
        }
    });
    document.addEventListener("keydown", function (event) {
        if (event.keyCode == 123 || (event.ctrlKey && event.shiftKey && event.keyCode == 73)) {
            event.preventDefault();
        }
    });
    document.addEventListener("fullscreenchange", fullscreenchanged);
    document.getElementById("toggle-fullscreen").addEventListener("click", () => {
        fullScreenElement.requestFullscreen();
    });
    // fullScreenElement();
</script>
</html>
