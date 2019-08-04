@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Mailer Form</div>

                    <div class="card-body">

                        <form method="POST" action="/mailer">
                            @csrf


                            <!--  Form Input -->
                            <div class="form-group">
                                <label for="recipient">Email Address</label>
                                <input type="text" name="recipient" class="form-control" placeholder="Email">
                            </div>

                            <div class="form-group">
                                <label for="recipient">Message</label>
                                <textarea name="message" class="form-control" rows=5></textarea>
                            </div>

                                <!-- Submit button -->
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary">Send</button>
                                </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection