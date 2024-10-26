Dropzone.options.propertyImagesDropzone = {
    url: "{{ route('users.store') }}", // The URL for the upload endpoint
    maxFilesize: 5, // MB
    acceptedFiles: 'image/*',
    addRemoveLinks: true,
    autoProcessQueue: false, // Prevent auto submission
    uploadMultiple: true,
    parallelUploads: 10,
    maxFiles: 10,

    init: function () {
        var myDropzone = this;

        // Submit button handler
        document.querySelector("button[type=submit]").addEventListener("click", function (e) {
            e.preventDefault();
            e.stopPropagation();

            if (myDropzone.getQueuedFiles().length > 0) {
                myDropzone.processQueue();
            } else {
                document.getElementById("propertyForm").submit();
            }
        });

        // On successful file upload
        myDropzone.on("successmultiple", function (files, response) {
            window.location.href = "{{ route('my-listings') }}"; // Redirect after successful submission
        });

        // On error
        myDropzone.on("errormultiple", function (files, response) {
            alert("An error occurred while uploading the images.");
        });
    }
};
