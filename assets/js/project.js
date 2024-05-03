// Function to fetch progress data from server
function fetchProgress() {
    fetch('project.php') // Assuming your PHP script is named progress.php
        .then(response => response.json())
        .then(data => {
            // Update progress percentage text
            document.querySelector('.progress-percentage').textContent = data.percentage + '%';
            
            // Update progress bar width
            const progressBox = document.getElementById('progress-box');
            progressBox.style.width = data.percentage + '%';
            progressBox.style.animationDuration = '2s'; // Set animation duration dynamically based on progress percentage
        })
        .catch(error => console.error('Error fetching progress:', error));
}


// Optionally, you can set up an interval to continuously update the progress
// setInterval(fetchProgress, 5000); // Update progress every 5 seconds


// Function to fetch project details from server
function fetchProjectDetails() {
    fetch('project.php') // Assuming your PHP script is named project_details.php
        .then(response => response.json())
        .then(data => {
            // Update project details in HTML
            document.querySelector('.pdetails_list:nth-child(2)').textContent = data.issues || '0';
            document.querySelector('.pdetails_list:nth-child(4)').textContent = data.resolved || '0';
            document.querySelector('.pdetails_list:nth-child(6)').textContent = data.comments || '0';
        })
        .catch(error => console.error('Error fetching project details:', error));
}

// Call fetchProjectDetails initially to load project details when the page loads
fetchProjectDetails();

// Optionally, you can set up an interval to continuously update the project details
// setInterval(fetchProjectDetails, 5000); // Update project details every 5 seconds





// Function to fetch project mates' image URLs from server
function fetchProjectMates() {
    fetch('project.php') // Assuming your PHP script is named project_mates.php
        .then(response => response.json())
        .then(data => {
            // Update project mates' images in HTML
            const projectMatesDiv = document.querySelector('.project_mates ul');
            projectMatesDiv.innerHTML = ''; // Clear existing content
            data.slice(0, 3).forEach(imageUrl => {
                const li = document.createElement('li');
                li.classList.add('d-inline-block');
                const img = document.createElement('img');
                img.classList.add('pmate-img', 'rounded-circle');
                img.src = imageUrl;
                img.alt = '';
                img.dataset.originalTitle = '';
                img.title = '';
                li.appendChild(img);
                projectMatesDiv.appendChild(li);
            });

            // If there are more than 3 project mates, show the "+X More" element
            if (data.length > 3) {
                const moreLi = document.createElement('li');
                moreLi.classList.add('d-inline-block', 'ms-2');
                const moreP = document.createElement('p');
                moreP.classList.add('f-12');
                moreP.textContent = `+${data.length - 3} More`;
                moreLi.appendChild(moreP);
                projectMatesDiv.appendChild(moreLi);
            }
        })
        .catch(error => console.error('Error fetching project mates:', error));
}

// Call fetchProjectMates initially to load project mates when the page loads
fetchProjectMates();

// Optionally, you can set up an interval to continuously update the project mates
// setInterval(fetchProjectMates, 5000); // Update project mates every 5 seconds



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




