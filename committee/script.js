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
      GrievanceTypelist();
    },
  });
}
//  Reports Page Call
function ajaxReportsPageCall() {
  $.ajax({
    url: './pages/Reports.php',
    success: function (response) {
      $('.ajax-main-content').html(response);
      Grievancelist();
      grievancecount();
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
      $('.active-btn').hide();
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
    MemDuty : $('#addDuty').val(),
    MemDesignation: $('#addDesignation').val(),
    MemPassword: generatePassword(),
    Addmember : 'Addmember',
  };
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

/////rejecting The Member
function Rejectmem(){
  var formData = {
    MemEmail :  $('#mememail').val(),
    Rejectmem:'Rejectmem',
  };
  $.ajax({
    type: 'POST',
    url: './backScript.php',
    data: formData,
    success: function (response) {
      $('.remove-response').html(response);
      $('.reject-btn').hide();
    },
  });
}
/////Add grievance type
function  addGrievanceType(){
  var formData = {
    GrievanceType: $('#GrievanceType').val(),
    Description: $('#Description').val(),
    AddType : 'Addtype',
  };
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
////Grievnacestype List

function  GrievanceTypelist(){
  var formData = {
    GrievanceTypeList : 'GrievanceTypeList',
  };
  $.ajax({
    type: 'POST',
    url: './backScript.php',
    data: formData,
    success: function (response) {  
      $('.GrievanceType-response').html(response);
    },
  });
}
////remove the Type of grievance
function RemoveType(){
  var formData = {
    GType :  $('#GType').val(),
    RemoveType:'RemoveType',
  };
  $.ajax({
    type: 'POST',
    url: './backScript.php',
    data: formData,
    success: function (response) {
      $('.remove-response').html(response);
      $('.reject-btn').hide();
    },
  });
}

///update password
function ChangePassword() {
  // $('.alert-bell').removeClass('d-none');
  $('.Change-Password-Alerts').html('Loading...');
  var formData = {
    oldPassword: $('#oldpassword').val(),
    newPassword: $('#newpassword').val(),
    confirmPassword: $('#confirmpassword').val(),
    ChangePassword: 'ChangePassword',
  };
  if (formData.oldPassword == '' || formData.newPassword == '' || formData.confirmPassword == '' || formData.ChangePassword == '') {
    // $('.alert-bell').removeClass('d-none');
    $('.Change-Password-Alerts').html('All fields must be filled!');
  } 
  else{

      if(formData.newPassword == formData.confirmPassword) {
        $.ajax({
          type: 'POST',
          url: './backScript.php',
          data: formData,
          success: function (response) {
            // $('.alert-bell').removeClass('d-none');
            $('.Change-Password-Alerts').html(response);
          },
        });
      }
    else {
        $('.Change-Password-Alerts').html('Password and confirm password should be same!!');
    }
  }
}
