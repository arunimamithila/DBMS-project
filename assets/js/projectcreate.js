// ========================headernav icons============================

document.addEventListener("DOMContentLoaded", function() {
    const bookmarkBox = document.querySelector(".bookmark_box");
    const bookmarksDropdown = document.querySelector(".bookmarks");
    const notificationIcon = document.querySelector(".notification_icon");
    const notificationDropdown = document.querySelector(".notification");
    const profileImg = document.getElementById('my-profile-pic'); // Corrected selector for profile image
    const profileDropdown = document.querySelector(".profile_dropdown");

    // Toggle bookmarks dropdown when clicking on bookmark box
    bookmarkBox.addEventListener("click", function(event) {
        event.stopPropagation(); // Prevent the click event from propagating to document
        bookmarksDropdown.classList.toggle("active");
        notificationDropdown.classList.remove("active"); // Hide notification dropdown
        profileDropdown.classList.remove("active"); // Hide profile dropdown
    });

    // Toggle notification dropdown when clicking on notification icon
    notificationIcon.addEventListener("click", function(event) {
        event.stopPropagation(); // Prevent the click event from propagating to document
        notificationDropdown.classList.toggle("active");
        bookmarksDropdown.classList.remove("active"); // Hide bookmarks dropdown
        profileDropdown.classList.remove("active"); // Hide profile dropdown
    });

    // Toggle profile dropdown when clicking on profile image
    profileImg.addEventListener('click', function(event) {
        event.stopPropagation(); // Prevent the click event from propagating to document
        profileDropdown.classList.toggle("active");
        bookmarksDropdown.classList.remove("active"); // Hide bookmarks dropdown
        notificationDropdown.classList.remove("active"); // Hide notification dropdown
    });

    // Close dropdowns when clicking outside of them
    document.addEventListener("click", function(event) {
        if (!event.target.closest(".bookmark_box") && !event.target.closest(".bookmarks")) {
            bookmarksDropdown.classList.remove("active");
        }
        if (!event.target.closest(".notification_icon") && !event.target.closest(".notification")) {
            notificationDropdown.classList.remove("active");
        }
        if (!event.target.closest("#my-profile-pic") && !event.target.closest(".profile_dropdown")) {
            profileDropdown.classList.remove("active");
        }
    });

});

showMenu('header-toggle', 'navbar');

/*==================== LINK ACTIVE ====================*/
const linkColor = document.querySelectorAll('.nav__link');

function colorLink() {
    linkColor.forEach(l => l.classList.remove('active'));
    this.classList.add('active');
}

linkColor.forEach(l => l.addEventListener('click', colorLink));


// ==================project upload===========================



document.addEventListener("DOMContentLoaded", function() {
    var form = document.querySelector('.dropzone');
    var fileInput = document.getElementById('fileInput');

    form.addEventListener("click", () => {
        fileInput.click();
    });

    fileInput.addEventListener('change', function(event) {
        var file = event.target.files[0]; // Get the selected file
        if (file) {
            var fileName = file.name; // Get the name of the selected file
            uploadFile(fileName, file); // Call uploadFile function with file name and file object
        }
    });

    function uploadFile(fileName, file) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '../assets/php/upload.php', true);
        xhr.onload = function() {
            // Handle response from server if needed
        };
        var formData = new FormData();
        formData.append('file', file); // Append the file to the FormData object
        xhr.send(formData); // Send FormData object containing the file to server
    }
});






