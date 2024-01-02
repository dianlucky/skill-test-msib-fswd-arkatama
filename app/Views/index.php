<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <h2 class="text-center">TEST</h2>
    <div class="col-6 text-center mx-auto">
        <div class="card">
            <div class="card-body">
                <form action="<?= base_url() ?>biodata/save" method="POST">
                    <input style="width: 300px;" type="text" name="data" value="" placeholder="Masukkan data anda disini..."><br>
                    <button class="btn btn-primary mt-2" type="submit">SIMPAN</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>