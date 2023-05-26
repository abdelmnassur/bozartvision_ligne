<x-artiste-basic>

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> Ajouter une nouvelle catégorie d'œuvre </h1>
    </div>

    <div class="row">

        <form class="col-lg-6 mb-3" action="{{ route('categorie_register') }}" method="POST" enctype="multipart/form-data">
            <div class="card border-left-primary">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Ajouter une nouvelle catégorie d'œuvre</h6>
                </div>

                <div class="card-body">

                    @csrf
                    @method('post')

                    <div class="row">

                        <div class="col col-lg-12">

                            <div class="row form-group">

                                @error('titre')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <div class="col col-md-3">
                                    <label for="titre" class="form-control-label">Catégorie</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input class="form-control" type="text" name="categorie" id="categorie" placeholder="Titre de la catégorie" value="{{ old('categorie') }}">
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success btn-sm">
                        <i class="fa fa-check"></i> Enregistre
                    </button>
                    <a href="{{ route('gestion_categories') }}" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Annuler
                    </a>
                </div>
            </div>        
        </form>

    </div>
</x-artiste-basic>
