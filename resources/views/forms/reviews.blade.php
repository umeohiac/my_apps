<!-- Modal -->
<div class="modal fade" id="review" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Reviews </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <!-- modal body -->
                <section id="reviews">
                    <form method='post' action="{{route('user_review')}}" class='reviews_form' enctype='multipart/form-data'>
                        @csrf()
                        <input type="hidden" value='{{auth()->id()}}' name='user_id'>

                        <div class="form-group">
                            <label for=""> Schools </label>
                            <select name="school_id" class='form-control' required>
                                @include('forms.schools')
                            </select>
                        </div>

                        <div class="form-group">
                            <label for=""> Rate School: </label>
                            @include('forms.ratings')
                        </div>

                        <div class="form-group">
                            <label for=""> Leave a Comment</label>
                            <textarea class='form-control' name='comment' placeholder="Leave a Comment"></textarea>
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