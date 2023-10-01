@extends('layouts.admin')

<!-- index body start -->
@section('content')

<div class="page-body">
    <!-- New Product Add Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>Create Role</h5>
                                </div>

                                <form class="theme-form theme-form-2 mega-form">
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Name <span class="theme-color">*</span></label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" placeholder="Author Name" />
                                        </div>
                                    </div>
                                </form>
                                <div class="mb-3">
                                    <h4 class="form-label-title">Permissions</h4>
                                </div>

                                <form class="theme-form theme-form-2 mega-form">
                                    <div class="row g-sm-4 g-2">
                                        <div class="col-xl-6">
                                            <div class="row roles-form">
                                                <div class="col-12">
                                                    <ul>
                                                        <li>Roles :</li>
                                                        <li>
                                                            <input class="checkbox_animated checkall" type="checkbox" value="" id="role1" />
                                                            <label class="form-check-label m-0" for="role1">All</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it" type="checkbox" id="role2" value="" />
                                                            <label class="form-check-label m-0" for="role2">Index</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it" type="checkbox" id="role3" value="" />
                                                            <label class="form-check-label m-0" for="role3">Create</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it" type="checkbox" id="role4" value="" />
                                                            <label class="form-check-label m-0" for="role4">Edit</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it" type="checkbox" id="role5" value="" />
                                                            <label class="form-check-label m-0" for="role5">Destroy</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <ul>
                                                        <li>Users :</li>
                                                        <li>
                                                            <input class="checkbox_animated checkall1" type="checkbox" value="" id="role01" />
                                                            <label class="form-check-label m-0" for="role01">All</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it1" type="checkbox" id="role02" value="" />
                                                            <label class="form-check-label m-0" for="role02">Index</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it1" type="checkbox" id="role03" value="" />
                                                            <label class="form-check-label m-0" for="role03">Create</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it1" type="checkbox" id="role04" value="" />
                                                            <label class="form-check-label m-0" for="role04">Edit</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it1" type="checkbox" id="role05" value="" />
                                                            <label class="form-check-label m-0" for="role05">Destroy</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <ul>
                                                        <li>Product :</li>
                                                        <li>
                                                            <input class="checkbox_animated checkall2" type="checkbox" value="" id="role6" />
                                                            <label class="form-check-label m-0" for="role6">All</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it2" type="checkbox" id="role7" value="" />
                                                            <label class="form-check-label m-0" for="role7">Index</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it2" type="checkbox" id="role8" value="" />
                                                            <label class="form-check-label m-0" for="role8">Create</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it2" type="checkbox" id="role9" value="" />
                                                            <label class="form-check-label m-0" for="role9">Edit</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it2" type="checkbox" id="role10" value="" />
                                                            <label class="form-check-label m-0" for="role10">Destroy</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <ul>
                                                        <li>Category :</li>
                                                        <li>
                                                            <input class="checkbox_animated checkall3" type="checkbox" value="" id="role06" />
                                                            <label class="form-check-label m-0" for="role06">All</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it3" type="checkbox" id="role07" value="" />
                                                            <label class="form-check-label m-0" for="role07">Index</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it3" type="checkbox" id="role08" value="" />
                                                            <label class="form-check-label m-0" for="role08">Create</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it3" type="checkbox" id="role09" value="" />
                                                            <label class="form-check-label m-0" for="role09">Edit</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it3" type="checkbox" id="role010" value="" />
                                                            <label class="form-check-label m-0" for="role010">Destroy</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <ul>
                                                        <li>Attributes :</li>
                                                        <li>
                                                            <input class="checkbox_animated checkall4" type="checkbox" value="" id="r1" />
                                                            <label class="form-check-label m-0" for="r1">All</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it4" type="checkbox" id="r2" value="" />
                                                            <label class="form-check-label m-0" for="r2">Index</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it4" type="checkbox" id="r3" value="" />
                                                            <label class="form-check-label m-0" for="r3">Create</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it4" type="checkbox" id="r4" value="" />
                                                            <label class="form-check-label m-0" for="r4">Edit</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it4" type="checkbox" id="r5" value="" />
                                                            <label class="form-check-label m-0" for="r5">Destroy</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <ul>
                                                        <li>Order :</li>
                                                        <li>
                                                            <input class="checkbox_animated checkall5" type="checkbox" value="" id="r6" />
                                                            <label class="form-check-label m-0" for="r6">All</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it5" type="checkbox" id="r7" value="" />
                                                            <label class="form-check-label m-0" for="r7">Index</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it5" type="checkbox" id="r8" value="" />
                                                            <label class="form-check-label m-0" for="r8">Create</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it5" type="checkbox" id="r9" value="" />
                                                            <label class="form-check-label m-0" for="r9">Edit</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it5" type="checkbox" id="r10" value="" />
                                                            <label class="form-check-label m-0" for="r10">Destroy</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class="row roles-form">
                                                <div class="col-12">
                                                    <ul>
                                                        <li>Localization :</li>
                                                        <li>
                                                            <input class="checkbox_animated checkall6" type="checkbox" value="" id="rl1" />
                                                            <label class="form-check-label m-0" for="rl1">All</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it6" type="checkbox" id="rl2" value="" />
                                                            <label class="form-check-label m-0" for="rl2">Index</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it6" type="checkbox" id="rl3" value="" />
                                                            <label class="form-check-label m-0" for="rl3">Create</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it6" type="checkbox" id="rl4" value="" />
                                                            <label class="form-check-label m-0" for="rl4">Edit</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it6" type="checkbox" id="rl5" value="" />
                                                            <label class="form-check-label m-0" for="rl5">Destroy</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <ul>
                                                        <li>Coupons :</li>
                                                        <li>
                                                            <input class="checkbox_animated checkall7" type="checkbox" value="" id="rl6" />
                                                            <label class="form-check-label m-0" for="rl6">All</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it7" type="checkbox" id="rl7" value="" />
                                                            <label class="form-check-label m-0" for="rl7">Index</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it7" type="checkbox" id="rl8" value="" />
                                                            <label class="form-check-label m-0" for="rl8">Create</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it7" type="checkbox" id="rl9" value="" />
                                                            <label class="form-check-label m-0" for="rl9">Edit</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it7" type="checkbox" id="rl10" value="" />
                                                            <label class="form-check-label m-0" for="rl10">Destroy</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <ul>
                                                        <li>Tax :</li>
                                                        <li>
                                                            <input class="checkbox_animated checkall8" type="checkbox" value="" id="r-1" />
                                                            <label class="form-check-label m-0" for="r-1">All</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it8" type="checkbox" id="r-2" value="" />
                                                            <label class="form-check-label m-0" for="r-2">Index</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it8" type="checkbox" id="r-3" value="" />
                                                            <label class="form-check-label m-0" for="r-3">Create</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it8" type="checkbox" id="r-4" value="" />
                                                            <label class="form-check-label m-0" for="r-4">Edit</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it8" type="checkbox" id="r-5" value="" />
                                                            <label class="form-check-label m-0" for="r-5">Destroy</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <ul>
                                                        <li>Product Review :</li>
                                                        <li>
                                                            <input class="checkbox_animated checkall9" type="checkbox" value="" id="r-6" />
                                                            <label class="form-check-label m-0" for="r-6">All</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it9" type="checkbox" id="r-7" value="" />
                                                            <label class="form-check-label m-0" for="r-7">Index</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it9" type="checkbox" id="r-8" value="" />
                                                            <label class="form-check-label m-0" for="r-8">Create</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it9" type="checkbox" id="r-9" value="" />
                                                            <label class="form-check-label m-0" for="r-9">Edit</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it9" type="checkbox" id="r-10" value="" />
                                                            <label class="form-check-label m-0" for="r-10">Destroy</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <ul>
                                                        <li>Support Ticket :</li>
                                                        <li>
                                                            <input class="checkbox_animated checkall10" type="checkbox" value="" id="a1" />
                                                            <label class="form-check-label m-0" for="a1">All</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it10" type="checkbox" id="a2" value="" />
                                                            <label class="form-check-label m-0" for="a2">Index</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it10" type="checkbox" id="a3" value="" />
                                                            <label class="form-check-label m-0" for="a3">Create</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it10" type="checkbox" id="a4" value="" />
                                                            <label class="form-check-label m-0" for="a4">Edit</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it10" type="checkbox" id="a5" value="" />
                                                            <label class="form-check-label m-0" for="a5">Destroy</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <ul>
                                                        <li>Reports :</li>
                                                        <li>
                                                            <input class="checkbox_animated checkall11" type="checkbox" value="" id="a6" />
                                                            <label class="form-check-label m-0" for="a6">All</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it11" type="checkbox" id="a7" value="" />
                                                            <label class="form-check-label m-0" for="a7">Index</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it11" type="checkbox" id="a8" value="" />
                                                            <label class="form-check-label m-0" for="a8">Create</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it11" type="checkbox" id="a9" value="" />
                                                            <label class="form-check-label m-0" for="a9">Edit</label>
                                                        </li>
                                                        <li>
                                                            <input class="checkbox_animated check-it11" type="checkbox" id="a10" value="" />
                                                            <label class="form-check-label m-0" for="a10">Destroy</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="btn btn-primary ms-auto mt-4">Save</button>
                                </form>
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
                    <p class="mb-0">
                        Copyright 2022 © Fastkart theme by pixelstrap
                    </p>
                </div>
            </div>
        </footer>
    </div>
    <!-- footer En -->
</div>
<!-- Container-fluid End -->
@endsection