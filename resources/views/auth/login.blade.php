<x-layout>
    {{-- <div class="container my-5">
        <h1>Login</h1>
        <div class="row">
            <div class="col-12 col-md-6">
                <form action="{{ route('login')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Ricordati</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div> --}}


    
    <div class="container-fluid sectionLogin">
        <div class="row">
            <div class="col-12">
                <div class="login-box">
                    <form action="{{ route('login')}}" method="post">
                        @csrf
                        <h2>Login</h2>
                        <div class="input-box">
                            <span class="icon"><i class="bi bi-r-square"></i></span>
                            <input id="exampleInputEmail1" type="email" name="email" required>
                            <label for="exampleInputEmail1">Email</label>
                        </div>
                        <div class="input-box">
                            <span class="icon"><i class="bi bi-envelope"></i></span>
                            <input id="exampleInputPassword1" type="Password" name="password" required>
                            <label for="exampleInputPassword1">Password</label>
                        </div>
                        <div class="remember-forgot">
                            <label><input type="checkbox">Ricordami</label>
                        </div>
                        <button class="buttonLogin" type="submit">Login</button>
                        <div class="register-link">
                            <p>Non hai un account? <a href="{{route('register')}}">{{__('ui.navRegister')}}</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>