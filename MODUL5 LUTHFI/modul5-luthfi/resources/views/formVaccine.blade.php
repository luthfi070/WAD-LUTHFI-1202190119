<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Form Vaccine</title>
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
                        <a class="nav-link active" href="/vaccine"
                            ><strong>Vaccine</strong>
                            <span class="sr-only">(current)</span></a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/patient"
                            >Patient <span class="sr-only">(current)</span></a
                        >
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container mt-4">
            <center>
                <h4>Input Vaccine</h4>
            </center>
            <form
                action="/inputVaccine"
                method="POST"
                enctype="multipart/form-data"
            >
                @csrf
                <div class="form-group">
                    <label for="namaVaksin">Vaccine Name</label>
                    <input
                        type="text"
                        class="form-control"
                        id="namaVaksin"
                        name="namaVaksin"
                    />
                </div>
                <div class="form-group">
                    <label for="harga">Price</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Rp</div>
                        </div>
                        <input
                            type="number"
                            class="form-control"
                            id="harga"
                            name="harga"
                        />
                    </div>
                </div>
                <div class="form-group">
                    <label for="desc">Description</label>
                    <textarea
                        type="text"
                        class="form-control"
                        id="desc"
                        name="desc"
                    ></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input
                        type="file"
                        class="form-control-file"
                        name="image"
                        id="image"
                    />
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <footer style="margin-top: 85px">
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
