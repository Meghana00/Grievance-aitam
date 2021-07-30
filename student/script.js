/*******************************************************************************/
/*******************************************************************************/
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


//   grievance request page
function ajaxRegisterGrievancePageCall() {
    $.ajax({
      url: './pages/grievancerequestpage.php',
      success: function (response) {
        $('.ajax-main-content').html(response);
      },
    });
  }
  //my grievances page
  function ajaxMyGrievancesPageCall(){
    $.ajax({
      url: './pages/mygrievances.php',
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

//pasword change page

function ajaxChangePassPageCall(){
    $.ajax({
      url: './pages/changePassword.php',
      success: function (response) {
        $('.ajax-main-content').html(response);
      },
    });
  }


  // ======================pagecall end===================

///register Grievance
function RegisterGrievance() {
  var formData = {
    FullName: $('#FullName').val(),
    RollNo: $('#RollNo').val(),
    Gender: $('#Gender').val(),
    Email: $('#Email').val(),
    Grievance: $('#Grievance').val(),
    GrievanceType: $('#GrievanceType').val(),
    
    RegisterGrievance : 'RegisterGrievance',

  };
  $.ajax({
    type: 'POST',
    url: './backScript.php',
    data: formData,
    success: function (response) {
      $('.Register_response').html(response);
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
      // alert(response);
      $('.Grievance-response').html(response);
    },
  });
}

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
///
/////reopening The Grievance
function ReopenGrievance(){
  var formData = {
    GrievanceId :  $('#Gid1').val(),
    ReopenGrievance:'ReopenGrievance',
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

//////update passsword
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
