@extends('layouts.head')

@section('pagetitle')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Tableau de bord</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">Tableau de bord</li>
                </ol>
            </div>

        </div>
    </div>
</div>
@endsection

@section('content')

<div class="row">
    <div class="col-xl-8">  
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-wrap align-items-start">
                    <h5 class="card-title me-2">Visiteurs</h5>
                    
                </div>
               
                <div class="row text-center">
                    <div class="col-lg-4">
                        <div class="mt-2">
                            <p class="text-muted mb-1">Aujourd'hui</p>
                            <h5>{{ $today }}</h5>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="mt-2">
                            <p class="text-muted mb-1">Ce Mois</p>
                            <h5>{{ $month }}</h5>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mt-2">
                            <p class="text-muted mb-1">Cette Année</p>
                            <h5>{{ $year }}</h5>
                        </div>
                    </div>
                </div>

                <hr class="mb-0">
                
            </div>
        </div>
    </div>

   
<!-- end row -->
@endsection
