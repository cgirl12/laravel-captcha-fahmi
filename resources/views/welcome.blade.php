
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <link rel="shortcut icon" href="{{asset('images/qr-code-orange.png')}}" type="image/x-icon">
    <style>
        .custom-font-size-h1 {
            font-size: 40px;
            transform: translateX(2.5rem);
        }
        .custom-font-size-p {
            font-size: 14px;
            transform: translateX(2.5rem);
        }
        .custom-font-size-h2 {
            font-size: 30px;
            text-align: center;
        }
        .custom-font-size-url {
            font-size: 14px;
            text-align: center;
        }
        .custom-shadow {
            box-shadow: 5px 5px 0px rgba(0, 0, 0, 1);
        }
        .result {
            display: flex;
            justify-content: center;
            margin-top: 1.5rem;
        }
        .gradient-text {
            background: linear-gradient(45deg, #7F00FF, #E100FF, #FF1493, #FF69B4);
            background-size: 300% 300%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: gradientAnimation 5s infinite linear;
        }
        @keyframes gradientAnimation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
    </style>
</head>
<body class="bg-yellow-500 font-roboto flex items-center justify-center min-h-screen p-4">
    <div class="text-center md:text-left md:flex md:items-center md:justify-between w-full max-w-5xl">
        <div class="mb-8 md:mb-0 md:transform md:translate-x-10">
            <h1 class="custom-font-size-h1 font-bold text-purple-700 leading-tight">Selamat Datang<br>QR Code Generator</h1>
            <p class="custom-font-size-p text-green-900 mt-2">Hasilkan Kode QR berkualitas tinggi secara instan untuk tautan dan teks Anda.</p>
        </div>
        <div class="relative md:transform md:-translate-x-[6.5rem] mt-8 md:mt-0">
            <div class="bg-white p-8 relative z-10 w-full md:w-[calc(100%+2rem)] rounded-lg custom-shadow" style="border-radius: 5px;">
                <h2 class="custom-font-size-h2 font-bold text-purple-700">QR Code</h2>
                <p class="custom-font-size-url text-green-900">(https://example.com)</p>
                <div class="result">
                    @if(isset($qrCode))
                        {!! $qrCode !!}
                    @endif

                </div>
            </div>
        </div>
    </div>
    <footer class="absolute bottom-4 custom-font-size-p text-center gradient-text">
        <span>&copy; <script>document.write(new Date().getFullYear());</script>. Dibuat oleh Diva Maharachmi</span>
    </footer>    
</body>
</html>