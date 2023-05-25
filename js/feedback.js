function updateStatus(checkbox, feedbackId) {
    // Get the new status based on the checkbox state
    var newStatus = checkbox.checked ? 1 : 0;

    // Send an AJAX request to update the status
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'update_status.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                // Status updated successfully
                console.log('Status updated successfully');
            } else {
                // Error occurred while updating status
                console.log('Error occurred while updating status');
            }
        }
    };
    xhr.send('feedbackId=' + encodeURIComponent(feedbackId) + '&status=' + encodeURIComponent(newStatus));
}
