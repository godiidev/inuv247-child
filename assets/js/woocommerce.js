jQuery(document).ready(function($) {
    // Function to open modal
    function openModal() {
        $('#section-modal').show();
    }

    // Function to close modal
    function closeModal() {
        $('#section-modal').hide();
    }

    // Function to attach event listeners
    function attachEventListeners() {
        // Attach click event to the filter toggle button
        $('#filter-toggle').on('click', openModal);

        // Attach click event to the close button
        $('.filter-close').on('click', closeModal);

        // Attach click event to close modal when clicking outside of it
        $(window).on('click', function(event) {
            if ($(event.target).is('#section-modal')) {
                closeModal();
            }
        });

        // Ensure that clicking inside the modal content does not close the modal
        $('.filter-modal-content').on('click', function(event) {
            event.stopPropagation();
        });

        // Close modal when a filter option is clicked
        $('.filter-content').on('click', 'input[type="checkbox"], a.filter-item', function(e) {
            setTimeout(function() {
                closeModal();
            }, 500); // Adjust the delay as needed
        });
    }

    // Attach initial event listeners
    attachEventListeners();

    // Reattach event listeners after AJAX completes
    $(document).ajaxComplete(function() {
        // Remove existing event listeners to avoid duplicates
        $('.quick-view-button').off('click');
        attachEventListeners();
    });
});
