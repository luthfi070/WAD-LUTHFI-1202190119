<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Choose Vaccine</title>
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous"
        />
        <script
            src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"
        ></script>
    </head>
    <!--  -->
    <body>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/"
                            >Home <span class="sr-only">(current)</span></a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/vaccine"
                            >Vaccine <span class="sr-only">(current)</span></a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/patient"
                            ><strong>Patient</strong>
                            <span class="sr-only">(current)</span></a
                        >
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container mt-4">
            <center><h4>List Vaccine</h4></center>
            <div class="container mt-4">
                <div class="card-deck mt-3">
                    @foreach($vaccines as $vac)
                    <div class="card" style="max-width: 18rem">
                        <img class="card-img-top" height=250 width=123 src={{ asset('storage/' . $vac->image)}}
                        alt="vaksin"/>
                        <div class="card-body">
                            <h5 class="card-title">{{ $vac->name }}</h5>
                            <p class="card-text">
                                {{ $vac->description }}
                            </p>
                        </div>
                        <div class="card-footer">
                            <a
                                href="/registVac/{{$vac->id}}"
                                class="btn btn-primary"
                                >Vaccine Now</a
                            >
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!--  -->
        </div>
        <footer style="margin-top: 50px">
            <center>
                Made with &#10084;
                <a
                    class="mr-5"
                    href="#footer"
                    data-toggle="modal"
                    data-target="#footer"
                    >Luthfi_1202190119</a
                >
            </center>
        </footer>
        <!-- modal footer -->
        <div
            class="modal fade"
            id="footer"
            tabindex="-1"
            role="dialog"
            aria-labelledby="footer"
            aria-hidden="true"
        >
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="footer">Created By</h5>
                        <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                        >
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Kesan : Kesannya, praktikumnya sangat mudah, dan terlalu
                        lama deadlinenya, tolong dipercepat, maksimal 1 malam
                        <br />
                        Pesan : Terima kasih bang
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
