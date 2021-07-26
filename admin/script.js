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
      setInterval(function () {
        Grievancelist();
        grievancecount();
      }, 1000);
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
      setInterval(function () {
        accountactivationresponse();
        usercount();
      }, 1000);
    },
  });
}

// Grievance Mem Page Call
function ajaxGrievanceMemPageCall() {
  $.ajax({
    url: './pages/GrievanceMem.php',
    success: function (response) {
      $('.ajax-main-content').html(response);
      // BloodRequestsDetails();
      setInterval(function () {
        // BloodRequestsDetails();
      }, 10000);
    },
  });
}
//  Grievance Type Page Call
function ajaxGrievanceTypePageCall() {
  $.ajax({
    url: './pages/GrievanceType.php',
    success: function (response) {
      $('.ajax-main-content').html(response);
      // BloodRequestsDetails();
      setInterval(function () {
        // BloodRequestsDetails();
      }, 10000);
    },
  });
}
//  Reports Page Call
function ajaxReportsPageCall() {
  $.ajax({
    url: './pages/Reports.php',
    success: function (response) {
      $('.ajax-main-content').html(response);
      // BloodRequestsDetails();
      setInterval(function () {
        // BloodRequestsDetails();
      }, 10000);
    },
  });
}
// Change Password Page Call
function ajaxChangePassPageCall(){
  $.ajax({
    url: './pages/changePassword.php',
    success: function (response) {
      $('.ajax-main-content').html(response);
      // BloodRequestsDetails();
      setInterval(function () {
        // BloodRequestsDetails();
      }, 10000);
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
      $('.spam').html(response[0]);
      $('.verified').html(response[1]);
      $('.accepted').html(response[2]);
      $('.rejected').html(response[3]);
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
      $('.Rejected').html(response[0]);
      $('.Open').html(response[1]);
      $('.Closed').html(response[2]);
      $('.Reopened').html(response[3]);
    },
  });
}

// Grievances List function
function  Grievancelist(){
  var formData = {
    From: $('#From').val(),
    To: $('#To').val(),
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

/******************************************************************************/
/*******************************************************************************/
// ========== Hospital ==========
// Available Blood Details
// function AvailableBloodDetails() {
//   var formData = {
//     bloodGroup: $('#bloodGroup').val(),
//     AvailableBloodDetails: 'AvailableBloodDetails',
//   };
//   $.ajax({
//     type: 'POST',
//     url: './backScript.php',
//     data: formData,
//     success: function (response) {
//       $('.AvailableBloodResponse').html(response);
//     },
//   });
// }
// // Update Quantity
// function UpdateQuantity(UpdateQuantitySno) {
//   $('.alert-bell').removeClass('d-none');
//   $('.Available-Blood-Detail-Alerts').html('Loading...');
//   var formData = {
//     UpdateQuantity: 'UpdateQuantity',
//     Quantity: $('#updateQuantity').val(),
//     UpdateQuantitySno: UpdateQuantitySno,
//   };
//   if (formData.Quantity == '' || formData.UpdateQuantitySno == '') {
//     $('.alert-bell').removeClass('d-none');
//     $('.Available-Blood-Detail-Alerts').html('Enter Quantity');
//   } else {
//     $.ajax({
//       type: 'POST',
//       url: './backScript.php',
//       data: formData,
//       success: function (response) {
//         $('.alert-bell').removeClass('d-none');
//         $('.Available-Blood-Detail-Alerts').html(response);
//       },
//     });
//   }
// }
// // Delete Quantity
// function DeleteQuantity(DeleteQuantitySno) {
//   $('.alert-bell').removeClass('d-none');
//   $('.Available-Blood-Detail-Alerts').html('Loading...');
//   var formData = {
//     DeleteQuantity: 'DeleteQuantity',
//     DeleteQuantitySno: DeleteQuantitySno,
//   };
//   $.ajax({
//     type: 'POST',
//     url: './backScript.php',
//     data: formData,
//     success: function (response) {
//       $('.alert-bell').removeClass('d-none');
//       $('.Available-Blood-Detail-Alerts').html(response);
//     },
//   });
// }

// // Blood Requests Details
// function BloodRequestsDetails() {
//   var formData = {
//     bloodGroup: $('#bloodGroup').val(),
//     ShowRows: $('#ShowRows').val(),
//     BloodRequestsResponse: 'BloodRequestsResponse',
//   };
//   $.ajax({
//     type: 'POST',
//     url: './backScript.php',
//     data: formData,
//     success: function (response) {
//       $('.BloodRequestsResponse').html(response);
//     },
//   });
// }
// // Allot Blood
// function AllotBlood(RequestID) {
//   $('.alert-bell').removeClass('d-none');
//   $('.Available-Blood-Detail-Alerts').html('Loading...');
//   var formData = {
//     AllotBlood: 'AllotBlood',
//     RequestID: RequestID,
//   };
//   $.ajax({
//     type: 'POST',
//     url: './backScript.php',
//     data: formData,
//     success: function (response) {
//       $('.alert-bell').removeClass('d-none');
//       $('.Available-Blood-Detail-Alerts').html(response);
//     },
//   });
// }
// // Add Blood Group
// function AddBloodGroup() {
//   $('.alert-bell').removeClass('d-none');
//   $('.Add-Blood-Detail-Alerts').html('Loading...');
//   var formData = {
//     bloodGroup: $('#bloodGroup').val(),
//     Quantity: $('#Quantity').val(),
//     AddBloodGroup: 'AddBloodGroup',
//   };
//   if (
//     formData.bloodGroup == '' ||
//     formData.Quantity == '' ||
//     formData.AddBloodGroup == ''
//   ) {
//     $('.alert-bell').removeClass('d-none');
//     $('.Add-Blood-Detail-Alerts').html('All fields must be filled!');
//   } else {
//     $.ajax({
//       type: 'POST',
//       url: './backScript.php',
//       data: formData,
//       success: function (response) {
//         $('.alert-bell').removeClass('d-none');
//         $('.Add-Blood-Detail-Alerts').html(response);
//       },
//     });
//   }
// }

// // Change Password
// function ChangePassword() {
//   $('.alert-bell').removeClass('d-none');
//   $('.Change-Password-Alerts').html('Loading...');
//   var formData = {
//     oldPassword: $('#oldPassword').val(),
//     newPassword: $('#newPassword').val(),
//     confirmPassword: $('#confirmPassword').val(),
//     ChangePassword: 'ChangePassword',
//   };
//   if (
//     formData.oldPassword == '' ||
//     formData.newPassword == '' ||
//     formData.confirmPassword == '' ||
//     formData.ChangePassword == ''
//   ) {
//     $('.alert-bell').removeClass('d-none');
//     $('.Change-Password-Alerts').html('All fields must be filled!');
//   } else {
//     $.ajax({
//       type: 'POST',
//       url: './backScript.php',
//       data: formData,
//       success: function (response) {
//         $('.alert-bell').removeClass('d-none');
//         $('.Change-Password-Alerts').html(response);
//       },
//     });
//   }
// }
