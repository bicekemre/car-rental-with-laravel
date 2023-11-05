@extends('admin.layouts.master')
@section('content')
    <div id="real">
        <!-- start content here -->
        <div id="forms">
            <div class="wrap card">
                <section class="app-content">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Create / Edit Car</h3>
                        </div>
                        <div class="col-lg-12">
                            <form action="#" class="form-horizontal">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="brand">Brand</label>
                                        <input type="text" id="brand" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="model">Model</label>
                                        <input type="text" id="model" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="mil">Millage</label>
                                        <input type="number" id="mil" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="seats">Seats</label>
                                        <input type="number" id="seats" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="fuel_amount">Fuel Amount</label>
                                        <input type="number" id="fuel_amount" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="year">Year</label>
                                        <input type="number" id="year" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="price_perday">Price Per Day</label>
                                        <input type="number" id="price_perday" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="fuel_type">Fuel Type</label>
                                        <div id="fuel_type">
                                            <select name="fuel_type" class="form-control">
                                                <option value="Petrol">Petrol</option>
                                                <option value="Diesel">Diesel</option>
                                                <option value="Electric">Electric</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label  for="location_id">Select Location</label>
                                        <div id="location_id">
                                            <select class="form-control">
                                                <option value="">Select Location</option>
                                                @isset($locations)
                                                    @foreach($locations as $location)
                                                        <option value="{{ $location->id }}">{{ $location->name }}</option>
                                                    @endforeach
                                                @endisset
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="type">Car Type</label>
                                        <div id="type">
                                            <select name="type" class="form-control">
                                                <option value="">Select Type</option>
                                                <option value="SUV">SUV</option>
                                                <option value="Sedan">Sedan</option>
                                                <option value="Van">Van</option>
                                                <option value="Van">Station Wagon</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="class">Car Class</label>
                                        <div id="class">
                                            <select name="class" class="form-control">
                                                <option value="">Select Class</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <h3>English Section</h3>
                                </div>
                                    <div class="form-group">
                                    <label for="desc">Description</label>
                                    <div class="col-lg-12">
                                        <textarea name="desc" id="desc" class="form-control" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- END row -->
                </section><!-- #dash-content -->
            </div><!-- .wrap -->
        </div>
        <!-- end content -->
    </div>
@endsection
