



document.addEventListener("DOMContentLoaded", function() {

    // ========================headernav icons============================
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

    // ===================== LINK ACTIVE ====================
    const linkColor = document.querySelectorAll('.nav__link');

    function colorLink() {
        linkColor.forEach(l => l.classList.remove('active'));
        this.classList.add('active');
    }

    linkColor.forEach(l => l.addEventListener('click', colorLink));

});

showMenu('header-toggle', 'navbar');




 