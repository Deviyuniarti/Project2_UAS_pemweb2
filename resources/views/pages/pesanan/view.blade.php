<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>View Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        body {
            background: linear-gradient(to bottom right, #a8c0ff, #3f2b96);
        }
    </style>
</head>
<body class="bg-primary">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4">
                            View Daftar Pesanan
                        </h3>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputName" type="text" placeholder="Nama" readonly value="{{ $order->nama }}" />
                                <label for="inputName">Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputEmail" type="text" placeholder="Email" readonly value="{{ $order->email }}" />
                                <label for="inputemail">Email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputMenu" type="text" placeholder="Menu" readonly value="{{ $order->menu }}" />
                                <label for="inputMenu">Menu</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputDrink" type="text" placeholder="Drink" readonly value="{{ $order->drink }}" />
                                <label for="inputDrink">Drink</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputQuantity" type="text" placeholder="Quantity" readonly value="{{ $order->quantity }}" />
                                <label for="inputQuantity">Quantity</label>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center py-3">
                        <div class="small">
                            <a href="/pesanan">Kembali ke Daftar Pesanan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
</body>
</html>