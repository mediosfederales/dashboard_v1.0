document.addEventListener("DOMContentLoaded", function() {
  const openPopupLink = document.getElementById("openPopupLink");
  const popupContainer = document.getElementById("popupContainer");
  const closePopup = document.getElementById("closePopup");

  openPopupLink.addEventListener("click", function(event) {
    event.preventDefault();
    popupContainer.style.display = "block";
  });

  closePopup.addEventListener("click", function() {
    popupContainer.style.display = "none";
  });

  // Close the popup if the user clicks outside the popup content
  popupContainer.addEventListener("click", function(event) {
    if (event.target === popupContainer) {
      popupContainer.style.display = "none";
    }
  });
});




// Marketplace - Get the modal and close button elements
    // Get the modal, close button, and tab elements
    var modal = document.getElementById('myModal');
    var closeModalBtn = document.getElementById('closeModalBtn');
    var tabLinks = document.querySelectorAll('.tab-link');
    var tabs = document.querySelectorAll('.tab');

    // Function to open the modal and show the first tab by default
    function openModal() {
        modal.style.display = 'block';
        showTab('tab1'); // Show the first tab by default
    }

    // Function to close the modal
    function closeModal() {
        modal.style.display = 'none';
    }

    // Function to switch tabs
    function showTab(tabId) {
        tabs.forEach(function (tab) {
            tab.style.display = 'none';
        });
        document.getElementById(tabId).style.display = 'block';
    }

    // Event listener to open the modal and show the first tab when the link is clicked
    document.getElementById('openModalLink').addEventListener('click', openModal);

    // Event listener to close the modal when the close button is clicked
    closeModalBtn.addEventListener('click', closeModal);

    // Event listener to switch tabs when a tab link is clicked
    tabLinks.forEach(function (tabLink) {
        tabLink.addEventListener('click', function () {
            var tabId = this.getAttribute('data-tab');
            showTab(tabId);
        });
    });
    
    
    



