<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
           <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
        {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> --}}
        {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 --}}


    <title>Edition de Poste</title>
</head>
<body>
                        <div class="container" >
                        <div class="container">
                            @if (session('success'))
                                <div class="alert  alert-info alert-dismissible fade show" role="alert" >
                                    <p class="text-center">{{ session('success') }}</p>
                                </div>
                            @endif
                            <div class="modal-content">
                                <form action="{{ route('updatePost', $posts->id) }}" enctype="multipart/form-data" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-header">
                                        <h4 class="modal-title">Modifier ce poste</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label>Date Transaction</label>
                                            <input type="date" class="form-control rounded" name="dateTrans" value="{{ $posts->dateTrans }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Description Transaction</label>
                                            <input type="text" class="form-control rounded" name="descTrans" value="{{ $posts->descTrans }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Origine</label>
                                            <input type="text" class="form-control rounded" name="origine" value="{{ $posts->origine }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Destination</label>
                                            <input type="text" class="form-control rounded" name="destination" value="{{ $posts->destination }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Type de Transit</label>
                                            <select name="typeTransit" id="typeTansit" class="rounded form-control" value="{{ $posts->typeTransit }}">
                                                <option value="exportation">exportation</option>
                                                <option value="importation">importation</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Volume/Quantité</label>
                                            <input type="text" class="form-control rounded" name="quantite" value="{{ $posts->quantite }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Valeur Marchandise</label>
                                            <input type="text" class="form-control rounded" name="valeur" value="{{ $posts->valeur }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Moyen de Transport</label>
                                          <select name="moyenTransit" id="moyenTransit" class="rounded form-control" value="{{ $posts->moyenTransit }}">
                                                <option value="Aérien">Aérien</option>
                                                <option value="Maritime">Maritime</option>
                                                <option value="Terrestre">Terrestre</option>
                                            </select>
                                        </div>
                                        <div class="form-group"">
                                            <label>Numéro de suivi</label>
                                            <input type="text" class="form-control rounded" value="{{ $posts->numSuivi }}" name="numSuivi"  required>
                                        </div>
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" class="form-control rounded" required name="images">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="button" class="btn btn-default text-light" data-dismiss="modal" value="Annuler"  style="background: rgb(255, 96, 96); border-radius: 10px;">
                                        <input type="submit" class="btn btn-info" value="Modifier" style="background: blue; border-radius: 10px;">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
