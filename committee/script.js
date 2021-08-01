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

////Admin Update 
function updateprofile(){
  var formData = {
    FullName :  $('#FullName').val(),
    Email :  $('#Email').val(),
    Branch :  $('#Branch').val(),
    Mobile :  $('#Mobile').val(),
    EmpId :  $('#EmpId').val(),
    Designation :  $('#Designation').val(),

    Update :'Update',
  };
  $.ajax({
    type: 'POST',
    url: './backScript.php',
    data: formData,
    success: function (response) {
      $('.update-response').html(response);
      $('.update-btn').hide();
    },
  });
}