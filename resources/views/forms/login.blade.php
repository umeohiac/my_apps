<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Sign In </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <!-- modal body -->
                <section id="login">
                    <form method='post' action="{{route('login_user')}}" class='login' enctype='multipart/form-data'>
                        @csrf()

                        <div class="form-group">
                            <label for="">Email* </label>
                            <input class='form-control' required placeholder='Email' type="email" name='email'>
                        </div>

                        <div class="form-group">
                            <label for=""> Password* </label>
                            <input class='form-control' required placeholder='Password' type="password" name='password'>
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-radio custom-control-inline">
                             <input name="remember_me" id="remember_me" type="radio" class="custom-control-input">
                              <label for="remember_me" class="custom-control-label"> Remember me</label>
                            </div>
                        </div>

                </section>

            </div>
            <!--/body-->

            <div class="modal-footer">
                <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Sign in</button>
            </div>

            </form>
        </div>
    </div>
</div>
<!-- /modal -->