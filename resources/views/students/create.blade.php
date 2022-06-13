<div class="modal fade bg-gradient" id="Create-student" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-light">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><h3 class="fw-bolder fs-5 text-uppercase">New
                        Student</h3></h5>
                <button type="button" class="btn-close text-bg-primary rounded-circle" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <form action="{{route('students.store')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="name">Name</label>
                                <input type="text" class="form-control mt-1" name="name" id="name">
                            </div>
                            <div class="col-md-6">
                                <label for="age">Age</label>
                                <input type="text" class="form-control mt-1" name="age" id="age">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control mt-1" name="subject" id="subject">
                    </div>

                    <div class="mb-3">
                        <label for="email" >Email</label>
                        <input type="text" class="form-control mt-1" name="email" id="email">
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary btn-sm px-3">Save</button>
            </div>
        </div>
    </div>
</div>
