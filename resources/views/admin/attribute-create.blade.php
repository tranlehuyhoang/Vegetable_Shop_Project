@extends('layouts.admin')

<!-- index body start -->
@section('content')

<div class="page-body">

    <!-- New Product Add Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-xxl-8 col-lg-10 m-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>Add Attribute</h5>
                                </div>

                                <form class="theme-form theme-form-2 mega-form">
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Attribute
                                            Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" placeholder="Attribute Name">
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-start">
                                        <label class="col-sm-3 col-form-label form-label-title">Attribute
                                            Value</label>
                                        <div class="col-sm-9">
                                            <div class="row g-sm-4 g-3">
                                                <div class="col-sm-10 col-9">
                                                    <input class="form-control" type="text" placeholder="Attribute Value">
                                                </div>

                                                <div class="col-sm-2 col-3">
                                                    <button class="btn text-danger h-100 w-100">Remove</button>
                                                </div>

                                                <div class="col-xxl-4">
                                                    <button class="btn text-white theme-bg-color">Add
                                                        Value</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <button class="btn ms-auto theme-bg-color text-white">Add Attribute</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- New Product Add End -->

    <!-- footer Start -->
    <div class="container-fluid">
        <footer class="footer">
            <div class="row">
                <div class="col-md-12 footer-copyright text-center">
                    <p class="mb-0">Copyright 2022 © Fastkart theme by pixelstrap</p>
                </div>
            </div>
        </footer>
    </div>
    <!-- footer End -->
</div>
<!-- Container-fluid End -->
@endsection