<!-- Modal -->
<div class="modal fade" id="uniforms" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <!-- modal body -->
                <section id="sch_uniforms">
                    <form method='post' action="{{route('school_uniform')}}" class='sch_uniform_form' enctype='multipart/form-data'>
                        @csrf()
                        <div class="form-group">
                            <label for=""> Schools*</label>
                            <select class='form-control' name="school_id" required>
                                @include('forms.schools')
                            </select>
                        </div>

                        <div class="form-group">
                            <label for=""> Uniform Photo </label>
                            <input class='form-control' type="file" name='photo'>
                        </div>

                        <div class="form-group">
                            <label for=""> Color* </label>
                            <input required class='form-control' placeholder='color' type="text" name='color'>
                        </div>

                        <div class="form-group">
                            <label for=""> Description </label>
                            <textarea class='form-control' placeholder='Additional Notes' name='description'></textarea>
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