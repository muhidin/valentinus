<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arta Trans Mega | Indonesia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="./img/Untitled design (1).jpg" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./font/font.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body>
    <?php include_once('sambungan.php'); ?>
    <!-- SideNav Start -->
    <div class="sidenav">
        <img src="./img/Untitled_design__1_-removebg-preview.png" alt="logo">
        <a href="#about">About</a>
        <hr>
        <a href="#">Services</a>
        <hr>
        <a href="#">Product</a>
        <hr>
        <a href="#">Gallery</a>
        <hr>
        <a href="#">Contact Us</a>
        <hr>
    </div>
    <!-- SideNav END -->

    <!-- Banner Start -->
    <div class="main">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <?php
                $sql = "SELECT * FROM banner ORDER BY no";
                $result = mysqli_query($koneksi, $sql);
                // $jml = mysqli_num_rows($result);
                $ar = 1;
                while ($ra = mysqli_fetch_row($result)) {
                    if ($ar == 1) {
                        echo '<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>';
                    } else {
                        echo '<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="'. ($ar-1) .'" aria-label="Slide '. $ar .'"></button>';
                    }
                    $ar++;
                }
                ?>
            </div>
            <div class="carousel-inner">
                <?php
                $sql2 = "SELECT * FROM banner ORDER BY no";
                $result2 = mysqli_query($koneksi, $sql2);
                $a = 1;
                while ($r = mysqli_fetch_assoc($result2)) {

                ?>
                    <div class="carousel-item <?= $a == 1 ? 'active' : '' ?>">
                        <img src="./img/<?= $r['image']; ?>" class="d-block w-100" alt="banner<?= $a; ?>">
                        <div class="carousel-caption d-none d-md-block">
                            <h5><?= $r['title']; ?></h5>
                            <p><?= $r['description']; ?></p>
                        </div>
                    </div>
                <?php
                    $a++;
                }
                ?>

            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    </div>
    <!-- Banner END -->

    <!-- Colum Start -->
    <br>
    <section id="colum">
        <div class="container">
            <div class="row align-items-start">
                <div class="col">
                    <img src="img/2.jpg" alt="">
                </div>
                <div class="col">
                    <img src="img/1.jpg" alt=".">
                </div>
                <div class="col">
                    <img src="img/2.jpg" alt="">
                </div>
            </div>
            <br>
            <div class="row align-items-start">
                <div class="col">
                    <img src="img/1.jpg" alt="">
                </div>
                <div class="col">
                    <iframe width="600" height="180" src="https://www.youtube.com/embed/jO2viLEW-1A" title="video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
    </section>
    <br>
    <!-- Colum End -->

    <!-- More Information Start -->
    <section id="more">
        <div class="container">
            <button type="button" class="btn btn-success">
                <p>Contact Us &#9993;</p>
            </button>
        </div>
    </section>
    <br>

    <!-- About Start -->
    <section id="about">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h4>About US</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et facilis quis, quo odit assumenda, corrupti magni consectetur at voluptates atque ex omnis quasi possimus ipsa. Ipsam, culpa aperiam. Aliquam, nisi! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque nostrum ab eveniet sapiente a expedita quo quia non? Provident tempora deleniti temporibus sunt similique omnis repellendus unde ratione adipisci necessitatibus. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita doloremque cupiditate facilis exercitationem officiis, explicabo repellendus natus eum odio voluptatibus autem nesciunt aliquam at inventore repudiandae harum accusantium? Facere, magni!</p>
                    <br>
                    <a class="tombol" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="tombol" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="tombol" href="#"><i class="fab fa-instagram"></i></a>
                    <a class="tombol" href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- About End -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>