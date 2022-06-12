<?php
session_start();
include("../db_connect.php");
include("../functions.php");
?>
<?php error_reporting(E_ALL ^ E_NOTICE); ?>


<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $comm = $_POST['comment'];
    $rate = $_POST['rating-star'];
    $roomnum = $_POST['roomnum'];
    $stay = 0;
    $rateid = 2;



    if (!empty($comm) && !empty($rate)) {

        $query = " INSERT INTO rating(comments,entire_stay,rating_room,rating_id)
    VALUES ('$comm','$stay','$rate',' $rateid') ";
        mysqli_query($conn, $query);
        header("Location: reservation.php");
        die;
    }
}

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- REACT -->

    <script crossorigin src="https://unpkg.com/react@18/umd/react.development.js"></script>
    <script crossorigin src="https://unpkg.com/react-dom@18/umd/react-dom.development.js"></script>


    <!-- REACT END -->

    <title>Hello, world!</title>
    <link rel="stylesheet" href="reservation.css">

    <style>
        /*
=====
DEPENDENCES
=====
*/

        .screen-reader {
            width: var(--screenReaderWidth, 1px) !important;
            height: var(--screenReaderHeight, 1px) !important;
            padding: var(--screenReaderPadding, 0) !important;
            border: var(--screenReaderBorder, none) !important;

            position: var(--screenReaderPosition, absolute) !important;
            clip: var(--screenReaderClip, rect(1px, 1px, 1px, 1px)) !important;
            overflow: var(--screenReaderOverflow, hidden) !important;
        }

        /*
=====
CORE STYLES
=====
*/
        .rating {
            --uiRatingColor: var(--ratingColor, #eee);
            --uiRatingColorActive: var(--ratingColorActive, #ffcc00);

            display: var(--ratingDisplay, flex);
            font-size: var(--ratingSize, 1rem);
            color: var(--uiRatingColor);
        }

        .rating__control:nth-of-type(1):focus~.rating__item:nth-of-type(1)::before,
        .rating__control:nth-of-type(2):focus~.rating__item:nth-of-type(2)::before,
        .rating__control:nth-of-type(3):focus~.rating__item:nth-of-type(3)::before,
        .rating__control:nth-of-type(4):focus~.rating__item:nth-of-type(4)::before,
        .rating__control:nth-of-type(5):focus~.rating__item:nth-of-type(5)::before {
            content: "";
            box-shadow: 0 0 0 var(--ratingOutlineWidth, 4px) var(--uiRatingColorActive);

            position: absolute;
            top: -.15em;
            right: 0;
            bottom: -.15em;
            left: 0;
            z-index: -1;
        }

        .rating__item {
            cursor: pointer;
            position: relative;
        }

        .rating__item {
            padding-left: .25em;
            padding-right: .25em;
        }

        .rating__star {
            display: block;
            width: 1em;
            height: 1em;

            fill: currentColor;
            stroke: var(--ratingStroke, #222);
            stroke-width: var(--ratingStrokeWidth, 1px);
        }

        .rating:hover,
        .rating__control:nth-of-type(1):checked~.rating__item:nth-of-type(1),
        .rating__control:nth-of-type(2):checked~.rating__item:nth-of-type(-n+2),
        .rating__control:nth-of-type(3):checked~.rating__item:nth-of-type(-n+3),
        .rating__control:nth-of-type(4):checked~.rating__item:nth-of-type(-n+4),
        .rating__control:nth-of-type(5):checked~.rating__item:nth-of-type(-n+5) {
            color: var(--uiRatingColorActive);
        }

        .rating__item:hover~.rating__item {
            color: var(--uiRatingColor);
        }

        /*
=====
SETTINGS
=====
*/

        .rating {
            --ratingSize: 2rem;
            --ratingColor: #eee;
            --ratingColorActive: #ffcc00;
        }

        /*
=====
DEMO
=====
*/

        body {
            font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Open Sans, Ubuntu, Fira Sans, Helvetica Neue, sans-serif;
            font-size: 1rem;
            margin: 0;
        }

        .page {
            min-height: 100vh;
            display: flex;
        }

        .page__demo {
            margin: auto;
        }

        .page__group {
            margin-top: 2rem;
            margin-bottom: 2rem;
            text-align: center;
        }

        .page__hint {
            display: block;
            font-weight: 700;
            margin-top: 1rem;
        }

        @media (min-width: 641px) {
            .page__demo {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
            }

            .page__group {
                margin-left: 3.5rem;
                margin-right: 3.5rem;
            }
        }
    </style>

</head>

<body class="bg-light">





    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Hurghada Grand</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <!-- // lw 3ayzen tdefo 7aga 7toha ka LI hena -->
                <ul class="navbar-nav me-auto  mb-lg-0">
                    <li class="nav-item d-none">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>

                </ul>
                <span class="navbar-text">
                    <a class="nav-link" href="reservation.php">Room CheckIn</a>
                </span>
                <span class="navbar-text">
                    <a class="nav-link" href="logout.php">Logout</a>
                </span>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <h2 class="mt-4 mb-4">
                Thank You for your stay , Please Give us a feedback.
            </h2>
        </div>

        <div class="row">
            <form method="POST">

                <div class="col-3">
                    <div class="mb-3">
                        <label class="form-label">Room number</label>
                        <input name="roomnum" type="number" class="form-control col-3">
                    </div>
                </div>

                <div class="col">
                    <textarea id="app" name="comment" value="text" cols="140" rows="5"></textarea>
                </div>

                <div class="col ">

                    <div class="page__demo">
                        <div class="page__group">
                            <div class="rating">
                                <input type="radio" name="rating-star" class="rating__control screen-reader" id="rc1">
                                <input type="radio" name="rating-star" class="rating__control screen-reader" id="rc2">
                                <input type="radio" name="rating-star" class="rating__control screen-reader" id="rc3">
                                <input type="radio" name="rating-star" class="rating__control screen-reader" id="rc4">
                                <input type="radio" name="rating-star" class="rating__control screen-reader" id="rc5">


                                <label for="rc1" class="rating__item">
                                    <svg class="rating__star">
                                        <use xlink:href="#star"></use>
                                    </svg>
                                    <span class="screen-reader">1</span>
                                </label>
                                <label for="rc2" class="rating__item">
                                    <svg class="rating__star">
                                        <use xlink:href="#star"></use>
                                    </svg>
                                    <span class="screen-reader">2</span>
                                </label>
                                <label for="rc3" class="rating__item">
                                    <svg class="rating__star">
                                        <use xlink:href="#star"></use>
                                    </svg>
                                    <span class="screen-reader">3</span>
                                </label>
                                <label for="rc4" class="rating__item">
                                    <svg class="rating__star">
                                        <use xlink:href="#star"></use>
                                    </svg>
                                    <span class="screen-reader">4</span>
                                </label>
                                <label for="rc5" class="rating__item">
                                    <svg class="rating__star">
                                        <use xlink:href="#star"></use>
                                    </svg>
                                    <span class="screen-reader">5</span>
                                </label>
                            </div>
                            <span class="page__hint">Room Rating</span>
                        </div>


                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                        <symbol id="star" viewBox="0 0 26 28">
                            <path d="M26 10.109c0 .281-.203.547-.406.75l-5.672 5.531 1.344 7.812c.016.109.016.203.016.313 0 .406-.187.781-.641.781a1.27 1.27 0 0 1-.625-.187L13 21.422l-7.016 3.687c-.203.109-.406.187-.625.187-.453 0-.656-.375-.656-.781 0-.109.016-.203.031-.313l1.344-7.812L.39 10.859c-.187-.203-.391-.469-.391-.75 0-.469.484-.656.875-.719l7.844-1.141 3.516-7.109c.141-.297.406-.641.766-.641s.625.344.766.641l3.516 7.109 7.844 1.141c.375.063.875.25.875.719z" />
                        </symbol>
                    </svg>
                    <button type="submit" class="btn btn-outline-primary">Submit</button>
                </div>
            </form>


        </div>





    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!--     <script>
        class Textarea extends React.component {
            constructor() {

                super();
                this.state = {};
            }
            onTextChange(event) {

                this.setstate({
                    text: event.target.value,

                });
            }
            render() {
                const text = 'text' in this.state ? this.state.text : this.props.text;
                return(
                <div>
                <Textarea value={text} onChange={event=> this.onTextChange(event) }

                />

                <h3>{text.length}</h3>
                </div>
                );
            }

        }
ReactDOM.render(
<Textarea text="Your Comments"/>,
document.getElementById('app')
);


    </script> -->
</body>

</html>