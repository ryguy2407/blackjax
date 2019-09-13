<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta description="@yield('description')">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Blackjax Fun Casino - @yield('title')</title>
</head>
<body>

@include('partials/header')

<div class="masthead mt-lg-n8 mb-5" style="height: 400px;">
    <div class="container">
        <div class="overlay col-lg-5 text-lg-left">
            <h2>
                Make your next event special with
                Townsville's favourite fun casino.
            </h2>
        </div>
    </div>
</div>

<div class="callout">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h2 style="font-weight: 800;">
                    We bring it all to you for a
                    hassle free event
                </h2>
                <p style="font-size: 20px;" class="mt-4 mb-5">
                    Professional dealers and casino quality chips it's
                    just like the real thing without the risk! A truly
                    unique experience for your next event.
                </p>
                <a href="#" style="width: 100%;font-weight: 800;font-size: 18px;" class="btn btn-danger">Request a Quote</a>
            </div>
            <div class="col-md-7">
                <img src="/images/van.jpg" style="width: 100%;">
            </div>
        </div>
    </div>
</div>

<div class="testimonials">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-4">
                <h4>
                    "Thanks again for such a great night!
                    Everyone was raving about how much
                    fun they had".
                </h4>
                <p>Sam Wheeler - Marian School</p>
            </div>
            <div class="col-md-4">
                <h4>
                    "Thank you so much for
                    a great party last night
                    everyone said they had
                    so much fun".
                </h4>
                <p>Donna</p>
            </div>
            <div class="col-md-4">
                <h4>
                    "Blackjax were so professional, real
                    casino trained croupiers and they made
                    our night".
                </h4>
                <p>Carl - Big Hammer Building Supplies</p>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">

    <h1 class="font-weight-bold text-center mb-5">
        We offer 3 high quality tables
    </h1>

    <div class="card-deck">
        <div class="card">
            <img src="/images/blackjack.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Blackjack</h5>
                <p class="card-text">
                    Our most popular table, book on its
                    own or as a full package with one of
                    our proffesional croupiers.
                </p>
                <a href="#" class="btn btn-primary btn-block font-weight-bold">See our blackjack table</a>
            </div>
        </div>
        <div class="card">
            <img src="/images/roulette.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Roulette</h5>
                <p class="card-text">
                    A hit at all parties, one of the easier
                    games to get everyone involved.
                    Can be booked with croupiers.
                </p>
                <a href="#" class="btn btn-primary btn-block font-weight-bold">See our roulette wheel</a>
            </div>
        </div>
        <div class="card">
            <img src="/images/funwheel.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                    <h5 class="card-title">Fun Wheel</h5>
                <p class="card-text">
                    The easiest game to play and a great
                    way for guests to break the ice. Hire
                    stand alone or with croupiers.
                </p>
                <a href="#" class="btn btn-primary btn-block font-weight-bold">See our fun wheel</a>
            </div>
        </div>
    </div>

</div>

<div class="container mb-5">
    <h1 class="font-weight-bold text-center mb-5">
        Contact Us
    </h1>
    <h3 class="text-center font-weight-light mb-5">
        If you'd like to know more feel free to contact us
        below and we'll be in touch
    </h3>

    <hr class="mb-5">

    <div class="row">
        <div class="col-md-4">
            <h5 class="mb-4">Blackjax Townsville</h5>
            <p>
                <b>Ph:</b> 0432 678<br>
                <b>Email:</b> info@blackjax.com.au
            </p>
            <p>
                We mainly service North Queensland
                but we can travel. Contact us to
                discuss your needs.
            </p>
        </div>

        <div class="col-md-8">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="phone">Email</label>
                        <input type="phone" class="form-control" id="phone" placeholder="Phone">
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email Address">
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="date">Function Date</label>
                        <input type="text" class="form-control" id="date" placeholder="Function Date">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="functionType">Function Type</label>
                        <input type="text" class="form-control" id="funtionType" placeholder="Birthday etc">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="eventLocation">Event Location</label>
                        <input type="text" class="form-control" id="eventLocation" placeholder="Event Location">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="eventNumbers">Expected Number of guests</label>
                        <input type="text" class="form-control" id="eventNumbers" placeholder="Expected Number of Guests">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="preferredMethod">Preferred Contact Method</label>
                        <select id="preferredMethod" class="form-control">
                            <option selected>Choose...</option>
                            <option value="Email">Email</option>
                            <option value="Phone">Phone</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="contactTime">Preferred Contact Time</label>
                        <input type="text" class="form-control" id="contactTime" placeholder="eg. 6pm">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<div class="footer">
    <div class="container py-5 text-center">
        <p class="mb-0">&copy; {{ date('Y') }} Blackjax Fun Casino Townsville</p>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>