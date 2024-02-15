
@if(\Session::has('error'))
    <div class="alert show showAlert">
        <div class="row" style="text-align: center; align-items: center;">
            <div class="col-2"> <i class="fa-solid fa-triangle-exclamation" style="font-size: xxx-large;"></i></div>
            <div class="col-8">
                <p class="lead">{{ \Session::get('error') }}</p>
            </div>
            <div class="col-2">
                <div class="close-btn">
                    <i class="fa-solid fa-x"></i>
                </div>
            </div>
        </div>
    </div>
@endif

@if(\Session::has('message'))
    <div class="alert show showAlert" style="background: darkseagreen; border-left: 8px solid green;">
        <div class="row" style="text-align: center; align-items: center;">
            <div class="col-2"> <i class="fa-solid fa-info" style="font-size: xxx-large;"></i> </div>
            <div class="col-8">
                <p class="lead">{{ \Session::get('message') }}</p>
            </div>
            <div class="col-2">
                <div class="close-btn" style="background: rgba(50,205,50,0.5);">
                    <i class="fa-solid fa-x"></i>
                </div>
            </div>
        </div>
    </div>
@endif

<script>
    setTimeout(function(){
        $('.alert').removeClass("show");
        $('.alert').addClass("hide");
    },5000);
</script>

