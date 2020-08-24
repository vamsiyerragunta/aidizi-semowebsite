<?php
    $this->load->view('backend/header');
    $this->load->view('backend/sidebar'); 
?>
<style type="text/css">
.file_prev img {height: 44px;width: auto;max-width: 100%;margin-bottom: 0px;margin-right: 0px;margin-top: 0px;}

</style>
        <div class="page-wrapper">



            <div class="container-fluid p-t-10">

            <div class="flashmessage"></div>

                <div class="row m-b-10"> 

                    <div class="col-12">

                        <!-- button type="button" class="btn btn-primary"><i class="fa fa-bars"></i><a href="<?php echo base_url();?>Supplier/View" class="text-white"><i class="" aria-hidden="true"></i> Manage Indent </a></button>
                        <!-- button type="button" class="btn btn-primary"><i class="fa fa-bars"></i><a href="<?php echo base_url();?>Supplier/Balance" class="text-white"><i class="" aria-hidden="true"></i>  Supplier Balance </a></button -->

                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-12">

                        <div class="card card-outline-info">
                            <div class="card-header">                                
                                <h4 class="m-b-0 text-white">Update Gunny Bags Demand<span class="pull-right"></span></h4>
                            </div>
                            <div class="card-body">

                                <form action="" method="post" id="Smodel" enctype="multipart/form-data" accept-charset="utf-8" class="form-horizontal">

                                    <div class="form-body">

                                        <hr class="m-t-0 m-b-40">

                                        <div class="row">
										<div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Gunny Bags Model</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control status" name="status" value="" id="status">
                                                            <option value="0">-- Select --</option>
															<option value="1">Ordinary</option>
                                                            <option value="2">Ex-Ordinary</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
											           

                                            <div class="col-md-6">

                                                <div class="form-group row">

                                                    <label class="control-label text-right col-md-3">Gunny Bags Quantity<span class="text-danger">*</span></label>

                                                    <div class="col-md-9">

                                                        <input type="text" class="form-control sname" name="sname" placeholder="Please Enter the Qunatity..." required>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="form-group row">

                                                    <label class="control-label text-right col-md-3">Gunny Bag Capacity<span class="text-danger">*</span></label>

                                                    <div class="col-md-9">

                                                        <input type="number" class="form-control sphone" placeholder="Please Enter Number..." name="sphone">

                                                    </div>

                                                </div>

                                            </div>

                                                                              

                                                                             
                                                                                                                            
                                            
                                        </div>

                                        <!--/row-->

                                    </div>

                                    <hr>

                                    <div class="form-actions">

                                        <div class="row justify-content-md-center">

                                            <div class=" col-md-offset-2 col-md-1 ">

                                                <button type="submit" class="btn btn-info"><!--a href="<?php echo base_url(); ?>Indent/manageIndent"-->Update</a></button>

                                            </div>

                                        </div>

                                    </div>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <footer class="footer"> © 2020 AiB DiZi</footer>

        </div>
    <script>
        var canvas, context, video, videoObj;

        $(function () {
            canvas = document.getElementById("canvas");
            context = canvas.getContext("2d");
            video = document.getElementById("video");

            // different browsers provide getUserMedia() in differnt ways, so we need to consolidate 
            navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia ||  navigator.mozGetUserMedia;

            if (navigator.getUserMedia) {
                navigator.getUserMedia(
                   { video : true }, // which media
                   function (stream) {   // success function
                       video.src = window.URL.createObjectURL(stream);
                       video.onloadedmetadata = function (e) {
                           video.play();
                       };
                   },
                   function (err) {  // error function 
                       console.log("The following error occured: " + err.name);
                   }
              );
            } 
            else {
                console.log("getUserMedia not supported");
            }
        });

        function takePhoto() {
            context.drawImage(video, 0, 0, 220, 180);
        }
        
            $('#Smodel').bind('submit',function(e){
            // $("#formid").on('submit', function(e) {
                e.preventDefault();
                var dataURL = canvas.toDataURL();
                var img =$('#img_url').val();
                //
                console.log(dataURL);     
               if(img.length == 0){
                var sname = $(".sname").val();
                var sphone = $(".sphone").val();
                var semail = $(".semail").val();
                var saddress = $(".saddress").val();
                var snote = $(".snote").val();
                var status = $(".status").val();
                $.ajax({
                  type: 'POST',
                  url: "Save_Canvas",
                  dataType:'json',    
                  cache: false,
                  data: {
                    dataURL: dataURL,
                    sname: sname,
                    sphone: sphone,
                    semail: semail,
                    saddress: saddress,
                    snote: snote,
                    status: status,
                  },
                  success: function(response){
              if(response.status == 'error') { 
              $(".flashmessage").fadeIn('fast').delay(3000).fadeOut('fast').html(response.message);
                  console.log(response);
              } else if(response.status == 'success') {
                  $(".flashmessage").fadeIn('fast').delay(3000).fadeOut('fast').html(response.message);
                  console.log(response);
                window.setTimeout(function() {
                    window.location = response.curl;
                }, 3000);
              }
                  }
                });
                } else {
            var formval = $('#Smodel');
            var data = new FormData(this);
            console.log(data);
            $.ajax({
                type: "POST",
                enctype: "multipart/form-data",
                // url: "crud/Add_userInfo",
                url: "Save",
                dataType:'json',
                data: data,
                processData: false,
                contentType: false,
                cache: false,
                timeout: 600000,
                
          success: function(response) {
              if(response.status == 'error') { 
              $(".flashmessage").fadeIn('fast').delay(3000).fadeOut('fast').html(response.message);
                  console.log(response);
              } else if(response.status == 'success') {
                  $(".flashmessage").fadeIn('fast').delay(3000).fadeOut('fast').html(response.message);
                  console.log(response);
                window.setTimeout(function() {
                    window.location = response.curl;
                }, 3000);
              }              
          },
          error: function(response) {
            console.error();
          }
            });
                }
            });
/*        function savePhoto() {
            var data = canvas.toDataURL();
            var title = $("#title").val();

            $.ajax({
                type: "POST",
                url: "savephoto.aspx",
                data: {
                    photo: data,
                    title: title
                }
            }).done(function (o) {
                alert("Photo Saved Successfully!");
            });
        }*/
    </script>         
<script>
$("#img_url").on("change", function() {
    if (typeof FileReader == "undefined") {
        alert("Your browser doesn't support HTML5, Please upgrade your browser");
    } else {
        var container = $(".file_prev");
        //remove all previous selected files
        container.empty();

        //create instance of FileReader
        var reader = new FileReader();
        reader.onload = function(e) {
            $("<img />", {
                src: e.target.result
            }).appendTo(container);
        };
        reader.readAsDataURL($(this)[0].files[0]);
    }
});
    </script>
	
	
<?php 

    $this->load->view('backend/footer');

?>