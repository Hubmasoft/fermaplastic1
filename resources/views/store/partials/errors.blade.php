@if (count($errors) > 0)
    <div class="alert show showAlert">
        <div class="row" style="text-align: center; align-items: center;">
            <div class="col-2"> <i class="fa-solid fa-triangle-exclamation" style="font-size: xxx-large;"></i></div>
            <div class="col-8">
                <ul style="list-style: none;">
                    @foreach ($errors->all() as $error)
                        <li class="lead">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="col-2">
                <div class="close-btn">
                    <i class="fa-solid fa-x"></i>
                </div>
            </div>
        </div>
    </div>


    <script>
        setTimeout(function(){
            $('.alert').removeClass("show");
            $('.alert').addClass("hide");
        },5000);
    </script>
@endif
