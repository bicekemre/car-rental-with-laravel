@extends('admin.layouts.master')
@section('content')
<div class="real">
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
                                            <div class="avatar col-md-4 col-sm-4 avatar-xl avatar-circle">
{{--                                                <img src="{{ asset($car->imageable->first()->url ?? '')  }}" alt="contact image">--}}
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
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
