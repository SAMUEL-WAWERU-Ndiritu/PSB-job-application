
$(document).ready(function(){
    filter_data();
function filter_data(){
    $('.filter_data').html('div id="loading" style=""></div>');
    var action= 'fetch_data';
    var sex= get_filter('sex');
    var date_of_birth= get_filter('date_of_birth');
    var disability= get_filter('disability');
    var death_certificate = get_filter('death_certificate');
    var institution_name  = get_filter('institution_name');
    var course_name= get_filter('course_name');
    var perfomance_status = get_filter('perfomance_status');
    var annual_fees= get_filter('annual_fees');
   
    
    $.ajax({
        url: "./fetch_data.php",
        method:"POST",
        data:{
            action:action,sex:sex,date_of_birth:date_of_birth,disability:disability,death_certificate: death_certificate,institution_name :institution_name, course_name: course_name,perfomance_status :perfomance_status ,annual_fees:annual_fees
        },
        success:function(data){
            $('.filter_data').html(data);
        }
    });
    
}
function get_filter(class_name){
    var filter = [];
    $('.' +class_name+':checked').each(function(){
        filter.push($(this).val());
    });
    return filter;
}
$('.common_selector').click(function()
{
    filter_data();
})
});
