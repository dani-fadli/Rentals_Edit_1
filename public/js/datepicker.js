// <!-- datepicker -->
$(document).ready(function(){
  var minDate=new Date();
  $("#in_tgl_mulai").datepicker({
    showAnim: 'drop',
    numberOfMonth: 1,
    minDate: minDate,
    dateFormat: 'DD, dd MM yy',
    onClose: function(selectedDate){
      if($('#in_tgl_mulai').val()!='')
      {
        var nextDate=selectedDate;
        // alert(nextDate);
        $('#in_tgl_kembali').datepicker({
          showAnim: 'drop',
          numberOfMonth: 1,
          minDate: selectedDate,
          dateFormat: 'DD, dd MM yy'
        });
        $('#in_tgl_kembali').prop('disabled',false);
      }
      else
      {
        $('#in_tgl_kembali').prop('disabled',true);
        $('#in_tgl_kembali').prop('value','');
      }
    }
  });
});