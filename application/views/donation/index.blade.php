@layout('layouts/main')
 
@section('content')

<div class="row">
    
    @include('plugins.navigation')

    <!-- content -->
    <div class="span9"><div class="gs-content">
               
        <h1 class="page-title">Dashboard</h1>
                    
        <div class="row gs-dashboard">
            
            <div class="span2">
                <div class="hero-unit" style="text-align:center;">
                  <h2>$12,980</h2>
                  <p>Lifetime</p>
                </div>
            </div>
            
            <div class="span2">
                <div class="hero-unit" style="text-align:center;">
                  <h2>$1,490</h2>
                  <p>Year to Date</p>
                </div>
            </div>
            
            <div class="span2">
                <div class="hero-unit" style="text-align:center;">
                  <h2>$350</h2>
                  <p>Last Month</p>
                </div>
            </div>
            
            <div class="span2">
                <div class="hero-unit" style="text-align:center;">
                  <h2>$95</h2>
                  <p>Month to Date</p>
                </div>
            </div>
            
        </div>
            
    </div></div> <!-- end content -->
    
</div>
@endsection