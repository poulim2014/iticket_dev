@extends('layouts.apps')

@section('navigator')
    <li class="@@Homeactive"><a href="dashboard"><i class="zmdi zmdi-home"></i> Home</a></li>

    <li class="@@recieveactive"><a href="probapp"><i class="zmdi zmdi-comment-alert zmdi-hc-fw"></i> ແຈ້ງປັນຫາ</a></li>

    <li class="navigation__active"><a href="receiveprob"><i class="zmdi zmdi-case-download zmdi-hc-fw"></i> ຮັບປັນຫາ</a></li>

    <li class="@@widgetactive"><a href="workresult"><i class="zmdi zmdi-check-all zmdi-hc-fw"></i> ແຈ້ງສະຖານະ</a></li>

    <li class="@@commentactive"><a href="comment"><i class="zmdi zmdi-comment zmdi-hc-fw"></i> ຄຳເຫັນຂອງຜູ້ຮັບບໍລິການ</a></li>

@endsection
    
@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">ການແຈ້ງປັນຫາ</h4>
        <button type="button" class="btn btn-info" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="zmdi zmdi-arrow-right zmdi-hc-fw"></i> ຮັບປັນຫາ</button>
        <div class="table-responsive">
            <table id="data-table" class="table">
                <thead>
                    <tr>
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
                        <td >Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                    <tr data-toggle="modal" data-target=".bd-example-modal-lg">
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                        <td>$170,750</td>
                    </tr>
                            
                </tbody>
            </table>
        </div>
 
    </div>
</div>

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title pull-left">ລາຍລະອຽດທີມ</h5>
          </div>
          <div class="modal-body">
              
              {{-- <div class="row"> <!--ກະຊວງ  ກົມ-->
                  <div class="col-sm-6">
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
  
                  <div class="col-sm-6">
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
              </div> --}}
              
              {{-- <div class="row"> <!--ໜ້າວຽກ-->
                  <div class="col-sm-6 ">
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
  
                  <div class="col-sm-6 ">
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
              </div> --}}

              <div class="row"><!-- ພະແນກຮັບຜິດຊອບ -->
                  <div class="col-sm-6">
                      <div class="form-group">
                          <label>5. ເລືອກພະແນກຮັບຜິດຊອບ</label>
      
                          <select class="select2">
                                  <option>Subaru</option>
                                  <option>Mitsubishi</option>
                                  <option>Scion</option>
                                  <option>Daihatsu</option>
                                  <option>Hino</option>
                          </select>
                      </div>
                  </div>
              </div>

              <div class="row">     <!-- ເລືອກທີມງານອອກວຽກ -->
                  <div class="col-sm-6">
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
<br> 
              <div class="row">      <!-- ໃຊ້ຍານພາຫະນະ -->
                  <div class="col-sm-6">              
                      <div class="form-group">
                          <h3 class="card-body__title">7. ໃຊ້ຍານພາຫະນະ</h3>
                          <div class="toggle-switch">
                              <input type="checkbox" class="toggle-switch__checkbox">
                              <i class="toggle-switch__helper"></i>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="row">   <!-- ເລືອກ ວັນທີ / ເວລາ -->
                  <div class="col-sm-12">             
                      <div class="row">   
                          <div class="col-sm-6">
                              <label>8. ວັນທີ່ອອກ</label>
      
                              <div class="input-group">
                                  <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
                                  <div class="form-group">
                                      <input type="text" class="form-control date-picker" placeholder="ເລືອກວັນທີ">
                                      <i class="form-group__bar"></i>
                                  </div>
                              </div>
                          </div>
      
                          <div class="col-sm-6">
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
          <div class="modal-footer">
              <button type="button" class="btn btn-link">Save changes</button>
              <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
          </div>
      </div>
  </div>

@endsection