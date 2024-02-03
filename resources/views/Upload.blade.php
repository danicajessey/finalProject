<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>

    <!-- CSS -->
    <link rel="stylesheet" href="CSS/upload.css">

</head>
<body>
    <div class="container">
        <img src="images/logo.png" alt="logo" style="margin: 38.97px;">
        <div class="box">
            <div class="bg-box"></div>
            <img src="images/group 12.png" alt="">

            <h1 class="header-sign">UPLOAD DATA</h1>

            <form id="step1-form" action="{{route('store3')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="inputs">
                    <label for="nama">Upload CV</label>

                    <div class="wraping">

                        <input type="file" id="files" hidden="hidden" name="image_CV">

                        <div class="wrap">
                            <button type="button" id="buttons" >Upload</button>
                            <div id="ups" class="up"></div>
                        </div>

                        <span id="texts">.pdf, .jpeg, .jpg, .png</span>
                    </div>

                </div>

                <div class="inputs">
                    <label for="nama">Upload Flazz Card (Binusian)</label>

                    <div class="wraping">

                        <input type="file" id="files2" hidden="hidden" name="image_flazz_card">

                        <div class="wrap">
                            <button type="button" id="buttons2">Upload</button>
                            <div id="ups2" class="up"></div>
                        </div>

                        <span id="texts2">.pdf, .jpeg, .jpg, .png</span>
                    </div>

                </div>

                <div class="inputs">
                    <label for="nama">Upload ID Card (Non-Binusian)</label>

                    <div class="wraping">

                        <input type="file" id="files3" hidden="hidden" name="image_ID_card">

                        <div class="wrap">
                            <button type="button" id="buttons3">Upload</button>
                            <div id="ups3" class="up"></div>
                        </div>

                        <span id="texts3">.pdf, .jpeg, .jpg, .png</span>
                    </div>

                </div>

        </div>

        <button id="step-btn" class="last-btn" type="submit" href="">Registrasi</button>
    </div>
    </form>
    <script src="JS/upload.js"></script>
</body>
</html>
