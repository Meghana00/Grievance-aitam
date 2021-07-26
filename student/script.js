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