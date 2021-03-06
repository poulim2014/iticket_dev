@extends('layouts.apps')

@section('navigator')
    <li class="@@Homeactive"><a href="dashboard"><i class="zmdi zmdi-home"></i> Home</a></li>

    <li class="@@recieveactive"><a href="index"><i class="zmdi zmdi-comment-alert zmdi-hc-fw"></i> ແຈ້ງປັນຫາ</a></li>

    <li class="@@recieveactive"><a href="receiveprob"><i class="zmdi zmdi-case-download zmdi-hc-fw"></i> ຮັບປັນຫາ</a></li>

    <li class="commentactive"><a href="workresult"><i class="zmdi zmdi-check-all zmdi-hc-fw"></i> ແຈ້ງສະຖານະ</a></li>

    <li class="navigation__active"><a href="comment"><i class="zmdi zmdi-comment zmdi-hc-fw"></i> ຄຳເຫັນຂອງຜູ້ຮັບບໍລິການ</a></li>

@endsection
    
@section('content')

<div class="content__inner">                 
    <div class="card">      <!-- ເງື່ອນໄຂອອກວຽກ -->
        <div class="card-body">
            <h2 class="card-title">ເງື່ອນໄຂການອອກວຽກ</h2>
            <div class="col-sm-12">     <!--ກະຊວງ  ກົມ-->
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                            <label>1. ກະຊວງ/ແຂວງ</label>
    
                            <select class="select2 select2-hidden-accessible" disabled="">
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
    
                            <select class="select2 select2-hidden-accessible" disabled="">
                                <option>Subaru</option>
                                <option>Mitsubishi</option>
                                <option disabled>Scion</option>
                                <option disabled>Daihatsu</option>
                                <option>Hino</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-12">     <!--ໜ້າວຽກ-->
                <div class="row"> 
                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                            <label>3. ປະເພດຂອງໜ້າວຽກ</label>
    
                            <select class="select2 select2-hidden-accessible" disabled="">
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
    
                            <select class="select2 select2-hidden-accessible" disabled="">
                                <option>Subaru</option>
                                <option>Mitsubishi</option>
                                <option disabled>Scion</option>
                                <option disabled>Daihatsu</option>
                                <option>Hino</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="card-title">ລາຍລະອຽດທີມ</h2>

            <div class="col-sm-6 col-md-4">     <!-- ພະແນກຮັບຜິດຊອບ -->
                <div class="form-group">
                    <label>5. ພະແນກຮັບຜິດຊອບ</label>

                    <select class="select2">
                        <option>ພະແນກ ພັດທະນາ ແລະ ຝຶກອົບຮົມ</option>
                        <option>Mitsubishi</option>
                        <option>Scion</option>
                        <option>Daihatsu</option>
                        <option>Hino</option>
                    </select>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">     <!-- ເລືອກທີມງານອອກວຽກ -->
                <div class="form-group">
                    <label>6. ເລືອກທີມງານອອກວຽກ</label>

                    <select class="select2" multiple>
                            <option>Subaru</option>
                            <option>Mitsubishi</option>
                            <option>Scion</option>
                            <option>Daihatsu</option>
                            <option>Hino</option>
                        </select>
                </div>
            </div>

            <div class="col-sm-6">              <!-- ໃຊ້ຍານພາຫະນະ -->
                <div class="form-group">
                    <h3 class="card-body__title">7. ໃຊ້ຍານພາຫະນະ</h3>
                    <div class="toggle-switch">
                        <input type="checkbox" class="toggle-switch__checkbox">
                        <i class="toggle-switch__helper"></i>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">             <!-- ເລືອກ ວັນທີ / ເວລາ -->
                <div class="row">   
                    <div class="col-sm-4">
                        <label>8. ວັນທີ່ອອກ</label>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
                            <div class="form-group">
                                <input type="text" class="form-control date-picker" placeholder="ເລືອກວັນທີ">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <label>9. ເວລາ</label>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
                            <div class="form-group">
                                <input type="text" class="form-control time-picker" placeholder="ເລືອກເວລາ">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <div class="card">      <!-- ແຈ້ງສະຖານະ -->
        <div class="card-body">

            <h2 class="card-title">ແຈ້ງສະຖານະ</h2>
            <div class="row">
                <div class="col-sm-1">      <!-- ສຳເລັດ -->
                    <label class="custom-control custom-radio">
                        <input id="radio1" name="radio" type="radio" class="custom-control-input">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">ສຳເລັດ</span>
                    </label>
                </div>
    
                <div class="clearfix mb-2"></div>

                <div class="col-sm-2">      <!-- ບໍ່ສຳເລັດ -->
                    <label class="custom-control custom-radio">
                        <input type="radio" name="radio" class="custom-control-input">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">ບໍ່ສຳເລັດ</span>
                    </label>
                </div>
            </div>

            <div class="form-group col-6">        <!-- ອະທິບາຍ -->
                {{-- <label for="exampleFormControlTextarea1">ເຫດຜົນ</label> --}}
                <textarea class="form-control" id="detail" rows="3" placeholder=" ອະທິບາຍ"></textarea>
                <i class="form-group__bar"></i>
            </div>

        </div>
    </div>

    <div class="card">      <!-- ຄຳເຫັນ -->
        <div class="card-body">

            <h2 class="card-title">ຄຳເຫັນຂອງຜູ້ຮັບບໍລິການ</h2>
            
            <div class="form-group col-6">        <!-- ຄຳເຫັນ -->
                {{-- <label for="exampleFormControlTextarea1">ເຫດຜົນ</label> --}}
                <textarea class="form-control" id="comment" rows="3" placeholder=" ຄຳເຫັນ"></textarea>
                <i class="form-group__bar"></i>
            </div>

            <div class="form-group"> <!-- Submit -->
                <br>
                <input class="btn btn-light" type="submit" value="Submit">
            </div>
        </div>
    </div>
</div>

@endsection