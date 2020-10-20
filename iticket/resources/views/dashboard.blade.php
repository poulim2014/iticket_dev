@extends('layouts.apps')

@section('navigator')

                        <li class="navigation__active"><a href="dashboard"><i class="zmdi zmdi-home"></i> Home</a></li>

                        <li class="@@problemactive"><a href="probapp"><i class="zmdi zmdi-comment-alert zmdi-hc-fw"></i> ແຈ້ງປັນຫາ</a></li>

                        <li class="@@recieveactive"><a href="receiveprob"><i class="zmdi zmdi-case-download zmdi-hc-fw"></i> ຮັບປັນຫາ</a></li>

                        <li class="@@widgetactive"><a href="#"><i class="zmdi zmdi-check-all zmdi-hc-fw"></i> ແຈ້ງສະຖານະ</a></li>

                        <li class="@@commentactive"><a href="comment"><i class="zmdi zmdi-comment zmdi-hc-fw"></i> ຄຳເຫັນຂອງຜູ້ຮັບບໍລິການ</a></li>


@endsection

@section('content')

<div class="card"><div class="card widget-past-days">

    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <h4 class="card-title">Dashboard</h4>
        <h6 class="card-subtitle">ສະຖານະປັນຫາທັງໝົດ</h6>
    </div>

    <div class="flot-chart flot-chart--sm flot-past-days" style="padding: 0px; position: relative;">
        <canvas class="flot-base" width="524" height="100" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 524px; height: 100px;"></canvas>
        <canvas class="flot-overlay" width="524" height="100" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 524px; height: 100px;"></canvas>
    </div>

    <div class="listview listview--bordered">
        <a href="receiveprob" class="listview__item">        <!-- ປັນຫາໃໝ່ -->
            <div class="widget-past-days__info">
                <h4>ປັນຫາໃໝ່</h4>
                <h3>1</h3>
            </div>

            <div class="widget-past-days__chart hidden-sm">
                <div class="peity-bar" style="display: none;">6,9,5,6,3,7,5,4,6,5,6,4,2,5,8,2,6,9</div><svg class="peity" height="36" width="65"><rect fill="rgba(255,255,255,0.85)" x="0.7222222222222222" y="12" width="2.1666666666666665" height="24"></rect><rect fill="rgba(255,255,255,0.85)" x="4.333333333333333" y="0" width="2.166666666666667" height="36"></rect><rect fill="rgba(255,255,255,0.85)" x="7.944444444444445" y="16" width="2.166666666666666" height="20"></rect><rect fill="rgba(255,255,255,0.85)" x="11.555555555555555" y="12" width="2.166666666666666" height="24"></rect><rect fill="rgba(255,255,255,0.85)" x="15.166666666666666" y="24" width="2.166666666666666" height="12"></rect><rect fill="rgba(255,255,255,0.85)" x="18.77777777777778" y="8" width="2.1666666666666643" height="28"></rect><rect fill="rgba(255,255,255,0.85)" x="22.38888888888889" y="16" width="2.166666666666668" height="20"></rect><rect fill="rgba(255,255,255,0.85)" x="26" y="20" width="2.166666666666668" height="16"></rect><rect fill="rgba(255,255,255,0.85)" x="29.61111111111111" y="12" width="2.166666666666668" height="24"></rect><rect fill="rgba(255,255,255,0.85)" x="33.22222222222222" y="16" width="2.1666666666666643" height="20"></rect><rect fill="rgba(255,255,255,0.85)" x="36.833333333333336" y="12" width="2.1666666666666643" height="24"></rect><rect fill="rgba(255,255,255,0.85)" x="40.44444444444444" y="20" width="2.1666666666666714" height="16"></rect><rect fill="rgba(255,255,255,0.85)" x="44.05555555555556" y="28" width="2.1666666666666643" height="8"></rect><rect fill="rgba(255,255,255,0.85)" x="47.666666666666664" y="16" width="2.1666666666666714" height="20"></rect><rect fill="rgba(255,255,255,0.85)" x="51.27777777777778" y="4" width="2.1666666666666643" height="32"></rect><rect fill="rgba(255,255,255,0.85)" x="54.888888888888886" y="28" width="2.1666666666666714" height="8"></rect><rect fill="rgba(255,255,255,0.85)" x="58.5" y="12" width="2.1666666666666643" height="24"></rect><rect fill="rgba(255,255,255,0.85)" x="62.111111111111114" y="0" width="2.166666666666657" height="36"></rect></svg>
            </div>
        </a>

        <a href="#" class="listview__item">        <!-- ປັນຫາກຳລັງດຳເນີນການ -->
            <div class="widget-past-days__info">
                <h5 class="text-warning">ປັນຫາທີ່ກຳລັງດຳເນີນການ</h5>
                <h3>3</h3>
            </div>

            <div class="widget-past-days__chart hidden-sm">
                <div class="peity-bar" style="display: none;">5,7,2,5,2,8,6,7,6,5,3,1,9,3,5,8,2,4</div><svg class="peity" height="36" width="65"><rect fill="rgba(255,255,255,0.85)" x="0.7222222222222222" y="16" width="2.1666666666666665" height="20"></rect><rect fill="rgba(255,255,255,0.85)" x="4.333333333333333" y="8" width="2.166666666666667" height="28"></rect><rect fill="rgba(255,255,255,0.85)" x="7.944444444444445" y="28" width="2.166666666666666" height="8"></rect><rect fill="rgba(255,255,255,0.85)" x="11.555555555555555" y="16" width="2.166666666666666" height="20"></rect><rect fill="rgba(255,255,255,0.85)" x="15.166666666666666" y="28" width="2.166666666666666" height="8"></rect><rect fill="rgba(255,255,255,0.85)" x="18.77777777777778" y="4" width="2.1666666666666643" height="32"></rect><rect fill="rgba(255,255,255,0.85)" x="22.38888888888889" y="12" width="2.166666666666668" height="24"></rect><rect fill="rgba(255,255,255,0.85)" x="26" y="8" width="2.166666666666668" height="28"></rect><rect fill="rgba(255,255,255,0.85)" x="29.61111111111111" y="12" width="2.166666666666668" height="24"></rect><rect fill="rgba(255,255,255,0.85)" x="33.22222222222222" y="16" width="2.1666666666666643" height="20"></rect><rect fill="rgba(255,255,255,0.85)" x="36.833333333333336" y="24" width="2.1666666666666643" height="12"></rect><rect fill="rgba(255,255,255,0.85)" x="40.44444444444444" y="32" width="2.1666666666666714" height="4"></rect><rect fill="rgba(255,255,255,0.85)" x="44.05555555555556" y="0" width="2.1666666666666643" height="36"></rect><rect fill="rgba(255,255,255,0.85)" x="47.666666666666664" y="24" width="2.1666666666666714" height="12"></rect><rect fill="rgba(255,255,255,0.85)" x="51.27777777777778" y="16" width="2.1666666666666643" height="20"></rect><rect fill="rgba(255,255,255,0.85)" x="54.888888888888886" y="4" width="2.1666666666666714" height="32"></rect><rect fill="rgba(255,255,255,0.85)" x="58.5" y="28" width="2.1666666666666643" height="8"></rect><rect fill="rgba(255,255,255,0.85)" x="62.111111111111114" y="20" width="2.166666666666657" height="16"></rect></svg>
            </div>
        </a>

        <a href="#" class="listview__item">        <!-- ປັນຫາທີ່ບໍ່ສຳເລັດ -->
            <div class="widget-past-days__info">
                <h5 class="text-danger">ປັນຫາທີ່ບໍ່ສຳເລັດ</h5>
                <h3>50</h3>
            </div>

            <div class="widget-past-days__chart hidden-sm">
                <div class="peity-bar" style="display: none;">5,7,2,5,2,8,6,7,6,5,3,1,9,3,5,8,2,4</div><svg class="peity" height="36" width="65"><rect fill="rgba(255,255,255,0.85)" x="0.7222222222222222" y="16" width="2.1666666666666665" height="20"></rect><rect fill="rgba(255,255,255,0.85)" x="4.333333333333333" y="8" width="2.166666666666667" height="28"></rect><rect fill="rgba(255,255,255,0.85)" x="7.944444444444445" y="28" width="2.166666666666666" height="8"></rect><rect fill="rgba(255,255,255,0.85)" x="11.555555555555555" y="16" width="2.166666666666666" height="20"></rect><rect fill="rgba(255,255,255,0.85)" x="15.166666666666666" y="28" width="2.166666666666666" height="8"></rect><rect fill="rgba(255,255,255,0.85)" x="18.77777777777778" y="4" width="2.1666666666666643" height="32"></rect><rect fill="rgba(255,255,255,0.85)" x="22.38888888888889" y="12" width="2.166666666666668" height="24"></rect><rect fill="rgba(255,255,255,0.85)" x="26" y="8" width="2.166666666666668" height="28"></rect><rect fill="rgba(255,255,255,0.85)" x="29.61111111111111" y="12" width="2.166666666666668" height="24"></rect><rect fill="rgba(255,255,255,0.85)" x="33.22222222222222" y="16" width="2.1666666666666643" height="20"></rect><rect fill="rgba(255,255,255,0.85)" x="36.833333333333336" y="24" width="2.1666666666666643" height="12"></rect><rect fill="rgba(255,255,255,0.85)" x="40.44444444444444" y="32" width="2.1666666666666714" height="4"></rect><rect fill="rgba(255,255,255,0.85)" x="44.05555555555556" y="0" width="2.1666666666666643" height="36"></rect><rect fill="rgba(255,255,255,0.85)" x="47.666666666666664" y="24" width="2.1666666666666714" height="12"></rect><rect fill="rgba(255,255,255,0.85)" x="51.27777777777778" y="16" width="2.1666666666666643" height="20"></rect><rect fill="rgba(255,255,255,0.85)" x="54.888888888888886" y="4" width="2.1666666666666714" height="32"></rect><rect fill="rgba(255,255,255,0.85)" x="58.5" y="28" width="2.1666666666666643" height="8"></rect><rect fill="rgba(255,255,255,0.85)" x="62.111111111111114" y="20" width="2.166666666666657" height="16"></rect></svg>
            </div>
        </a>

        <a href="#" class="listview__item">        <!-- ປັນຫາທີ່ສຳເລັດແລ້ວ -->
            <div class="widget-past-days__info">
                <h5 class="text-success">ປັນຫາທີ່ສຳເລັດແລ້ວ</h5>
                <h3>500</h3>
            </div>

            <div class="widget-past-days__chart hidden-sm">
                <div class="peity-bar" style="display: none;">3,9,1,3,5,6,7,6,8,2,5,2,7,5,6,7,6,8</div><svg class="peity" height="36" width="65"><rect fill="rgba(255,255,255,0.85)" x="0.7222222222222222" y="24" width="2.1666666666666665" height="12"></rect><rect fill="rgba(255,255,255,0.85)" x="4.333333333333333" y="0" width="2.166666666666667" height="36"></rect><rect fill="rgba(255,255,255,0.85)" x="7.944444444444445" y="32" width="2.166666666666666" height="4"></rect><rect fill="rgba(255,255,255,0.85)" x="11.555555555555555" y="24" width="2.166666666666666" height="12"></rect><rect fill="rgba(255,255,255,0.85)" x="15.166666666666666" y="16" width="2.166666666666666" height="20"></rect><rect fill="rgba(255,255,255,0.85)" x="18.77777777777778" y="12" width="2.1666666666666643" height="24"></rect><rect fill="rgba(255,255,255,0.85)" x="22.38888888888889" y="8" width="2.166666666666668" height="28"></rect><rect fill="rgba(255,255,255,0.85)" x="26" y="12" width="2.166666666666668" height="24"></rect><rect fill="rgba(255,255,255,0.85)" x="29.61111111111111" y="4" width="2.166666666666668" height="32"></rect><rect fill="rgba(255,255,255,0.85)" x="33.22222222222222" y="28" width="2.1666666666666643" height="8"></rect><rect fill="rgba(255,255,255,0.85)" x="36.833333333333336" y="16" width="2.1666666666666643" height="20"></rect><rect fill="rgba(255,255,255,0.85)" x="40.44444444444444" y="28" width="2.1666666666666714" height="8"></rect><rect fill="rgba(255,255,255,0.85)" x="44.05555555555556" y="8" width="2.1666666666666643" height="28"></rect><rect fill="rgba(255,255,255,0.85)" x="47.666666666666664" y="16" width="2.1666666666666714" height="20"></rect><rect fill="rgba(255,255,255,0.85)" x="51.27777777777778" y="12" width="2.1666666666666643" height="24"></rect><rect fill="rgba(255,255,255,0.85)" x="54.888888888888886" y="8" width="2.1666666666666714" height="28"></rect><rect fill="rgba(255,255,255,0.85)" x="58.5" y="12" width="2.1666666666666643" height="24"></rect><rect fill="rgba(255,255,255,0.85)" x="62.111111111111114" y="4" width="2.166666666666657" height="32"></rect></svg>
            </div>
        </a>
        
        <a href="#" class="listview__item">        <!-- ປັນຫາທັງໝົດ -->
            <div class="widget-past-days__info">
                <h5 class="text-info">ປັນຫາທັງໝົດ</h5>
                <h3>553</h3>
            </div>

            <div class="widget-past-days__chart hidden-sm">
                <div class="peity-bar" style="display: none;">3,9,1,3,5,6,7,6,8,2,5,2,7,5,6,7,6,8</div><svg class="peity" height="36" width="65"><rect fill="rgba(255,255,255,0.85)" x="0.7222222222222222" y="24" width="2.1666666666666665" height="12"></rect><rect fill="rgba(255,255,255,0.85)" x="4.333333333333333" y="0" width="2.166666666666667" height="36"></rect><rect fill="rgba(255,255,255,0.85)" x="7.944444444444445" y="32" width="2.166666666666666" height="4"></rect><rect fill="rgba(255,255,255,0.85)" x="11.555555555555555" y="24" width="2.166666666666666" height="12"></rect><rect fill="rgba(255,255,255,0.85)" x="15.166666666666666" y="16" width="2.166666666666666" height="20"></rect><rect fill="rgba(255,255,255,0.85)" x="18.77777777777778" y="12" width="2.1666666666666643" height="24"></rect><rect fill="rgba(255,255,255,0.85)" x="22.38888888888889" y="8" width="2.166666666666668" height="28"></rect><rect fill="rgba(255,255,255,0.85)" x="26" y="12" width="2.166666666666668" height="24"></rect><rect fill="rgba(255,255,255,0.85)" x="29.61111111111111" y="4" width="2.166666666666668" height="32"></rect><rect fill="rgba(255,255,255,0.85)" x="33.22222222222222" y="28" width="2.1666666666666643" height="8"></rect><rect fill="rgba(255,255,255,0.85)" x="36.833333333333336" y="16" width="2.1666666666666643" height="20"></rect><rect fill="rgba(255,255,255,0.85)" x="40.44444444444444" y="28" width="2.1666666666666714" height="8"></rect><rect fill="rgba(255,255,255,0.85)" x="44.05555555555556" y="8" width="2.1666666666666643" height="28"></rect><rect fill="rgba(255,255,255,0.85)" x="47.666666666666664" y="16" width="2.1666666666666714" height="20"></rect><rect fill="rgba(255,255,255,0.85)" x="51.27777777777778" y="12" width="2.1666666666666643" height="24"></rect><rect fill="rgba(255,255,255,0.85)" x="54.888888888888886" y="8" width="2.1666666666666714" height="28"></rect><rect fill="rgba(255,255,255,0.85)" x="58.5" y="12" width="2.1666666666666643" height="24"></rect><rect fill="rgba(255,255,255,0.85)" x="62.111111111111114" y="4" width="2.166666666666657" height="32"></rect></svg>
            </div>
        </a>
    </div>

@endsection