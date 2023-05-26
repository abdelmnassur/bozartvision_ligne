<x-artiste-basic>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> Categorie d'œuvres d'arts </h1>

        <a href="{{ route('categorie_form') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Ajouter une nouvelle catégorie d'œuvre
        </a>
        
    </div>

    <!-- DataTales Example -->
    @if ( ! $categories )
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Information</h6>
        </div>
        <div class="card-body">
            
            <div class="row">
                
                <div href="#" class="btn btn-info btn-circle btn-lg btn-danger col-lg-1" >
                    <i class="fas fa-info-circle"></i>
                </div>

                <div class="col-lg-11">
                    Aucune categorie n'est enregistre sur ce compte, <br>
                    si vous possedez des oeuvres d'arts que vous voulez exposez sur notre platforme alors <a href="{{ route('oeuvre_form') }}">cliquez-ici</a>
                </div>

            </div>

        </div>
    </div>

        
        @else
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tables des categories des œuvres </h6>
                </div>
                <div class="card-body" style="text-align: center">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>CATEGORIE</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $categorie)
                                    <tr>
                                        <td> {{ $categorie->categorie }}</td>
                                        <td>
                    
                                            <button
                                            onclick="modifierCategorie({{ $categorie->id }}, '{{ $categorie->categorie }}');"
                                                class="btn btn-info">
                                                <span class="icon text-white">
                                                    <i class="fas fa-pen"></i>
                                                </span>
                                                <span class="text">Modifier</span>
                                            </button>
    
                                            <button
                                            onclick="supprimerCategorie({{ $categorie->id }}, '{{ $categorie->categorie }}');"
                                                class="btn btn-danger">
                                                <span class="icon text-white">
                                                    <i class="fas fa-trash"></i>
                                                </span>
                                                <span class="text">Suppimer</span>
                                            </button>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    @endif

</x-artiste-basic>

<script>
    function supprimerCategorie(id, categorie)
    {
        document.getElementById("id").setAttribute("value", id);
        $('#Categorie').text(categorie);
        $('#exampleModal').modal('show');
    }

    function modifierCategorie(idM, categorie)
    {
        document.getElementById("idM").setAttribute("value", idM);
        document.getElementById("CategorieM").setAttribute("value", categorie);
        $('#CategorieM').text(categorie);
        $('#modifierModal').modal('show');
    }

    function ajouterCategorie()
    {
        // document.getElementById("idA").setAttribute("value", idA);
        // $('#CategorieA').text(categorie);
        $('#ajouterModal').modal('show');
    }
</script>


<!-- Modal Suppression -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">SUPPRESSION CATEGORIE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('supprimer_categorie') }}" method="POST">
                    @csrf
                    @method('put')
                    <p> Souhaitez-vous vraiment supprimer la categorie des <b id="Categorie"></b> ?
                        <br>Une fois supprimée cette categorie des ne sera plus visible dans la liste des categorie
                        de la platforme.
                    </p>
                        
                    <p>
                        <input hidden type="number" name="id" id="id">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal" >Annuler</button>
                        <button type="submit" class="btn btn-success">Confirmer</button>
                    </div>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Modal Modification -->
<div class="modal fade" id="modifierModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bolder"> MODIFICATION CATEGORIE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('modifier_categorie') }}" method="POST">
                    @csrf
                    @method('put')
                    <p>
                        <input hidden type="number" name="idM" id="idM">
                        <div class="row form-group">

                            <div class="col col-md-3">
                                <label for="titre" class="form-control-label">Catégorie</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input class="form-control" type="text" name="CategorieM" id="CategorieM"> 
                            </div>
                        </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="document.location.reload(false)">Annuler</button>
                            <button type="submit" class="btn btn-success">Enregistre</button>
                        </div>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Ajouter -->
<div class="modal fade" id="ajouterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bolder"> AJOUTER UNE NOUVELLE CATEGORIE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('categorie_register') }}" method="POST">
                    @csrf
                    @method('post')
                    <p>
                        <div class="row form-group">

                            <div class="col col-md-3">
                                <label for="categorie" class="form-control-label">Catégorie</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input class="form-control" type="text" name="categorie" id="categorie" required=""> 
                            </div>
                        </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="document.location.reload(false)">Annuler</button>
                            <button type="submit" class="btn btn-success">Enregistre</button>
                        </div>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>