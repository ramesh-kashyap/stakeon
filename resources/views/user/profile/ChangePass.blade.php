<main id="as-main-settings" class="uk-section-xsmall">
    <div class="uk-container uk-container-expand">
        <div class="uk-grid uk-grid-stack" uk-grid="">
            <!-- Left Form -->
            <section class="uk-width-1-2@l">
                <div id="as-settings-password" class="uk-cube-bottom-left uk-cube-figure">
                    <div class="uk-card uk-card-default uk-card-body">
                        <header class="uk-heading uk-text-center">
                            <h3 class="uk-margin-small-bottom">Change Password</h3>
                        </header>
                        @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div>{{$error}}</div>
            @endforeach
            @endif
                        <form action="{{ route('user.edit-password') }}" method="post" name="editform">
                            {{ csrf_field() }}
                            <!-- Old Password -->
                            <div class="uk-margin-small-top uk-margin-bottom">
                                <label class="uk-form-label" for="as-form-old-password">Old password</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input uk-text-emphasis" type="password" name="old_password">
                                </div>
                            </div>
                            <!-- New Password -->
                            <div class="uk-margin">
                                <label class="uk-form-label" for="as-form-password">New password</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input uk-text-emphasis" type="password" name="password">
                                </div>
                            </div>
                            <!-- Confirm New Password -->
                            <div class="uk-margin">
                                <label class="uk-form-label" for="as-form-password-confirm">Confirm new password</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input uk-text-emphasis" type="password" name="password_confirmation">
                                </div>
                            </div>
                            <!-- Save Changes Button -->
                            <button class="uk-button uk-button-primary uk-button-large" type="submit">Save Changes</button>
                        </form>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
                        @include('partials.notify')
>>>>>>> 1abec5b (ruutu)
=======
>>>>>>> 58591ea (new one)
=======
=======
                        @include('partials.notify')
>>>>>>> db9cd7b (ruutu)
>>>>>>> da964d8 (ruutu)
=======
=======
                        @include('partials.notify')
>>>>>>> db9cd7b (ruutu)
=======
>>>>>>> 9df20e3 (new one)
>>>>>>> d15f7a2 (new one)

                    </div>

                </div>
            </section>

            <!-- Right Form -->
            <section class="uk-width-1-2@l">
                <div id="as-settings-password" class="uk-cube-bottom-left uk-cube-figure">
                    <div class="uk-card uk-card-default uk-card-body">
                        <header class="uk-heading uk-text-center">
                            <h3 class="uk-margin-small-bottom">Change Transaction Password</h3>
                        </header>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> da964d8 (ruutu)
=======
>>>>>>> d15f7a2 (new one)
              
=======
                        @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div>{{$error}}</div>
            @endforeach
            @endif
<<<<<<< HEAD
>>>>>>> 1abec5b (ruutu)
=======
              
>>>>>>> 58591ea (new one)
=======
>>>>>>> db9cd7b (ruutu)
<<<<<<< HEAD
>>>>>>> da964d8 (ruutu)
=======
=======
              
>>>>>>> 9df20e3 (new one)
>>>>>>> d15f7a2 (new one)
                        <form action="{{ route('user.change-trxpasswword') }}" method="post" name="editform">
                            {{ csrf_field() }}
                            <!-- Old Password -->
                            <div class="uk-margin-small-top uk-margin-bottom">
                                <label class="uk-form-label" for="as-form-old-password">Old password</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input uk-text-emphasis" type="password" name="old_password">
                                </div>
                            </div>
                            <!-- New Password -->
                            <div class="uk-margin">
                                <label class="uk-form-label" for="as-form-password">New password</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input uk-text-emphasis" type="password" name="password">
                                </div>
                            </div>
                            <!-- Confirm New Password -->
                            <div class="uk-margin">
                                <label class="uk-form-label" for="as-form-password-confirm">Confirm new password</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input uk-text-emphasis" type="password" name="password_confirmation">
                                </div>
                            </div>
                            <!-- Save Changes Button -->
                            <button class="uk-button uk-button-primary uk-button-large" type="submit">Save Changes</button>
                        </form>
                    </div>
                    @include('partials.notify')

                </div>
            </section>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 1abec5b (ruutu)
=======

>>>>>>> 58591ea (new one)
=======

=======
>>>>>>> db9cd7b (ruutu)
>>>>>>> da964d8 (ruutu)
=======

=======
>>>>>>> db9cd7b (ruutu)
=======

>>>>>>> 9df20e3 (new one)
>>>>>>> d15f7a2 (new one)
        </div>
    </div>
</main>
