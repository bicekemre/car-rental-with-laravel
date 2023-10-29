@extends('admin.layouts.master')
@section('content')
    <div id="real">
        <!-- start content here -->
        <div class="wrap">
            <section class="app-content" id="contact">
                <div class="row">
                    <div class="m-b-lg">
                        <a href="#" data-toggle="modal" data-target="#contactModal" class="btn btn-primary btn-block">Add New Car</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="contacts-list" class="row">
                            @isset($cars)
                                @foreach($cars as $car)

                                    <div class="col-sm-6">
                                        <div class="card user-card contact-item p-md">
                                            <div class="media">
                                                <div class="media-left">
                                                    <div class="col-md-4 col-sm-4  ">
                                                        <img style="height: 100px" src="{{ asset($car->imageable->first()->url ?? '')  }}" alt="contact image">
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="media-heading title-color">{{ $car->brand . ' ' . $car->model}}</h5>
                                                    <div>
                                                    <small class="media-meta">Class: {{ $car->class }}</small>
                                                    </div>
                                                    <small class="media-meta">Body Style: {{ $car->type }}</small>
                                                    <div>
                                                    <small class="media-meta">Transmission: {{ $car->transmission }}</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="contact-item-actions">
                                                <a href="#" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" class="btn btn-success" data-toggle="modal" data-target="#contactModal"><i class="fa fa-edit"></i></a>
                                                <a href="javascript:void(0)" class="btn btn-danger" data-toggle="modal" data-target="#deleteItemModal"><i class="fa fa-trash"></i></a>
                                            </div><!-- .contact-item-actions -->
                                        </div><!-- card user-card -->
                                    </div><!-- END column -->
                                @endforeach
                            @endisset
                        </div><!-- #contacts-list -->
                    </div><!-- END column -->
                </div><!-- .row -->
            </section><!-- .app-content -->
        </div><!-- .wrap -->

        <!-- new contact Modal -->
        <div id="contactModal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Create Cars</h4>
                    </div>
                    <form action="{{ route('car.create') }}" method="post" id="newContactForm">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" id="brand" class="form-control" placeholder="Car Brand">
                            </div>
                            <div class="form-group">
                                <input type="text" id="model" class="form-control" placeholder="Car Model">
                            </div>
                            <div class="form-group">
                                <input type="number" id="contactImgUrl" class="form-control" placeholder="Car Year">
                            </div>
                            <div class="form-group">
                                <input type="number" id="contactOccupation" class="form-control" placeholder="Millage">
                            </div>
                            <div class="form-group">
                                <input type="number" id="contactOccupation" class="form-control" placeholder="Seats">
                            </div>
                            <div class="form-group">
                                <input type="number" id="contactOccupation" class="form-control" placeholder="Fuel Amount">
                            </div>
                            <div class="form-group">
                                <input type="number" id="contactOccupation" class="form-control" placeholder="Price Per day">
                            </div>
                            <div class="form-group">
                                <select name="type" class="form-control">
                                    <option value="">Select Type</option>
                                    <option value="SUV">SUV</option>
                                    <option value="Sedan">Sedan</option>
                                    <option value="van">Van</option>
                                    <option value="Station Wagon">Station Wagon</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select name="transmission" class="form-control">
                                    <option value="">Select Transmission</option>
                                    <option value="Manuel">Manuel</option>
                                    <option value="Auto">Auto</option>
                                    <option value="Semi-Auto">Semi-Auto</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select name="fuel_type" class="form-control">
                                    <option value="">Select Fuel Type</option>
                                    <option value="Petrol">Petrol</option>
                                    <option value="Diesel">Diesel</option>
                                    <option value="Electric">Electric</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select name="location_id" class="form-control">
                                    <option value="">Select Location</option>
                                    @isset($locations)
                                        @foreach($locations as $location)
                                            <option value="{{ $location->id }}">{{ $location->name }}</option>
                                        @endforeach
                                    @endisset
                                </select>
                            </div>
                        </div><!-- .modal-body -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-success" data-dismiss="modal">Save</button>
                        </div><!-- .modal-footer -->
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!-- new category Modal -->
        <div id="categoryModal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Create / update category</h4>
                    </div>
                    <form action="#" id="newCategoryForm">
                        <div class="modal-body">
                            <div class="form-group m-0">
                                <input type="text" id="catLabel" class="form-control" placeholder="Label">
                            </div>
                        </div><!-- .modal-body -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-success" data-dismiss="modal">Save</button>
                        </div><!-- .modal-footer -->
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!-- delete item Modal -->
        <div id="deleteItemModal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Delete item</h4>
                    </div>
                    <div class="modal-body">
                        <h5>Do you really want to delete this item ?</h5>
                    </div><!-- .modal-body -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Delete</button>
                    </div><!-- .modal-footer -->
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- end content -->
    </div>
@endsection
