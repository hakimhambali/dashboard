$(document).ready(function(){     
     
    var i=1;  
    $('#add').click(function(){  
         i++;  
         var html = '';
         
          html += '<tr id="row'+i+'" class="dynamic-added">';
  
          html += '<td style="word-break: keep-all;" class="border-dark">';
          html += '<textarea rows="10  id="bukti" name="bukti[]" ></textarea>';
          html += '</td>';
  
          html += '<td class="border-dark">';
          html += '<select class="form-select form-select-sm" id="ukuran" name="ukuran[]">';
          html += '<option selected value="N/A">N/A</option>';
          html += '<option value="Quantity" >Quantity</option>';
          html += '<option value="Ratio" >Ratio</option>';
          html += '<option value="Rating" >Rating</option>';
          html += '<option value="Percentage (%)" >Percentage(%)</option>';
          html += '<option value="Date (dd/mm/yyyy)">Date (dd/mm/yyyy)</option>';
          html += '<option value="Hours" >Hours</option>';
          html += '<option value="RM (billion)" >RM (billion)</option>';
          html += '<option value="RM (million)" >RM (million)</option>';
          html += '<option value="RM (*000)" >RM (*000)</option>';
          html += '</select>';
          html += '</td>';
  
          html += '<td class="font-weight-bold border-dark">';
          html += '<input type="text" maxlength="3" class="input_ukuran w-100" id="peratus" name="peratus[]" onkeyup="setTotal();" min="0" >';
          html += '</td>';
  
          html += '<td class="font-weight-bold border-dark">';
          html += '<input type="text" maxlength="4" class="input_threshold w-75" id="threshold" name="threshold[]" onkeyup="setTotal();" min="0" >';
          html += '</td>';
  
          html += '<td class="font-weight-bold border-dark">';
          html += '<input type="text" maxlength="4" class="input_base w-100" id="base" name="base[]" onkeyup="setTotal();" min="0" >';
          html += '</td>';
  
          html += '<td class="font-weight-bold border-dark">';
          html += '<input type="text" maxlength="4" class="input_stretch w-100" id="stretch" name="stretch[]" onkeyup="setTotal();" min="0" >';
          html += '</td>';
          
          html += '<td class="font-weight-bold border-dark">';
          html += '<input type="text" maxlength="4"  class="input_pencapaian w-75" id="pencapaian" name="pencapaian[]" onkeyup="setTotal();" min="0" >';
          html += '</td>';
  
       //    html += '<td class="font-weight-bold border-dark">';
       //    html += '<input type="text"  id="total" class="form-control-sm w-100" name="total[]" value="0" readonly>';
       //    html += '</td>';
  
       //    html += '<td class="font-weight-bold border-dark">';
       //    html += '<input type="text"  id="score" class="form-control-sm w-100" name="score[]" value="0" readonly>';
       //    html += '</td>';
  
          html += '<td class="font-weight-bold border-dark">';
          html += '<button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button>';
          html += '</td>';
  
          html += '</tr>';
   
          $('#dynamic_field').append(html);
  
    });  
  
  
    $(document).on('click', '.btn_remove', function(){  
         var button_id = $(this).attr("id");   
         $('#row'+button_id+'').remove();  
    }); 
  
  }); 
  
  function fetchRecords(id){
       $.ajax({
         url: 'getUsers/'+id,
         type: 'get',
         dataType: 'json',
         success: function(response){
  
           var len = 0;
           $('#userTable tbody').empty(); // Empty <tbody>
           if(response['data'] != null){
              len = response['data'].length;
           }
  
           if(len > 0){
              for(var i=0; i<len; i++){
                 var id = response['data'][i].id;
                 var username = response['data'][i].username;
                 var name = response['data'][i].name;
                 var email = response['data'][i].email;
  
                 var tr_str = "<tr>" +
                   "<td align='center'>" + (i+1) + "</td>" +
                   "<td align='center'>" + username + "</td>" +
                   "<td align='center'>" + name + "</td>" +
                   "<td align='center'>" + email + "</td>" +
                 "</tr>";
  
                 $("#userTable tbody").append(tr_str);
              }
           }else{
              var tr_str = "<tr>" +
                  "<td align='center' colspan='4'>No record found.</td>" +
              "</tr>";
  
              $("#userTable tbody").append(tr_str);
           }
  
         }
       });
     }
  
  
  