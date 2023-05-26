<x-auth>
    <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                            <img src="{{ asset('template/images/icon/logo_transparent.png') }}"alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="{{ route('register') }}" method="post" enctype="multipart/form-data">
                                
                                @csrf
                                <div class="form-group">
                                    @error('nom')
                                    <small  class="text-danger">{{ $message }}</small>
                                    @enderror
                                    <label>Nom</label>
                                    <input class="au-input au-input--full" type="text" name="nom" placeholder="Nom" value="{{ old('nom') }}">
                                </div>
                                
                                <div class="form-group">
                                    @error('prenom')
                                    <small  class="text-danger">{{ $message }}</small>
                                    @enderror
                                    <label>Prénom</label>
                                    <input class="au-input au-input--full" type="text" name="prenom" placeholder="Prénom" value="{{ old('prenom') }}">
                                </div>
                                
                                <div class="form-group">
                                    @error('genre')
                                    <small  class="text-danger">{{ $message }}</small>
                                    @enderror
                                    <label for="genre" class=" form-control-label">Genre</label>
                                    <select name="genre" id="genre" class="form-control" value="{{ old('genre') }}" >
                                        <option value="0">Sélectinonnez le genre</option>
                                        <option value="homme">Homme</option>
                                        <option value="femme">Femme</option>
                                    </select>
                                </div>


                                <div class="form-group">
                                    @error('telephone')
                                    <small  class="text-danger">{{ $message }}</small>
                                    @enderror
                                    <label>Téléphone</label>
                                    <input class="au-input au-input--full" type="number" name="telephone" placeholder="Téléphone" value="{{ old('telephone') }}">
                                </div>

                                <div class="form-group">
                                    @error('email')
                                    <small  class="text-danger">{{ $message }}</small>
                                    @enderror
                                    <label>Email</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                                </div>

                                <div class="form-group">
                                    @error('password')
                                    <small  class="text-danger">{{ $message }}</small>
                                    @enderror
                                    <label>Mot de passe</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>

                                <div class="form-group">
                                    <label>Confirmation</label>
                                    <input class="au-input au-input--full" type="password" name="password_confirmation" placeholder="Password">
                                </div>
                                
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Enregistre</button>
                                <div class="register-link">
                                    <p>
                                        Si vous possedez déjà un compte alors
                                    </p>
                                    <a class="au-btn au-btn--block au-btn--blue m-b-20" href="{{ route('login') }}" >Se connecter</a>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
    </div>
</x-auth>