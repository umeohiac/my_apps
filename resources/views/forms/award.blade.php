<!-- Modal -->
<div class="modal fade" id="award" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Awards </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <!-- modal body -->
                <section id="award">
                    <form method='post' action="{{route('assign_awards')}}" class='award_form' enctype='multipart/form-data'>
                        @csrf()
                        <div class="form-group">
                            <label for=""> Schools </label>
                            <select class='form-control' name="school_id" required>
                                @include('forms.schools')
                            </select>
                        </div>

                        <div class="form-group">
                            <label for=""> Number of Awards </label>
                            <input required class='form-control' placeholder='Total' type="text" name='total'>
                        </div>

                        <div class="form-group">
                            <label for=""> Awarded By</label>
                            <input required class='form-control' placeholder='Awarded By' type="text" name='awarded_by'>
                        </div>

                        <div class="form-group">
                            <label for=""> Description </label>
                            <textarea class='form-control' placeholder='Award Notes' name='description'></textarea>
                        </div>

                </section>

            </div>
            <!--/body-->

            <div class="modal-footer">
                <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Save </button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- /modal -->