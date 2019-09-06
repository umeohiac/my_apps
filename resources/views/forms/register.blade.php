<!-- Modal -->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Sign Up </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <!-- modal body -->
                <section id="login">
                    <form method='post' action="{{route('register')}}" class='register' enctype='multipart/form-data'>
                        @csrf()

                        <div class="form-group">
                            <label for="">Name* </label>
                            <input class='form-control' required placeholder='Name' type="text" name='name'>
                        </div>

                        <div class="form-group">
                            <label for="">Email* </label>
                            <input class='form-control' required placeholder='Email' type="email" name='email'>
                        </div>

                        <div class="form-group">
                            <label for="">Phone* </label>
                            <input class='form-control' required placeholder='Phone' type="tel" name='phone'>
                        </div>

                        <div class="form-group">
                            <label for=""> Password* </label>
                            <input class='form-control' required placeholder='Password' type="password" name='password'>
                        </div>

                        <div class="form-group">
                            <label for=""> Confirm Password* </label>
                            <input class='form-control' required placeholder='Confirm Password' type="password" name='password_confirmation'>
                        </div>

                </section>

            </div>
            <!--/body-->

            <div class="modal-footer">
                <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Sign Up</button>
            </div>

            </form>
        </div>
    </div>
</div>
<!-- /modal -->