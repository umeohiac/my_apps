<!-- Modal -->
<div class="modal fade" id="assign_fee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Create Fee Schools </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <!-- modal body -->
                <section id="create_fee_school">
                    <form method='post' action="{{route('assign_fee')}}" class='create_fee_sch' enctype='multipart/form-data'>
                        @csrf()

                        <div class="form-group">
                            <label for=""> School* </label>
                            <select name="school_id" required class='form-control'>
                                @include('forms.schools')
                            </select>
                        </div>

                        <div class="form-group">
                            <label for=""> Fee Type* </label>
                            <select required name="fee_type_id" class='form-control'>
                                @include('forms.fee_types')
                            </select>
                        </div>

                        <div class="form-group">
                            <label for=""> Grade / Class/ Level* </label>
                            <input class='form-control' required placeholder='name' type="text" name='grade'>
                        </div>

                        <div class="form-group">
                            <label for=""> Amount* </label>
                            <input class='form-control' required placeholder='Amount' type="text" name='amount'>
                        </div>

                </section>

            </div>
            <!--/body-->

            <div class="modal-footer">
                <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Save</button>
            </div>

            </form>
        </div>
    </div>
</div>
<!-- /modal -->