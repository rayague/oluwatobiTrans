<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Oluwatobi Trans') }}
        </h2>
    </x-slot>

    <div class="py-12">
                <div class="container-fluid shadow-lg">
                    <div class="table-responsive">
                        <div class="table-wrapper">
                            <div class="table-title">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h2>Mes <b>Posts</b></h2>
                                    </div>
                                    <div class="col-sm-6">
                                        <a href="#addEmployeeModal" class="btn btn-success rounded-lg" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter un post</span></a>
                                        <a href="#deleteEmployeeModal" class="btn btn-danger rounded-lg" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Supprimer</span></a>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>
                                            <span class="custom-checkbox">
                                                <input type="checkbox" id="selectAll">
                                                <label for="selectAll"></label>
                                            </span>
                                        </th>
                                        <th>Images</th>
                                        <th>Dtaes Transactions</th>
                                        <th>Description Marchandise</th>
                                        <th>Origine</th>
                                        <th>Destination</th>
                                        <th>Type de Transit</th>
                                        <th>Quantité/Volume</th>
                                        <th>Valeur Marchandise</th>
                                        <th>Numéro de suivi</th>
                                        <th>Moyen de Transport</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($post as $posts)
                                        @if($posts->status)

                                    <tr>
                                        <td>
                                            <span class="custom-checkbox">
                                                <input type="checkbox" id="checkbox5" name="options[]" value="1">
                                                <label for="checkbox5"></label>
                                            </span>
                                        </td>


                                        <td><img src="{{ asset('uploads/photos/' . $posts->images) }}" style="height: 80px; width: 80px; border-radius: 50%;" alt="..."></td>

                                        <td> {{ $posts->dateTrans }} </td>
                                        <td> {{ $posts->descTrans }} </td>
                                        <td> {{ $posts->origine }} </td>
                                        <td> {{ $posts->destination }} </td>
                                        <td> {{ $posts->typeTransit }} </td>
                                        <td> {{ $posts->quantite }} </td>
                                        <td> {{ $posts->valeur }} </td>
                                        <td> {{ $posts->moyenTransit }} </td>
                                        <td> {{ $posts->numSuivi  }} </td>


                                        <td>
                                            <a href="{{ route('editPost', $posts->id) }}" class="edit" ><i class="material-icons"  title="Modifier">&#xE254;</i></a>
                                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Supprimer">&#xE872;</i></a>
                                        </td>
                                    </tr>
                                        @endif

                                    @endforeach
                                </tbody>
                            </table>
                            <div class="clearfix">
                                <div class="hint-text"> <b>5</b> Montrés sur <b>25</b> lignes</div>
                                <ul class="pagination">
                                    <li class="page-item disabled"><a href="#">Précédent</a></li>
                                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                                    <li class="page-item"><a href="#" class="page-link">Suivant</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    </div>
                 {{--    @foreach($posts as $post)
                        @if($post->status)
                            <!-- Afficher les détails du poste -->
                        @endif
                    @endforeach --}}
                    <!-- Edit Modal HTML -->
                    <div id="addEmployeeModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="{{ route('addPost', $posts->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-header">
                                        <h4 class="modal-title">Ajouter un post</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label>Date Transaction</label>
                                            <input type="date" class="form-control rounded" name="dateTrans" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Description Transaction</label>
                                            <input type="text" class="form-control rounded" name="descTrans" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Origine</label>
                                            <input type="text" class="form-control rounded" name="origine" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Destination</label>
                                            <input type="text" class="form-control rounded" name="destination" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Type de Transit</label>
                                            <select name="typeTransit" id="typeTansit" class="rounded form-control">
                                                <option value="exportation">exportation</option>
                                                <option value="importation">importation</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Volume/Quantité</label>
                                            <input type="text" class="form-control rounded" name="quantite" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Valeur Marchandise</label>
                                            <input type="text" class="form-control rounded" name="valeur" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Moyen de Transport</label>
                                          <select name="moyenTransit" id="moyenTransit" class="rounded form-control">
                                                <option value="Aérien">Aérien</option>
                                                <option value="Maritime">Maritime</option>
                                                <option value="Terrestre">Terrestre</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Numéro de suivi</label>
                                            <input type="text" class="form-control rounded" name="numSuivi" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" class="form-control rounded" required name="images">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="button" class="btn btn-default text-light" data-dismiss="modal" value="Annuler" style="background: rgb(255, 96, 96); border-radius: 10px;">
                                        <input type="submit" class="btn btn-success" value="Poster" style="background: blue; border-radius: 10px;">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Edit Modal HTML -->

                    <!-- Delete Modal HTML -->
                    <div id="deleteEmployeeModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="{{ route('deletePost', $posts->id) }}" method="POST">
                                @csrf
                                <div class="modal-header">
                                    <h4 class="modal-title">Supprimer ce Post</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <p>Etes vous sur de vouloir supprimer ce post ?</p>
                                    <p class="text-warning"><small>Cette action sera irréversuble.</small></p>
                                </div>
                                <div class="modal-footer">
                                    <input type="button" class="btn btn-default text-light" data-dismiss="modal" value="Annuler" style="background: rgb(255, 96, 96); border-radius: 10px;">
                                    <input type="submit" class="btn btn-danger" value="Supprimer" style="background: blue; border-radius: 10px;">
                                </div>
                            </form>
                        </div>
                    </div>
                {{-- </div> --}}
            </div>
        </div>
    </div>
</x-app-layout>
