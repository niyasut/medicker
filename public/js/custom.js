
  var i=1;
$("#add_row").click(function(){
$('#addr'+i).html("<td>"+ (i+1) +"</td><td><input name='drug[]"+i+"' type='text' placeholder='Drug' class='form-control input-md'  /></td><td><input  name='dosage[]"+i+"' type='text' placeholder='dosage'  class='form-control input-md'></td><td><input  name='frequency[]"+i+"' type='text' placeholder='frequency'  class='form-control input-md'></td><td><input  name='days[]"+i+"' type='text' placeholder='days'  class='form-control input-md'></td><td><input  name='instruction[]"+i+"' type='text' placeholder='instruction'  class='form-control input-md'></td>");

$('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
i++; 
});
$("#delete_row").click(function(){
if(i>1){
$("#addr"+(i-1)).html('');
i--;
}
});
