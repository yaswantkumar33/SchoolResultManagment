document.addEventListener("DOMContentLoaded", function () {
    // Add click event listener to the button
    if (document.getElementById("rsubmit")) {
        document
            .getElementById("rsubmit")
            .addEventListener("click", function (event) {
                console.log("register submit btn clicked");
                event.preventDefault();

                // Create FormData object with form values
                let formData = {
                    username: document.getElementById("rname").value,
                    email: document.getElementById("remail").value,
                    password: document.getElementById("rpassword").value,
                    confirmpassword:
                        document.getElementById("rconfirmpassword").value,
                    dob: document.getElementById("DOB").value,
                    role: "student",
                };
                // Send POST request using Axios
                axios
                    .post("http://127.0.0.1:8000/registeruser", formData)
                    .then(function (response) {
                        // console.log(response.data);
                        // Handle success response
                        console.log(response.data);
                        window.location.replace("/login");
                    })
                    .catch(function (error) {
                        console.error(error);
                        // Handle error
                    });
            });
    }
});
