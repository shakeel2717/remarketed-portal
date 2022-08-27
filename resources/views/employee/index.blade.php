@extends("layouts.app")
@section("content")
<div class="tab-part">
    <div class="about-center section-center">
        <div class="about">
            <div class="boardview-part">
                <h2>All Employee List</h2>
                <br>
                <button href="#" class="btn-theme" data-bs-toggle="modal" data-bs-target="#addEmployee">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    Add Employee
                </button>
                <br>
                <br>
                <livewire:all-employee />
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addEmployee" tabindex="-1" aria-labelledby="addEmployee" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">
                <div class="my-3">
                    <h2 class="title text-center">Add new Employee</h2>
                    <hr>
                    <form action="{{ route('employee.store') }}" method="POST">
                        @csrf
                        <div class="form-group mt-2">
                            <label for="name">Full Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Full Name" required>
                        </div>
                        <div class="form-group mt-2">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                        </div>
                        <div class="form-group mt-2">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                        </div>
                        <br>
                        <div class="form-group d-flex justify-content-between">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Add Employee</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection