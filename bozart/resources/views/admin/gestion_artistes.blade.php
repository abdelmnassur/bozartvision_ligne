<x-admin-basic>
    <!-- MAIN CONTENT-->
    <div class="section__content section__content--p10">
        <div class="container-fluid">
            <div class="row m-t-30">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="title-3 m-b-5">
                                <i class="zmdi zmdi-account-calendar"></i>user data
                            </h3>
                        </div>
                        <div class="card-body card-block row">
                            <div class="filters m-b-5 col-md-6">
                                <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                                    <select class="js-select2" name="property">
                                        <option selected="selected">All Users</option>
                                        <option value="">Activer</option>
                                        <option value="">Desactiver</option>
                                    </select>
                                    <div class="dropDownSelect2"></div>
                                </div>
                            </div>
                            <div class="filters m-b-45 col-md-6">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="i-btn">
                                            <button class="btn btn-primary">
                                                <i class="fa fa-search"></i> Rechercher
                                            </button>
                                        </div>
                                        <input type="text" id="input1-group2" name="input1-group2"
                                            placeholder="email" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section__content section__content--p10">
        <div class="container-fluid">
            <div class="row m-t-5">
                <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <div class="table-responsive m-b-40">
                        <table class="table table-borderless table-data3 center-elements">
                            <thead>
                                <tr>
                                    <th>Prenom</th>
                                    <th>Téléphone</th>
                                    <th>email</th>
                                    <th>actif</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($artistes as $artiste)
                                    <tr>
                                        <td> {{ $artiste->user->prenom }} </td>
                                        <td> {{ $artiste->user->telephone }} </td>
                                        <td> {{ $artiste->user->email }} </td>
                                        <td>
                                            <label
                                                onclick="activerUser({{ $artiste->user->id }}, '{{ $artiste->user->nom }} {{ $artiste->user->prenom }}');"
                                                class="switch switch-text switch-success switch-pill m-l-0">
                                                <input type="checkbox" class="switch-input"
                                                    @if ($artiste->user->actif == 1) checked="true" @endif>
                                                <span data-on="On" data-off="Off" class="switch-label"></span>
                                                <span class="switch-handle"></span>
                                            </label>

                                        </td>
                                        <td>
                                            {{ $artiste->user->actif }}

                                            {{-- <div class="table-data-feature center-elements">
                                                <a class="item" data-toggle="tooltip" data-placement="top"
                                                    title="Edit" href="{{ route('show', $user->id) }}">
                                                    <i class="zmdi zmdi-edit"></i>
                                                </a>
                                            </div> --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- END DATA TABLE-->
                </div>
            </div>
        </div>
    </div>

</x-admin-basic>

<script>
    function activerUser(id, nom) {
        document.getElementById("id").setAttribute("value", id);
        $('#nomUser').text(nom);
        if (id = 1) {
            $('#ad').text('désactiver');
        }
        if (id = 0) {
            $('#ad').text('activer');
        }
        $('#exampleModal').modal('show');
    }
    
</script>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Désactiver utilisateur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin_activer_desactiver') }}" method="POST">
                    @csrf
                    @method('put')
                    <p>Souhaitez-vous <b id="ad"></b> cet utilisateur?</p>
                    <p>
                        Nom : <b id="nomUser"></b> <br>
                        <input hidden type="text" name="id" id="id">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="document.location.reload(false)">Annuler</button>
                        <button type="submit" class="btn btn-success">Confirmer</button>
                    </div>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>