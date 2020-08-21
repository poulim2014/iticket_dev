@extends('layouts.apps')

@section('navigator')
    <li class="@@Homeactive"><a href="dashboard"><i class="zmdi zmdi-home"></i> Home</a></li>

    <li class="navigation__active"><a href="index"><i class="zmdi zmdi-comment-alert zmdi-hc-fw"></i> ແຈ້ງປັນຫາ</a></li>

    <li class="@@recieveactive"><a href="receiveprob"><i class="zmdi zmdi-case-download zmdi-hc-fw"></i> ຮັບປັນຫາ</a></li>

    <li class="@@widgetactive"><a href="workresult"><i class="zmdi zmdi-check-all zmdi-hc-fw"></i> ແຈ້ງສະຖານະ</a></li>

    <li class="@@commentactive"><a href="comment"><i class="zmdi zmdi-comment zmdi-hc-fw"></i> ຄຳເຫັນຂອງຜູ້ຮັບບໍລິການ</a></li>

@endsection

@section('content')
<div class="content__inner">                 
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">ແຈ້ງປັນຫາ</h2>
                            <!-- <h6 class="card-subtitle">Select2 gives you a customizable select box with support for searching, tagging, remote data sets, infinite scrolling, and many other highly used options.</h6> -->

                            <div class="row"> <!--ກະຊວງ  ກົມ-->
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label>1. ກະຊວງ/ແຂວງ</label>

                                        <select class="select2">
                                            <option>Subaru</option>
                                            <option>Mitsubishi</option>
                                            <option>Scion</option>
                                            <option>Daihatsu</option>
                                            <option>Hino</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label>2. ກົມ/ເມືອງ</label>

                                        <select class="select2" data-minimum-results-for-search="Infinity">
                                            <option>Subaru</option>
                                            <option>Mitsubishi</option>
                                            <option disabled>Scion</option>
                                            <option disabled>Daihatsu</option>
                                            <option>Hino</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row"> <!--ໜ້າວຽກ-->
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label>3. ປະເພດຂອງໜ້າວຽກ</label>

                                        <select class="select2">
                                            <option>Subaru</option>
                                            <option>Mitsubishi</option>
                                            <option>Scion</option>
                                            <option>Daihatsu</option>
                                            <option>Hino</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label>4. ໜ້າວຽກ</label>

                                        <select class="select2" data-minimum-results-for-search="Infinity">
                                            <option>Subaru</option>
                                            <option>Mitsubishi</option>
                                            <option disabled>Scion</option>
                                            <option disabled>Daihatsu</option>
                                            <option>Hino</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <label for="exampleFormControlTextarea1">5. ອະທິບາຍປັນຫາຫຍໍ້</label>
                            <div class="form-group col-md-8">
                                
                                <textarea class="form-control " id="exampleFormControlTextarea1" rows="3"></textarea>
                                <i class="form-group__bar"></i>
                            </div>

                            <div class="row">
                                <div class="col-md-2">      <!-- ໃບສັ່ງ -->
                                    <div class="form-group">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">ໃບສະເໜີ/ສັ່ງ</span>
                                        </label>
                                    </div>
                                </div>    
                                <div class="col-md-2">    <!-- ເລກທີ -->
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="ເລກທີ">
                                        <i class="form-group__bar"></i>
                                    </div>    
                                </div>
                            </div>
                            <div class="form-group">
                                <input class="btn btn-light" type="submit" value="Submit">
                            </div>
                        
                        </div>
                    </div>
</div>                    
@endsection