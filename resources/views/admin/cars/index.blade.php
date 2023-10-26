@extends('admin.layouts.master')
@section('content')
    <div id="real">
        <!-- start content here -->
        <div class="wrap">
            <section class="app-content" id="contact">
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
                                                    <h5 class="media-heading title-color">John Doe</h5>
                                                    <small class="media-meta">Web Developer</small>
                                                    <div class="contact-links m-t-sm">
                                                        <a href="javascript:void(0)" class="icon icon-circle icon-sm m-b-0" data-toggle="tooltip" title="Phone" data-placement="top"><i class="fa fa-phone"></i></a>
                                                        <a href="javascript:void(0)" class="icon icon-circle icon-sm m-b-0" data-toggle="tooltip" title="Mobile" data-placement="top"><i class="fa fa-mobile"></i></a>
                                                        <a href="mailto:example@rathemes.com" class="icon icon-circle icon-sm m-b-0" data-toggle="tooltip" title="example@rathemes.com" data-placement="top"><i class="fa fa-envelope-o"></i></a>
                                                        <a href="javascript:void(0)" class="icon icon-circle icon-sm m-b-0" data-toggle="tooltip" title="rathemes" data-placement="top"><i class="fab fa-skype"></i></a>
                                                        <a href="https://facebook.com/rathemes" class="icon icon-circle icon-sm m-b-0" data-toggle="tooltip" title="Facebook" data-placement="top"><i class="fab fa-facebook"></i></a>
                                                        <a href="https://twitter.com/rathemes" class="icon icon-circle icon-sm m-b-0" data-toggle="tooltip" title="Twitter" data-placement="top"><i class="fab fa-twitter"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="contact-item-actions">
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
                        <h4 class="modal-title">Create / update contact</h4>
                    </div>
                    <form action="#" id="newContactForm">
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" id="contactName" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="text" id="contactImgUrl" class="form-control" placeholder="Image URL">
                            </div>
                            <div class="form-group">
                                <input type="text" id="contactOccupation" class="form-control" placeholder="Occupation">
                            </div>
                            <div class="form-group">
                                <input type="email" id="contactEmail" class="form-control" placeholder="Email">
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
