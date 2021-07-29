/*******************************************************************************/
/*******************************************************************************/
// ajaxHomePageCall();
// ========== Ajax Page Calls ==========
// profile Page Call
function ajaxProfilePageCall() {
  $.ajax({
    url: './pages/profile.php',
    success: function (response) {
      $('.ajax-main-content').html(response);
    },
  });
}
// Grievance Call
function ajaxGrievancePageCall() {
  $.ajax({
    url: './pages/grievances.php',
    success: function (response) {
      $('.ajax-main-content').html(response);
        Grievancelist();
        grievancecount();
    },
  });
}
/////GreievanceDetailPage call///////
function GrievanceDetails(GrievanceId) {
  $.ajax({
    type: 'POST',
    url: './pages/GrievanceDetails.php',
    data: {id:GrievanceId},
    success: function (response) {
      $('.ajax-main-content').html(response);
    },
  });
}
// account Page Call
function ajaxAccountPageCall() {
  $.ajax({
    url: './pages/accountActivation.php',
    success: function (response) {
      $('.ajax-main-content').html(response);
      // AvailableBloodDetails();
      usercount();
      accountactivationresponse();
    },
  });
}

// Grievance Mem Page Call
function ajaxGrievanceMemPageCall() {
  $.ajax({
    url: './pages/GrievanceMem.php',
    success: function (response) {
      $('.ajax-main-content').html(response);
      memberslist();
    },
  });
}
//  Grievance Type Page Call
function ajaxGrievanceTypePageCall() {
  $.ajax({
    url: './pages/GrievanceType.php',
    success: function (response) {
      $('.ajax-main-content').html(response);
    },
  });
}
//  Reports Page Call
function ajaxReportsPageCall() {
  $.ajax({
    url: './pages/Reports.php',
    success: function (response) {
      $('.ajax-main-content').html(response);
    },
  });
}
// Change Password Page Call
function ajaxChangePassPageCall(){
  $.ajax({
    url: './pages/changePassword.php',
    success: function (response) {
      $('.ajax-main-content').html(response);
    },
  });
}
/// ========== End Ajax Page Calls ==========
// =========ADMIN=========

//inactive accounts response
function accountactivationresponse() {
  var formData = {
    From: $('#From').val(),
    To: $('#To').val(),
    accountactivationresponse: 'accountactivationresponse',
  };
  $.ajax({
    type: 'POST',
    url: './backScript.php',
    data: formData,
    success: function (response) {
      $('.accountactivationresponse').html(response);
    },
  });
}

//Toactivate and send mail
function ActivateUser(){
  var formData = {
    Email: $('#Email').val(),
    Password: $('#Password').val(),
    ActivateUser: 'ActivateUser',

  };
  $.ajax({
    type: 'POST',
    url: './backScript.php',
    data: formData,
    success: function (response) {
      $('.activate-response').html(response);
    },
  
  });
}
///reject the user
function RejectUser(){
  var formData = {
    Email1: $('#Email1').val(),
    RejectUser : 'RejectUser',

  };
  $.ajax({
    type: 'POST',
    url: './backScript.php',
    data: formData,
    success: function (response) {
      $('.reject-response').html(response);
    },
  
  });
}


//users count by there status
function usercount() {
  var formData = {
    usercount : 'usercount',
  };
  $.ajax({
    type: 'POST',
    url: './backScript.php',
    data: formData,
    success: function (response) {
      let arr = response.split(','); 
      $('.spam').html(arr[0]);
      $('.verified').html(arr[1]);
      $('.accepted').html(arr[2]);
      $('.rejected').html(arr[3]);
    },
  });
}

//users count by there status
function grievancecount() {
  var formData = {

    grievancecount : 'grievancecount',

  };
  $.ajax({
    type: 'POST',
    url: './backScript.php',
    data: formData,
    success: function (response) {
      let arrr = response.split(',');
      // alert(arrr);
      $('.Rejected').html(arrr[1]);
      $('.Open').html(arrr[2]);
      $('.Closed').html(arrr[3]);
      $('.Reopened').html(arrr[4]);
    },
  });
}

// Grievances List function
function  Grievancelist(){
  var formData = {
    Grievancelist : 'Grievancelist',
  };
  $.ajax({
    type: 'POST',
    url: './backScript.php',
    data: formData,
    success: function (response) {
      
      $('.Grievance-response').html(response);
    },
  });
}
// Grievances members List function
function  memberslist(){
  var formData = {
    memberslist : 'memberslist',
  };
  $.ajax({
    type: 'POST',
    url: './backScript.php',
    data: formData,
    success: function (response) {
      
      $('.memberlist-response').html(response);
    },
  });
}
///password genrator
function generatePassword() {
  var length = 8,
      charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789",
      retVal = "";
  for (var i = 0, n = charset.length; i < length; ++i) {
      retVal += charset.charAt(Math.floor(Math.random() * n));
  }
  return retVal;
}
/////redressing 
function  Redress(){
  var formData = {
    Solution : $('#Solution').val(),
    GrievanceId :  $('#Gid').val(),
    Redress:'Redress',
  };
  $.ajax({
    type: 'POST',
    url: './backScript.php',
    data: formData,
    success: function (response) {
      $('.redress-response').html(response);
      $('.redress-btn').hide();
    },
  });
}
/////rejecting The Grievance
function RejectGrievance(){
  var formData = {
    GrievanceId :  $('#Gid1').val(),
    RejectGrievance:'RejectGrievance',
  };
  $.ajax({
    type: 'POST',
    url: './backScript.php',
    data: formData,
    success: function (response) {
      $('.rejectgrievance-response').html(response);
      $('.reject-btn').hide();
    },
  });
}
/////add grievance member
function  addmember(){
  var formData = {
    MemFullName: $('#addFullName').val(),
    MemEmpId: $('#addEmpId').val(),
    MemEmail: $('#addEmail').val(),
    MemBranch: $('#addBranch').val(),
    MemMobile: $('#addMobile').val(),
    MemDuty: $('#addDuty').val(),
    MemDesignation: $('#addDesignation').val(),
    MemPassword: generatePassword(),
    Addmember : 'Addmember',
  };
  alert(formData);
  $.ajax({
    type: 'POST',
    url: './backScript.php',
    data: formData,
    success: function (response) {
      $('.Addmember-response').html(response);
      $('.addmem-btn').hide();
    },
  });
}

