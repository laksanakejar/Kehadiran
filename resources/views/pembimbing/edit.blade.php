<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Isi Kehadiran</title>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row text-center py-40">
            <h1>Isi Kehadiran Siswa</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-7">
                <form method="POST" action="{{ route('pembimbing.update', $students->id) }}" class="card py-4 px-4" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nis" class="form-label">Nis</label>
                        <input type="number" class="form-control" id="nis" name="nis" value="{{$students->nis}}">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$students->name}}">
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="rayon" class="form-label">Rayon</label>
                            <input type="text" class="form-control" id="rayon" name="rayon" value="{{$students->rayon}}">
                        </div>
                        <div class="col mb-3">
                            <label for="rombel" class="form-label">Rombel</label>
                            <input type="text" class="form-control"id="rombel" name="rombel" value="{{$students->rombel}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="present" class="form-label">Keterangan</label>
                            <select name="present" id="present" onchange="admSelectCheck(this);">
                                <optgroup label="Keterangan">
                                    <option value="alpa">Alpa</option>
                                    <option value="hadir">Hadir</option>
                                    <option id="admOption" value="sakit">Sakit</option>
                                    <option id="admOption" value="izin">Izin</option>
                                </optgroup>
                            </select>
                            <div class="form-group" id="admDivCheck"></div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script>
        function admSelectCheck(nameSelect) {
            if (nameSelect) {
                // admOptionValue = document.getElementById("admOption").value;
                if (nameSelect.value == "sakit" || nameSelect.value == "izin") {
                    document.getElementById("admDivCheck").textContent = "";
                    document.getElementById("admDivCheck").insertAdjacentHTML("afterbegin",
                        "<input type='file' name='image' class='form-control' accept='image/png, image/gif, image/jpeg' />"
                    )
                } else {
                    document.getElementById("admDivCheck").textContent = "";
                }
            } else {
                document.getElementById("admDivCheck").textContent = "";
            }
        }
    </script>

</body>

</html>
