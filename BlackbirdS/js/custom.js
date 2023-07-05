$(document).ready(function(){
    let doctors;
    $(document).on('change', '#select_department', function(e){
        let value = e.target.value;
        let innerHtml = '<option selected >Select Doctor</option>';
        $.ajax({
            url: "./../pages/get_doctor_name.php",
            method: "POST",
            dataType: "JSON",
            data: {dep_id: value},
            beforeSend: function(){
                $('#select_doctor').empty();
            },
            success: function(response){
                doctors = response;
                response.forEach(function(each){
                    innerHtml += `
                    <option value='${each.id}'>${each.username}</option>
                    `
                });
                $('#select_doctor').html(innerHtml);
                $('#doctor_fees').text(response.doctorFees);
            }
        })
    })
    $(document).on('change', '#select_doctor', function(e){
        let value = e.target.value;
        doctors.forEach(function(each){
            if(each.id == value){
                $('#doctor_fees').val(each.doctorFees);
            }
        })

    })
})