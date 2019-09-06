<!-- Modal -->
<div class="modal fade" id="curriculums" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> New Curriculum </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <!-- modal body -->
                <section id="new_curriculum">
                    <form method='post' action="{{route('curriculum')}}" enctype='multipart/form-data'>
                        @csrf()

                        <div class="form-group">
                            <label for=""> Name </label>
                            <input class='form-control' required placeholder='Enter Curriculum' type="text" name='name'>
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