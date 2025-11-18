// function for lead module
function testfunction() {
    console.log('button clicked');
    const userConfirmed = confirm('Button clicked successfully!');
    if (userConfirmed) {
        window.location.href = "https://suitecrm.com/demo/";
    }
}
                              
// function for contact module in detail view to redirect on custom view
function customview() {
    const userConfirmed = confirm('Are you sure, you want to redirect on custom view page?')

    if(userConfirmed) {
        window.location.href = "http://localhost/crm_folder/testingCRM/index.php?module=Contacts&action=mysettings";
    }
}