@extends('layouts.apps')

@section('navigator')
    <li class="@@Homeactive"><a href="dashboard"><i class="zmdi zmdi-home"></i> Home</a></li>

    <li class="@@recieveactive"><a href="index"><i class="zmdi zmdi-comment-alert zmdi-hc-fw"></i> ແຈ້ງປັນຫາ</a></li>

    <li class="navigation__active"><a href="receiveprob"><i class="zmdi zmdi-case-download zmdi-hc-fw"></i> ຮັບປັນຫາ</a></li>

    <li class="@@widgetactive"><a href="workresult"><i class="zmdi zmdi-check-all zmdi-hc-fw"></i> ແຈ້ງສະຖານະ</a></li>

    <li class="@@commentactive"><a href="comment"><i class="zmdi zmdi-comment zmdi-hc-fw"></i> ຄຳເຫັນຂອງຜູ້ຮັບບໍລິການ</a></li>

@endsection

@section('content')

@section('content')
<div class="content__inner">
                
    <div class="card">      <!-- ເງື່ອນໄຂອອກວຽກ -->
        <div class="card-body">
            <h2 class="card-title">ເງື່ອນໄຂການອອກວຽກ</h2>
            
            <div class="row"> <!--ກະຊວງ  ກົມ-->
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
            
            <div class="row"> <!--ໜ້າວຽກ-->
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
    </div>            

    <div class="card">      <!-- ລາຍລະອຽດທີມງານ -->
        <div class="card-body">
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
            
            <div class="col-sm-3">             <!-- Submit -->
                <div class="form-group">
                    <br>
                    <input class="btn btn-light" type="submit" value="Submit">
                </div>
            </div>
        </div>
    </div> 
</div>
@endsection

@endsection