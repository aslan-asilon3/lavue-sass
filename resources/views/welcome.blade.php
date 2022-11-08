<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lavue sass</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

    <div class="container">
        <div id="app">
            <example-component/>
        </div>
    </div>

    <script src="{{mix('js/app.js')}}"></script>
    <script>
        let layer_1 = document.querySelector('.layer-1');
        let layer_2 = document.querySelector('.layer-2');
        let layer_3 = document.querySelector('.layer-3');
        let layer_4 = document.querySelector('.layer-4');
        let layer_5 = document.querySelector('.layer-5');

        window.onscroll = function() {
            let Y = window.scrollY;

            layer_1.style.transform = 'translateY(' + Y / 1.5 + 'px)';
            layer_2.style.transform = 'translateY(' + 0 + 'px)';
            layer_3.style.transform = 'translateY(' + Y / 1.5 + 'px)';
            layer_4.style.transform = 'translateY(' + Y / 2 + 'px)';
            layer_5.style.transform = 'translateY(' + Y / 3 + 'px)';
        }
    </script>
</body>
</html>
