@extends('layouts.app')

@section('content')
    <div class="container py-3">
        <!-- Contact Form -->
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="mb-3">Lost Pet Report Form</h5>

                <div class="contact-form">
                    <form action="#">
                        <div class="form-group mb-3">
                            <input class="form-control" type="text" placeholder="Pet Name" name="petName" required>
                        </div>

                        <div class="form-group mb-3">
                            <select class="form-control" id="petType" name="petType">
                                <option value="dog">Dog</option>
                                <option value="cat">Cat</option>
                                <option value="bird">Bird</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <input class="form-control" type="text" placeholder="Breed" name="breed">
                        </div>

                        <div class="form-group mb-3">
                            <input class="form-control" type="text" placeholder="Color and Distinguishing Marks" name="colorAndMarks" required>
                        </div>

                        <div class="form-group mb-3">
                            <input class="form-control" type="date" name="lossDate" required>
                        </div>

                        <div class="form-group mb-3">
                            <input class="form-control" type="text" placeholder="Last Seen Location" name="lastSeen" required>
                        </div>

                        <div class="form-group mb-3">
                            <input class="form-control" type="file" name="petImage">
                        </div>

                        <div class="form-group mb-3">
                            <input class="form-control" type="text" placeholder="Owner's Full Name" name="ownerName" required>
                        </div>

                        <div class="form-group mb-3">
                            <input class="form-control" type="text" placeholder="Owner's Phone Number" name="ownerPhone" required>
                        </div>

                        <div class="form-group mb-3">
                            <input class="form-control" type="email" placeholder="Owner's Email" name="ownerEmail" required>
                        </div>

                        <div class="form-group mb-3">
                            <textarea class="form-control" name="details" cols="30" rows="10" placeholder="Detailed Description of Loss Circumstances"></textarea>
                        </div>



                        <button class="btn btn-primary w-100">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

