/**
 * Created by zhangzhaoying on 3/09/2016.
 */
$(document).ready(function(){
    $("select#industry").click(function() {
        var industry = this.value;
        $.ajax({
            type: "POST",
            data: "industry=" + industry,
            dataType : 'json',
            url: "<?php echo site_url('/Occ_controller/selectSubOccupation');?>",
            success:function(data)  {
                var appenddata1 = "";
                console.log(data);
                $.each(data, function(index, element) {
                    $("select#sub_industry").append(data[index].sub_industry);
                    appenddata1 += "<option value = '" + data[index].sub_industry + " '>" + data[index].sub_industry + " </option>";
                });
                $("select#sub_industry").append(appenddata1);
            }
        });
    });
});