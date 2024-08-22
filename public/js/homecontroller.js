// const { default: axios } = require("axios");

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
                        console.log(response.data);
                        window.location.replace("/login");
                    })
                    .catch(function (error) {
                        console.error(error);
                    });
            });
    }
    // Student dashboard js
    if (window.location.href.indexOf("dashboard") > 0) {
        document.getElementById("EditUserBtn").addEventListener("click", () => {
            var EditUserId = parseInt(
                document.getElementById("userEditId").value
            );
            document
                .getElementsByClassName("editform")[0]
                .classList.remove("hidden");
            document
                .getElementsByClassName("blur-div")[0]
                .classList.remove("hidden");
        });

        document
            .getElementsByClassName("usereditform")[0]
            .addEventListener("submit", (ev) => {
                ev.preventDefault();
                let editdata = {
                    username: document.getElementById("EditUserName").value,
                    email: document.getElementById("EditUserEmail").value,
                    phonenumber:
                        document.getElementById("EditUserNumber").value,
                    Dob: document.getElementById("EditUserDob").value,
                };
                axios
                    .post("http://127.0.0.1:8000/UpdateUser", editdata)
                    .then(() => {
                        location.reload();
                    })
                    .catch((err) => {
                        console.log("Axios Error !!!!!!!!!!!!!!");
                    });

                console.log("Save Correction clicked ! ", editdata);
            });
        document.getElementById("editcancel").addEventListener("click", () => {
            document
                .getElementsByClassName("editform")[0]
                .classList.add("hidden");
            document
                .getElementsByClassName("blur-div")[0]
                .classList.add("hidden");
        });
        document
            .getElementById("Semisterstud")
            .addEventListener("change", (e) => {
                let stud_id = parseInt(e.target.getAttribute("cusvalue"));
                let semister = parseInt(e.target.value);
                let semval = {
                    stud_id,
                    semister,
                };
                // console.log("Semister selection clicked !!", stud_id, semister);
                axios
                    .post("http://127.0.0.1:8000/Fetchsults", semval)
                    .then((response) => {
                        document.getElementById("resultsbody").innerHTML =
                            response.data.rows;
                        document.getElementById("percentage").innerHTML =
                            response.data.percentage;
                        document.getElementById("totalscore").innerHTML =
                            response.data.totalScore;
                        // console.log(response.data.rows);
                    });
            });
    }
    // Teacher dashboard js
    if (window.location.href.indexOf("teacher") > 0) {
        var restbtn = document.querySelectorAll(".ResultsStudentBtn");
        restbtn.forEach((button) => {
            button.addEventListener("click", function () {
                const studentId = this.getAttribute("data-id");
                console.log(
                    studentId,
                    "This student is result btn is clicked !"
                );
            });
        });
    }
});
