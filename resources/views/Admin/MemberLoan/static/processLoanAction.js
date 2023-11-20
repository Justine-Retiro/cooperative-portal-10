$(document).ready(function() {
    $('.accept-btn').on('click', function() {
        var accountNumber = $(this).data('account-number');
        processLoanAction(accountNumber, 'accept');
    });

    $('.reject-btn').on('click', function() {
        var accountNumber = $(this).data('account-number');
        processLoanAction(accountNumber, 'reject');
    });

    function processLoanAction(accountNumber, action) {
        $.ajax({
            type: 'POST',
            url: '/coop/Admin/MemberLoan/api/processLoanAction.php', // Create this PHP file to handle the actions
            data: { account_number: accountNumber, action: action },
            success: function(response) {
                // Handle the response from your PHP script
                // You can update the table or provide user feedback here
            },
            error: function(xhr, status, error) {
                // Handle errors, if any
            }
        });
    }
});