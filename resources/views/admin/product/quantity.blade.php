
<p class="title-form">افزودن خصوصیت جدید</p>
<form class="my-form" method="post">
    @csrf
    <div class="row">
        <div class="col-md-9">


            <div class="widget-admin">
                <span>عنوان خصوصیت</span>
                <input class="form-control inputbig" type="text" name="title[0]" placeholder="عنوان را اینجا وارد کنید">
                <br>
                <span>مقدار خصوصیت : </span>
                <input type="text" class="form-control" name="icon[0]">
            </div>
            <hr><br>

            <div id="widget_admin">

            </div>

            <span class="btn btn-danger" onclick="add_widget()">+ افزودن خصوصیت </span>


        </div>


    </div>
</form>
<script>
    function add_widget() {
        var count=document.getElementsByClassName('count-widget').length+1;
        var widget=
            '<div class="count-widget">'+
            '<span>عنوان خصوصیت:</span>'+
            '<input class="form-control inputbig" type="text" name="title['+count+']" placeholder="عنوان را اینجا وارد کنید">'+
            '<br><span>مقدار خصوصیت :  </span>'+
            '<input type="text" class="form-control" name="icon['+count+']">'+
            '<hr><br></div>';

        $('#widget_admin').append(widget);
    }
</script>
