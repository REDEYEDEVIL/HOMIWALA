<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/home.css">
    <script>
        window.onload = function() {
            // Array of image URLs
            var images = [
                "imge/img1.jpg",
                "imge/img2.jpg",
                "imge/img3.jpg",
                "imge/img4.jpg"
            ];

            var currentIndex = 0;
            var slider = document.querySelector('.slider');
            var image = slider.querySelector('img');

            function changeImage() {
                // Update the image source
                image.src = images[currentIndex];

                // Increment the index or reset to 0 if it reaches the end
                currentIndex = (currentIndex + 1) % images.length;
            }

            // Change the image every 3 seconds
            setInterval(changeImage, 3000);
        };
    </script>
</head>
<body>
<div class="nav">
        <div class="logo">
            <img src="img/logo.png" alt="">
        </div>
        <div class="nav-links">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Gallary</a></li>
                <li><a href="#">Notification</a></li>
                <li><a href="#">About Us</a></li>
            </ul>
        </div>
</div>

        <div class="slide">
            <div class="slider">
                <img src="" alt="Slider Image">
            </div>
        </div>

        <div class="contain">
            <div class="right">
                <img src="img/THE FINAL LOGO - Blue.png" alt=""> 
            </div>
            <div class="left">
                <span>New Brahmand CHSL is a well-maintained housing society located in Thane West, Phase 7. With 13 buildings and a picturesque surrounding of greenery and an airforce base, it offers an attractive residential destination. The society boasts regular cleaning and maintenance of common areas, a well-equipped clubhouse for indoor games, 24x7 security with CCTV cameras, and a convenient location near schools, hospitals, and shopping facilities. It hosts vibrant community events and promotes a friendly and helpful atmosphere. The society emphasizes sustainability through rainwater harvesting and provides dedicated parking spaces for residents. New Brahmand CHSL is committed to ensuring a comfortable and welcoming environment for all its residents. </span>
            </div>
        </div>
        
</body>
</html>