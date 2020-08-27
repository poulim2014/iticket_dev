@extends('layouts.apps')

@section('navigator')
    <li class="@@Homeactive"><a href="dashboard"><i class="zmdi zmdi-home"></i> Home</a></li>

    <li class="@@recieveactive"><a href="probapp"><i class="zmdi zmdi-comment-alert zmdi-hc-fw"></i> ແຈ້ງປັນຫາ</a></li>

    <li class="@@recieveactive"><a href="receiveprob"><i class="zmdi zmdi-case-download zmdi-hc-fw"></i> ຮັບປັນຫາ</a></li>

    <li class="navigation__active"><a href="workresult"><i class="zmdi zmdi-check-all zmdi-hc-fw"></i> ແຈ້ງສະຖານະ</a></li>

    <li class="@@commentactive"><a href="comment"><i class="zmdi zmdi-comment zmdi-hc-fw"></i> ຄຳເຫັນຂອງຜູ້ຮັບບໍລິການ</a></li>

@endsection
    
@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">ການອອກວຽກ</h4>
        <a href="form" class="btn btn-info"><i class="zmdi zmdi-arrow-right zmdi-hc-fw"></i> ແຈ້ງສະຖານະອອກວຽກ</a>
        <div class="table-responsive">
            <table id="data-table" class="table">
                <thead>
                    <tr data-toggle="modal" data-target=".bd-example-modal-lg">
                        <th>ລ/ດ</th>
                        <th>ກະຊວງ/ແຂວງ</th>
                        <th>ກົມ/ເມືອງ</th>
                        <th>ປັນຫາ</th>
                        <th>ຄຳອະທິບາຍ</th>
                        <th>Salary</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-toggle="modal" data-target=".bd-example-modal-lg">
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title pull-left">ແຈ້ງສະຖານະ</h5>
            </div>
            <div class="modal-body">
                      <div class="row">
                          <div class="col-sm-2">      <!-- ສຳເລັດ -->
                              <label class="custom-control custom-radio">
                                  <input id="radio1" name="radio" type="radio" class="custom-control-input">
                                  <span class="custom-control-indicator"></span>
                                  <span class="custom-control-description">ສຳເລັດ</span>
                              </label>
                          </div>
          
                          <div class="col-sm-3">      <!-- ບໍ່ສຳເລັດ -->
                              <label class="custom-control custom-radio">
                                  <input type="radio" name="radio" class="custom-control-input">
                                  <span class="custom-control-indicator"></span>
                                  <span class="custom-control-description">ບໍ່ສຳເລັດ</span>
                              </label>
                          </div>
                      </div>
          
                      <div class="form-group">        <!-- ອະທິບາຍ -->
                          {{-- <label for="exampleFormControlTextarea1">ເຫດຜົນ</label> --}}
                          <textarea class="form-control" id="detail" rows="5" placeholder="ອະທິບາຍ"></textarea>
                          <i class="form-group__bar"></i>
                      </div>
  
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link">Save changes</button>
                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection