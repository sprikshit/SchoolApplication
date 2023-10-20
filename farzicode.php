<script>
    // Ensure that the teacherData variable is correctly populated from the PHP code
    const teacherData = <?php echo json_encode($teacherData); ?>;

    // Check if the teacherData object is correctly populated
    console.log('Teacher Data:', teacherData);

    // Check if the leaveRequests array is present and correctly structured
    if (teacherData.leaveRequests && Array.isArray(teacherData.leaveRequests)) {
        console.log('Leave Requests:', teacherData.leaveRequests);
    } else {
        console.log('No Leave Requests Found');
    }
</script>

const statusMessage = document.createElement('span');
                statusMessage.textContent = `Leave has been ${status}`;
                button.parentElement.appendChild(statusMessage);


//======================================================================================//
                document.addEventListener('DOMContentLoaded', function() {
    const id = <?php echo json_encode($teacherData['loginID']); ?>;
    const approveButtons = document.querySelectorAll('.approve-leave');
    const rejectButtons = document.querySelectorAll('.reject-leave');

    function updateLeaveStatus(leaveId, loginId, status, button) {
        fetch(`https://schoolapi-3yo0.onrender.com/leave-request/${id}/${leaveId}`, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                loginId: loginId,
                status: status
            }),
        })
        .then(response => {
            if (response.ok) {
                // The status was updated successfully, show the popup message
                showPopup(`Leave has been ${status}`);
                // Hide both "Approve" and "Reject" buttons for the specific leave ID
                hideButtonsForLeaveId(leaveId);
                const statusMessage = document.createElement('h1');
                statusMessage.textContent = `Leave has been ${status}`;
                // Set the color and font size based on the status
                statusMessage.style.color = status === 'Approved' ? 'green' : 'red';
                statusMessage.style.fontSize = '24px'; // Adjust the font size as needed
                button.parentElement.appendChild(statusMessage);
            } else {
                // Handle the error case
                console.error('Failed to update leave status');
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }

    approveButtons.forEach(button => {
        button.addEventListener('click', function() {
            const leaveId = button.getAttribute('data-leave-id');
            const loginId = button.getAttribute('data-login-id');
            updateLeaveStatus(leaveId, loginId, 'Approved', button);
        });
    });

    rejectButtons.forEach(button => {
        button.addEventListener('click', function() {
            const leaveId = button.getAttribute('data-leave-id');
            const loginId = button.getAttribute('data-login-id');
            updateLeaveStatus(leaveId, loginId, 'Rejected', button);
        });
    });

    function showPopup(message) {
        const popupModal = document.querySelector('.popup-container');
        const popupMessage = popupModal.querySelector('.popup-message');
        popupMessage.textContent = message;
        popupModal.style.display = 'flex';

        const closeButton = popupModal.querySelector('.close-popup-button');
        closeButton.addEventListener('click', () => {
            popupModal.style.display = 'none';
        });
    }

    function hideButtonsForLeaveId(leaveId) {
        // Hide both "Approve" and "Reject" buttons for the specified leave ID
        approveButtons.forEach(button => {
            if (button.getAttribute('data-leave-id') === leaveId) {
                button.style.display = 'none';
            }
        });
        rejectButtons.forEach(button => {
            if (button.getAttribute('data-leave-id') === leaveId) {
                button.style.display = 'none';
            }
        });
    }
});

=====================================================================================================================================================
document.addEventListener('DOMContentLoaded', function() {
    const id = <?php echo json_encode($teacherData['loginID']); ?>;
    const approveButtons = document.querySelectorAll('.approve-leave');
    const rejectButtons = document.querySelectorAll('.reject-leave');

    function updateLeaveStatus(leaveId, loginId, status, button) {
        fetch(`https://schoolapi-3yo0.onrender.com/leave-request/${id}/${leaveId}`, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                loginId: loginId,
                status: status
            }),
        })
        .then(response => {
            if (response.ok) {
                // The status was updated successfully, show the popup message
                showPopup(`Leave has been ${status}`);
                // Hide both "Approve" and "Reject" buttons for the specific leave ID
                hideButtonsForLeaveId(leaveId);
                const statusMessage = document.createElement('h1');
                statusMessage.textContent = `Leave has been ${status}`;
                // Set the color and font size based on the status
                statusMessage.style.color = status === 'Approved' ? 'green' : 'red';
                statusMessage.style.fontSize = '24px'; // Adjust the font size as needed
                button.parentElement.appendChild(statusMessage);

                // Store the state in local storage using different keys for approved and rejected buttons
                if (status === 'Approved') {
                    localStorage.setItem(`approved_${leaveId}`, 'true');
                } else if (status === 'Rejected') {
                    localStorage.setItem(`rejected_${leaveId}`, 'true');
                }
            } else {
                // Handle the error case
                console.error('Failed to update leave status');
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }

    approveButtons.forEach(button => {
        button.addEventListener('click', function() {
            const leaveId = button.getAttribute('data-leave-id');
            const loginId = button.getAttribute('data-login-id');
            updateLeaveStatus(leaveId, loginId, 'Approved', button);
        });
    });

    rejectButtons.forEach(button => {
        button.addEventListener('click', function() {
            const leaveId = button.getAttribute('data-leave-id');
            const loginId = button.getAttribute('data-login-id');
            updateLeaveStatus(leaveId, loginId, 'Rejected', button);
        });
    });

    // Check and hide buttons based on local storage for approved and rejected buttons
    approveButtons.forEach(button => {
        const leaveId = button.getAttribute('data-leave-id');
        const approved = localStorage.getItem(`approved_${leaveId}`);
        if (approved) {
            button.style.display = 'none';
            const statusMessage = document.createElement('h1');
            statusMessage.textContent = `Leave has been Approved`;
            statusMessage.style.color = 'green';
            statusMessage.style.fontSize = '24px';
            button.parentElement.appendChild(statusMessage);
        }
    });

    rejectButtons.forEach(button => {
        const leaveId = button.getAttribute('data-leave-id');
        const rejected = localStorage.getItem(`rejected_${leaveId}`);
        if (rejected) {
            button.style.display = 'none';
            const statusMessage = document.createElement('h1');
            statusMessage.textContent = `Leave has been Rejected`;
            statusMessage.style.color = 'red';
            statusMessage.style.fontSize = '24px';
            button.parentElement.appendChild(statusMessage);
        }
    });

    function showPopup(message) {
        const popupModal = document.querySelector('.popup-container');
        const popupMessage = popupModal.querySelector('.popup-message');
        popupMessage.textContent = message;
        popupModal.style.display = 'flex';

        const closeButton = popupModal.querySelector('.close-popup-button');
        closeButton.addEventListener('click', () => {
            popupModal.style.display = 'none';
        });
    }

    function hideButtonsForLeaveId(leaveId) {
        // Hide both "Approve" and "Reject" buttons for the specified leave ID
        approveButtons.forEach(button => {
            if (button.getAttribute('data-leave-id') === leaveId) {
                button.style.display = 'none';
            }
        });
        rejectButtons.forEach(button => {
            if (button.getAttribute('data-leave-id') === leaveId) {
                button.style.display = 'none';
            }
        });
    }
});
===================================================================================================================================
document.addEventListener('DOMContentLoaded', function() {
    const id = <?php echo json_encode($teacherData['loginID']); ?>;
    const approveButtons = document.querySelectorAll('.approve-leave');
    const rejectButtons = document.querySelectorAll('.reject-leave');

    approveButtons.forEach(button => {
        button.addEventListener('click', function() {
            const leaveId = button.getAttribute('data-leave-id');
            const loginId = button.getAttribute('data-login-id');
            updateLeaveStatus(leaveId, loginId, 'Approved', button);
        });
    });

    rejectButtons.forEach(button => {
        button.addEventListener('click', function() {
            const leaveId = button.getAttribute('data-leave-id');
            const loginId = button.getAttribute('data-login-id');
            updateLeaveStatus(leaveId, loginId, 'Rejected', button);
        });
    });

    function updateLeaveStatus(leaveId, loginId, status, button) {
        // Make an API request to update the status
        fetch(`https://schoolapi-3yo0.onrender.com/leave-request/${id}/${leaveId}`, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                loginId: loginId,
                status: status
            }),
        })
        .then(response => {
            if (response.ok) {
                // The status was updated successfully, update the content in the DOM
                const statusMessage = document.createElement('h1');
                statusMessage.textContent = `Leave has been ${status}`;
                statusMessage.style.color = status === 'Approved' ? 'green' : 'red';
                statusMessage.style.fontSize = '24px';
                statusMessage.classList.add('status-message');

                // Replace the button with the status message
                button.parentElement.replaceWith(statusMessage);
            } else {
                // Handle the error case
                console.error('Failed to update leave status');
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }
});
