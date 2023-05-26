<x-auth>
    <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('template/images/icon/logo_transparent.png') }}" alt="Bozatvision">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="{{ route('login') }}" method="post" enctype="multipart/form-data">

                                @csrf
                                <div class="form-group">
                                    @error('email')
                                    <small  class="text-danger">{{ $message }}</small>
                                    @enderror
                                    <label>e-mail</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="exemple@email.com" value="{{ old('email') }}">
                                </div>
                                <div class="form-group">
                                    <label>Mot de passe</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Mot de passe">
                                </div>
                                
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Connexion</button>

                                <div class="register-link">
                                    <p>
                                        Si vous ne possedez pa un compte alors
                                    </p>
                                    <a class="au-btn au-btn--block au-btn--blue m-b-20" href="{{ route('register') }}" >Créer un compte</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</x-auth>    