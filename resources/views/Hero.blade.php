<?php
$authh = true;
?>
<div class="  w-full flex ">
    <div class="w-1/2 flex  items-Start px-5 pt-40  flex-col ">
        <h1 class="text-7xl font-semibold " data-aos="fade-right" data-aos-duration="1000" data-aos-delay="0">
            School <span class="font-playwrite text-6xl text-purple-500">Result</span>
            <br> <span class="font-semibold text-7xl">Managment</span> System
        </h1>
        <p class=" font-Arimo pt-4 max-w-4xl text-xl" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">
            "Welcome to the School Result Management System. Students can securely log in to view their academic
            results, while teachers have the tools to manage student records, including adding, editing, and removing
            student details and results. Our system ensures efficient and accurate management of school performance
            data."
        </p>
        <div class="pt-6" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="1000">
            @if ($authh)
                <button type="button"
                    class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300  font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 font-playwrite"><a
                        href="dashboard">Dashboard</a></button>
            @else
                <button type="button"
                    class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 shadow-lg shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Login/SignUp</button>
            @endif

        </div>
    </div>
    <div class="w-1/2  flex  justify-center  ">
        <div class=" object-contain pt-12" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="1500">
            <img src="../images/SchlHomeimg1.png" alt="" height="500px" width="663px">
        </div>
    </div>

</div>
