<x-artiste-basic>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> Mes œuvres d'arts </h1>
        <a href="{{ route('oeuvre_form') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Ajouter une œuvre
        </a>
    </div>

    <!-- DataTales Example -->
    @if (!$oeuvres)
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Information</h6>
            </div>
            <div class="card-body">

                <div class="row">

                    <div href="#" class="btn btn-info btn-circle btn-lg btn-danger col-lg-1">
                        <i class="fa fa-info-circle"></i>
                    </div>

                    <div class="col-lg-11">
                        Aucune œuvre n'est enregistre sur ce compte, <br>
                        si vous possedez des oeuvres d'arts que vous voulez exposez sur notre platforme alors <a
                            href="{{ route('oeuvre_form') }}">cliquez-ici</a>
                    </div>

                </div>

            </div>
        </div>
    @else
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tables des œuvres</h6>
            </div>
            <div class="card-body" style="text-align: center">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>IMAGE</th>
                                <th>TITRES</th>
                                <th>CATEGORIE</th>
                                <th>PRIX $</th>
                                <th>EX</th>
                                <th>TAILLE</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($oeuvres as $oeuvre)
                                <tr>
                                    <td><img src="{{ asset('storage/image/oeuvres/'.$oeuvre->image) }}" style="border-radius: 15%;width: 50px;height: 50px;"></td>
                                    <td>{{ $oeuvre->titre }}</td>
                                    <td>{{ $oeuvre->categorie->categorie }}</td>
                                    <td>{{ $oeuvre->prix }}</td>
                                    <td>{{ $oeuvre->nombre_exemplaire }}</td>
                                    <td>{{ $oeuvre->largeur }}x{{ $oeuvre->longeur }}</td>

                                    <td>

                                        @if ($oeuvre->actif == 1)
                                            <button
                                                onclick="desactiverOeuvre({{ $oeuvre->id }}, '{{ $oeuvre->titre }}');"
                                                class="btn btn-success">
                                                <span class="icon text-white">
                                                    <i class="fas fa-check"></i>
                                                </span>
                                                <span class="text">Activer</span>
                                            </button>
                                        @else
                                            <button
                                                onclick="activerOeuvre({{ $oeuvre->id }}, '{{ $oeuvre->titre }}');"
                                                class="btn btn-warning">
                                                <span class="icon text-white">
                                                    <i class="fas fa-exclamation-triangle"></i>
                                                </span>
                                                <span class="text">Désactiver</span>
                                            </button>
                                        @endif

                                        <a href="{{ route('modifier_oeuvre', $oeuvre->id) }}"
                                            class="btn btn-info">
                                            <span class="icon text-white">
                                                <i class="fas fa-info-circle"></i>
                                            </span>
                                            <span class="text">Détail</span>
                                        </a>

                                        <button
                                            onclick="supprimerOeuvre({{ $oeuvre->id }}, '{{ $oeuvre->titre }}');"
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
    function desactiverOeuvre(idD, titre) {
        document.getElementById("idD").setAttribute("value", idD);
        $('#titreOeuvreD').text(titre);
        $('#desactivationModal').modal('show');
    }


    function activerOeuvre(id, titre) {
        document.getElementById("id").setAttribute("value", id);
        $('#titreOeuvreA').text(titre);
        $('#activationModal').modal('show');
    }

    function supprimerOeuvre(idS, titre)
    {
        document.getElementById("idS").setAttribute("value", idS);
        $('#titreOeuvre').text(titre);
        $('#exampleModal').modal('show');
    }
</script>

<!-- Modal Suppression -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">SUPPRESSION UNE OEUVRE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action=" {{ route('supprimer_oeuvre') }} " method="POST">
                    @csrf
                    @method('put')
                    <p> Souhaitez-vous vraiment SUPPRIMER <b id="titreOeuvre"></b> ?
                    <br> Une fois cette œuvre supprimer elle ne sera plus visible sur le site,
                    et elle disparaitre pour toujours.
                </p>
                    <p>
                        <input hidden type="text" name="idS" id="idS">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"
                            onclick="document.location.reload(false)">Annuler</button>
                        <button type="submit" class="btn btn-success">Confirmer</button>
                    </div>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Activation -->
<div class="modal fade" id="activationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ACTIVATION UNE OEUVRE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('activer_oeuvre') }}" method="POST">
                    @csrf
                    @method('put')
                    <p> Souhaitez-vous vraiment ACTIVER <b id="titreOeuvreA"></b> ?
                        <br>Une fois cette œuvre activer elle sera visible sur le site.
                    </p>
                    <p>
                        <input hidden type="text" name="id" id="id">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"
                            onclick="document.location.reload(false)">Annuler</button>
                        <button type="submit" class="btn btn-success">Confirmer</button>
                    </div>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Désactivation -->
<div class="modal fade" id="desactivationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">DESACTIVATION UNE OEUVRE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('desactiver_oeuvre') }}" method="POST">
                    @csrf
                    @method('put')
                    <p> Souhaitez-vous vraiment DESACTIVER <b id="titreOeuvreD"></b> ?
                        <br>Une fois cette œuvre désactiver elle ne sera plus visible sur le site, mais elle restera
                        dans votre espace.
                    </p>
                    <p>
                        <input hidden type="text" name="idD" id="idD">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"
                            onclick="document.location.reload(false)">Annuler</button>
                        <button type="submit" class="btn btn-success">Confirmer</button>
                    </div>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>