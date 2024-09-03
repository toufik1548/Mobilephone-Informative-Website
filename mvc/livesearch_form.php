
<div class="input-group">
  <div class="form-outline rounded" style="width: 100%; padding: 10px; background-color: skyblue;" data-mdb-input-init>
    <input type="text" class="form-control" id="live_search" autocomplete="off" placeholder="Search ..." name="input">
  </div>

</div>
<div id="searchresult"></div>

<script>
    $(document).ready(function(){

        $("#live_search").keyup(function(){
            var input = $(this).val();
            //alert(input);

            if (input != "") {
                $.ajax({

                    url:"<?php echo $site_url; ?>/livesearch.php",
                    method:"POST",
                    data:{input:input},

                    success:function(data){
                        $("#searchresult").html(data);
                        $("#searchresult").css("display","block");
                    }

                });
            }else{

                $("#searchresult").css("display","none");
            }

        });

    });
</script>





