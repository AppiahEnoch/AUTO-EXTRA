// create document.ready function
var lecturerName=null;
var courseCode=null;
$(document).ready(function() {
 

    // create button click 
    $("#loadTimeTable").click(function() {
        $("#timeTable").click();
    })

    $("#timeTable").change(function() {
        if (!isFilePDF2("timeTable")) {
            return;
        }
    
        var formData = new FormData();
        formData.append('timeTable', $('#timeTable')[0].files[0]); // Append the file
    
        $.ajax({
            url: 'loadTimeTable.php', // Your endpoint
            type: 'POST',
            data: formData,
            processData: false, // Important! Tells jQuery not to process data
            contentType: false, // Important! Tells jQuery not to set contentType
            success: function(response) {
                alert(response)
                showToast("aeToastS", "SUCCESS!", "Time Table Loaded Successfully", 20);
                $("#timeTable").val(""); // Clear the file input
            },
            error: function(jqXHR, textStatus, errorThrown) {
                // Handle errors here
                console.log('ERRORS: ' + textStatus);
            },
        });
    });
    



    $("#courseCode").keyup(function() {
        aeLoading2()
        courseCode= $("#courseCode").val();
        
        courseCode= courseCode.toUpperCase();

        if(aeEmpty(courseCode)){
            aeLoading3()
        }
    })

   
    //#lecturerName  create keyup 
    $("#lecturerName").keyup(function() {
        lecturerName= $("#lecturerName").val();
      lecturerName= lecturerName.toUpperCase();
    })

    // click event for button download
    $("#download").click(function() {

        aeDownload('result/result.pdf');

       
    })
     
    


    

})
















function aeLoading2() {
    var parentContainer = $('.largeCard'); // parent container
    var spinner = $('#spinner-container');

    if (spinner.hasClass('d-none')) {
        spinner.removeClass('d-none');
        parentContainer.addClass('loading'); // add 'loading' class to parent
    } 
}


  function aeLoading3() {
    var parentContainer = $('.largeCard');
    var spinner = $('#spinner-container');
      spinner.addClass('d-none');
      parentContainer.removeClass('loading'); // remove 'loading' class from parent
    
  }