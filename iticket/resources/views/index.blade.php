@extends('layouts.apps')

@section('content')
<div class="content__inner">                 
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">ແຈ້ງປັນຫາ</h4>
                            <!-- <h6 class="card-subtitle">Select2 gives you a customizable select box with support for searching, tagging, remote data sets, infinite scrolling, and many other highly used options.</h6> -->

                            <div class="row">
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
                            
                            <div class="row">
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

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">5. ອະທິບາຍປັນຫາຫຍໍ້</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                <i class="form-group__bar"></i>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">ໃບສະເໜີ/ສັ່ງ</span>
                                        </label>
                                    </div>
                                </div>    
                                <div class="fcol-sm-6 col-md-4">
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