// data table try for grievance mem
// ===========================================================================
// ==============================================================/




$(document).on('submit','#addUser',function(e){
  e.preventDefault();
  var Empid= $('#addEmpId').val();
  var Email= $('#addEmail').val();
  var Mobile= $('#addMobile').val();
  var FullName= $('#addFullName').val();
  var Designation= $('#addDesignation').val();
  var Branch= $('#addBranch').val();
  var Duty= $('#addDuty').val();
  var Password=generatePassword();
  var Addmember=Addmember;
  if(Empid != '' && Email != '' && Mobile != '' && FullName != '' && Designation != ''&& Branch != ''&& Duty != ''&&  UserName != '' &&  Password != '' )
  {
   $.ajax({
     url:"BackScript.php",
     type:"post",
     data:{Empid:Empid,Email:Email,Mobile:Mobile,FullName:FullName,Designation:Designation,Branch:Branch,Duty:Duty,Password:Password,Addmember:Addmember},
     success:function(data)
     {
       var json = JSON.parse(data);
       var status = json.status;
       if(status=='true')
       {
        mytable =$('#example').DataTable();
        mytable.draw();
        $('#addUserModal').modal('hide');
      }
      else
      {
        alert('failed');
      }
    }
  });
 }
 else {
  alert('Fill all the required fields');
}
});
$(document).on('submit','#updateUser',function(e){
  e.preventDefault();
   //var tr = $(this).closest('tr');
   var city= $('#cityField').val();
   var username= $('#nameField').val();
   var mobile= $('#mobileField').val();
   var email= $('#emailField').val();
   var trid= $('#trid').val();
   var id= $('#id').val();
   if(city != '' && username != '' && mobile != '' && email != '' )
   {
     $.ajax({
       url:"update_user.php",
       type:"post",
       data:{city:city,username:username,mobile:mobile,email:email,id:id},
       success:function(data)
       {
         var json = JSON.parse(data);
         var status = json.status;
         if(status=='true')
         {
          table =$('#example').DataTable();
          // table.cell(parseInt(trid) - 1,0).data(id);
          // table.cell(parseInt(trid) - 1,1).data(username);
          // table.cell(parseInt(trid) - 1,2).data(email);
          // table.cell(parseInt(trid) - 1,3).data(mobile);
          // table.cell(parseInt(trid) - 1,4).data(city);
          var button =   '<td><a href="javascript:void();" data-id="' +id + '" class="btn btn-info btn-sm editbtn">Edit</a>  <a href="#!" data-bs-toggle="modal" data-id="' +id + '" data-bs-target="#exampleModal" class="btn btn-danger btn-sm">Delete</a></td>';
          var row = table.row("[id='"+trid+"']");
          row.row("[id='" + trid + "']").data([id,username,email,mobile,city,button]);
          $('#exampleModal').modal('hide');
        }
        else
        {
          alert('failed');
        }
      }
    });
   }
   else {
    alert('Fill all the required fields');
  }
});
$('#example').on('click','.editbtn ',function(event){
  var table = $('#example').DataTable();
  var trid = $(this).closest('tr').attr('SlNo');
 // console.log(selectedRow);
 var SlNo = $(this).data('SlNo');
 $('#exampleModal').modal('show');

 $.ajax({
  url:"get_single_data.php",
  data:{SlNo:SlNo},
  type:'post',
  success:function(data)
  {
   var json = JSON.parse(data);
   $('#nameField').val(json.username);
   $('#emailField').val(json.email);
   $('#mobileField').val(json.mobile);
   $('#cityField').val(json.city);
   $('#SlNo').val(SlNo);
   $('#trid').val(trid);
 }
})
});

$(document).on('click','.deleteBtn',function(event){
   var table = $('#example').DataTable();
  event.preventDefault();
  var id = $(this).data('id');
  if(confirm("Are you sure want to delete this User ? "))
  {
  $.ajax({
    url:"delete_user.php",
    data:{id:id},
    type:"post",
    success:function(data)
    {
      var json = JSON.parse(data);
      status = json.status;
      if(status=='success')
      {
        //table.fnDeleteRow( table.$('#' + id)[0] );
         //$("#example tbody").find(id).remove();
         //table.row($(this).closest("tr")) .remove();
         $("#"+id).closest('tr').remove();
      }
      else
      {
        alert('Failed');
        return;
      }
    }
  });
  }
  else
  {
    return null;
  }
})


  