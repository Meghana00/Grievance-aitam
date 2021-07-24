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
        // AvailableBloodDetails();
      }, 10000);
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
