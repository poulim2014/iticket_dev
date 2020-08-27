@extends('layouts.apps')

@section('navigator')
    <li class="@@Homeactive"><a href="dashboard"><i class="zmdi zmdi-home"></i> Home</a></li>

    <li class="@@recieveactive"><a href="probapp"><i class="zmdi zmdi-comment-alert zmdi-hc-fw"></i> ແຈ້ງປັນຫາ</a></li>

    <li class="@@recieveactive"><a href="receiveprob"><i class="zmdi zmdi-case-download zmdi-hc-fw"></i> ຮັບປັນຫາ</a></li>

    <li class="@@navigation__active"><a href="workresult"><i class="zmdi zmdi-check-all zmdi-hc-fw"></i> ແຈ້ງສະຖານະ</a></li>

    <li class="navigation__active"><a href="#"><i class="zmdi zmdi-comment zmdi-hc-fw"></i> ຄຳເຫັນຂອງຜູ້ຮັບບໍລິການ</a></li>

@endsection
    
@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">ຄຳເປັນຂອງຜູ້ຮັບບໍລິການ</h4>
        <a href="cmform" class="btn btn-info"><i class="zmdi zmdi-arrow-right zmdi-hc-fw"></i> ຄຳເຫັນ</a>
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
                        <td>Tiger Nixon</td>
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
                    <tr data-toggle="modal" data-target=".bd-example-modal-lg">
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009/01/12</td>
                        <td>$86,000</td>
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
                {{-- <div class="form-group">        <!-- ຄຳເຫັນ --> --}}
                    {{-- <label for="exampleFormControlTextarea1">ເຫດຜົນ</label> --}}
                    <textarea class="form-control" id="comment" rows="6" placeholder=" ຄຳເຫັນ"></textarea>
                    {{-- <i class="form-group__bar"></i> --}}
                {{-- </div> --}}
  
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link">Save changes</button>
                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection