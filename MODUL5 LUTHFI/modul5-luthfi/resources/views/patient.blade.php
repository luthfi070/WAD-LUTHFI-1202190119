<?php
use App\Models\patient;
use App\Models\vaccines;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Patient</title>
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
        @if(count($patients) < 1)
        <div class="container mt-4">
            <center>
                <p>There is no data...</p>
                <a href="/chooseVac" class="btn btn-primary"
                    >Register Patient</a
                >
            </center>
        </div>
        @else
        <div class="container mt-4">
            <a href="/chooseVac" class="btn btn-primary">Register Patient</a>
            <table class="table table-bordered mt-3">
                <thead style="background-color: rgb(207, 226, 255)">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Vaccine</th>
                        <th scope="col">Name</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No Hp</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody style="background-color: rgb(197, 215, 242)">
                    @foreach($patients as $vac)
                    <?php
                    $nama = vaccines::select('name')->where('id',
                    $vac->vaccine_id)->get(); ?>
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $nama[0]["name"] }}</td>
                        <td>{{ $vac->name }}</td>
                        <td>{{ $vac->nik }}</td>
                        <td>{{ $vac->alamat }}</td>
                        <td>{{ $vac->no_hp }}</td>
                        <td>
                            <form
                                action="/deletePatient/{{ $vac->id }}"
                                method="POST"
                            >
                                @csrf @method('POST')
                                <a
                                    class="btn btn-warning"
                                    href="/getPatient/{{ $vac->id }}"
                                    >Edit</a
                                >
                                <button type="submit" class="btn btn-danger">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
        <footer style="margin-top: 420px">
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
