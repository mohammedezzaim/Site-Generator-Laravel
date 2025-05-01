
 <!-- Login Modal -->
<div id="loginModal2" class="modal-style-2 dark modal">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <div class="modal-header p-0">
                <h4 class="modal-title">Login</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <!-- Email -->
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" />
                        @error('email')
                            <div class="mt-2 text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                        @error('password')
                            <div class="mt-2 text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Remember Me -->
                    <div class="form-group form-check">
                        <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                        <label for="remember_me" class="form-check-label">Remember me</label>
                    </div>

                    <!-- Actions -->
                    <div class="d-flex justify-content-between">
                        @if (Route::has('password.request'))
                            <a class="text-decoration-none text-danger" href="{{ route('password.request') }}">Forgot your password?</a>
                        @endif
                        <button type="submit" class="btn btn-primary btn-sm">Log in</button>
                    </div>
                </form>
            </div>
            
            <div class="modal-footer">
                Don't have an account? 
                <a href="#registerModal2" data-dismiss="modal" data-toggle="modal">Register</a>
            </div>
        </div>
    </div>
</div>

<!-- Register Modal -->
<div id="registerModal2" class="modal-style-2 dark modal">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <div class="modal-header p-0">
                <h4 class="modal-title">Register</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <!-- Name -->
                    <div class="form-group">
                        <label for="name" class="form-label">Name</label>
                        <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" />
                        @error('name')
                            <div class="mt-2 text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" />
                        @error('email')
                            <div class="mt-2 text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                        @error('password')
                            <div class="mt-2 text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div class="form-group">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                        @error('password_confirmation')
                            <div class="mt-2 text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Actions -->
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary btn-sm">Register</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                Already have an account? 
                <a href="#loginModal2" data-dismiss="modal" data-toggle="modal">Login</a>
            </div>
        </div>
    </div>
</div>




{{-- 
 <!-- <!-login modal 2  -->
 <div id="loginModal2" class="modal-style-2 dark modal ">
     <div class="modal-dialog modal-login">
         <div class="modal-content">
             <div class="modal-header p-0">
                 <h4 class="modal-title">Login</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
             </div>
             <div class="modal-body">
                 <!-- dont forget to add action and action method  -->
                 <form action="" method="" class="mt-3">
                     <div class="form-group">
                         <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-user"></i></span>
                             <input type="text" class="form-control" name="username"
                                 placeholder="Enter your username" required="required">
                         </div>
                     </div>
                     <div class="form-group">
                         <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                             <input type="password" class="form-control" name="password" placeholder="Enter password"
                                 required="required" autocomplete="on">
                         </div>
                     </div>
                     <div class="row pl-1 pr-1">
                         <div class="col text-left">
                             <label class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="item_checkbox"
                                     name="item_checkbox" value="option1">
                                 <span class="custom-control-label">&nbsp;Remember Me</span>
                             </label>
                         </div>
                         <div class="col text-right hint-text pt-0">
                             <a href="" class="text-danger">Forgot Password?</a>
                         </div>
                     </div>
                     <div class="form-group text-center mt-2 mb-0">
                         <button type="submit" class="btn btn-primary btn-sm">Login</button>

                     </div>
                     <!-- <p class="hint-text mt-0">or login with</p> -->
                     <!-- <div class="social-login text-center">
            <a class=" btn-facebook  text-uppercase" href="redirect/facebook"><i class="fab fa-facebook-f mr-2 ml-2"></i> </a>
            <a class=" btn-facebook  text-uppercase" href="redirect/google"><i class="fab fa-google mr-2 ml-2"></i></a>
            <a class=" btn-facebook  text-uppercase" href="redirect/twitter"><i class="fab fa-twitter mr-2 ml-2"></i></a>
          </div> -->
                 </form>
             </div>
             <div class="modal-footer">Don't have an account? <a href="#registerModal2" data-dismiss="modal"
                     data-toggle="modal"> Register</a></div>
         </div>
     </div>
 </div>

 <!-- register modal 2 -->
 <div id="registerModal2" class="modal-style-2 dark modal ">
     <div class="modal-dialog modal-login">
         <div class="modal-content">
             <div class="modal-header p-0">
                 <h4 class="modal-title">Register</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
             </div>
             <div class="modal-body">
                 <form action="" method="post" class="mt-3">
                     <div class="form-group">
                         <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-user"></i></span>
                             <input type="text" class="form-control" name="name" placeholder="Enter your name"
                                 required="required">
                         </div>
                     </div>
                     <div class="form-group">
                         <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                             <input type="text" class="form-control" name="email"
                                 placeholder="Enter email address" required="required">
                         </div>
                     </div>
                     <div class="form-group">
                         <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                             <input type="password" class="form-control" name="password"
                                 placeholder="Enter password" required="required" autocomplete="on">
                         </div>
                     </div>
                     <div class="form-group">
                         <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-eye-slash"></i></span>
                             <input type="password" class="form-control" name="password_confirmation"
                                 placeholder="Retype password" required="required" autocomplete="on">
                         </div>
                     </div>

                     <div class="form-group text-center">
                         <button id="signup-button" type="submit" class="btn btn-primary btn-sm">Register</button>

                     </div>
                 </form>

             </div>
             <!-- social icons -->
             <!-- <p class="hint-text">or register with</p>
      <div class="social-login text-center mb-2">
        <a class=" btn-facebook  text-uppercase" href="redirect/facebook"><i class="fab fa-facebook-f mr-2 ml-2"></i> </a>
        <a class=" btn-facebook  text-uppercase" href="redirect/google"><i class="fab fa-google mr-2 ml-2"></i></a>
        <a class=" btn-facebook  text-uppercase" href="redirect/twitter"><i class="fab fa-twitter mr-2 ml-2"></i></a>
      </div> -->
             <div class="modal-footer">Already have an account? <a href="#loginModal2" data-dismiss="modal"
                     data-toggle="modal"> Login</a></div>
         </div>
     </div>
 </div>
 <!--modal style 2 end --> --}}



