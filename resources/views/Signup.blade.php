<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- CSS -->
    <link rel="stylesheet" href="CSS/sign.css">

</head>
<body>
    <div class="container">
        <img src="images/logo.png" alt="logo" style="margin: 38.97px;">
        <div class="box">
            <div class="bg-box"></div>
            <img src="images/group 10.png" alt="">

            <h1 class="header-sign">INFORMASI GROUP</h1>

            <form id="step1-form" action="{{route('store')}}", method="POST">
                @csrf
                <div class="inputs">
                    <label for="nama">Group’s name</label>
                    <input type="text" id="name" name="Group_name" placeholder="Masukkan nama group anda...">
                    <p id="error-name" class="error-message"></p>
                </div>

                <div class="inputs">
                    <label for="nama">Your Password</label>

                    <div class="hide">
                        <input type="password" id="pass" name="password" placeholder="Masukkan password anda...">
                        <div id="show-pass"  class="show"></div>
                    </div>

                    <p id="error-pass" class="error-message"></p>
                </div>

                <div class="inputs">
                    <label for="nama">Password confirmation</label>

                    <div class="hide">
                        <input type="password" id="passc" placeholder="Masukkan password anda sekali lagi...">
                        <div id="show-passc"  class="show"></div>
                    </div>

                    <p id="error-passc" class="error-message"></p>
                </div>

            <div class="p-details">
                <input type="radio" name="part" id="dot-1" value="Binusian">
                <input type="radio" name="part" id="dot-2" value="Non-Binusian">
                <div class="category">
                    <label for="dot-1">
                        <span class="dot one"></span>
                        <span class="details">Binusian</span>
                    </label>

                    <label for="dot-2">
                        <span class="dot two"></span>
                        <span class="details">Non-Binusian</span>
                    </label>
                </div>

                <p id="error-radio" class="error-message"></p>
            </div>

        </div>

        <button id="step-btn" type="submit">STEP SELANJUTNYA</button>
    </div>
</form>

    <script src="JS/sign.js"></script>
</body>
</html>
