<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>153 Kreatif</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            min-height: 100vh;
            background: #000;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }
        .intro-text {
            color: #fff;
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            font-size: clamp(2.5rem, 8vw, 5rem);
            font-weight: 700;
            letter-spacing: 0.05em;
            white-space: nowrap;
            opacity: 0;
            transform: scale(0.9);
            animation: fadeInScale 0.8s ease-out forwards, fadeOut 0.2s 1.1s ease-in forwards;
        }
        @keyframes fadeInScale {
            0% {
                opacity: 0;
                transform: scale(0.9);
            }
            100% {
                opacity: 1;
                transform: scale(1);
            }
        }
        @keyframes fadeOut {
            0% {
                opacity: 1;
                transform: scale(1);
            }
            100% {
                opacity: 0;
                transform: scale(0.95);
            }
        }
    </style>
</head>
<body>
    <h1 class="intro-text" style="font-family: 'Montserrat', sans-serif;">153 Kreatif</h1>

    <script>
        (function () {
            var redirectUrl = "{{ route('home') }}";
            setTimeout(function () {
                window.location.href = redirectUrl;
            }, 1300); // 0.8s in + 0.3s hold + 0.2s out = 1.3s
        })();
    </script>
</body>
</html>
