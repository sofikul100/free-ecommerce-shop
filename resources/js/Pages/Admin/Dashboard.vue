<script setup>
import AdminLayout from "./inc/AdminLayout.vue";
import { Head } from '@inertiajs/vue3'
</script>
<template>
    <Head>
        <title>Dashboard</title>
        <meta name="description" content="Your page description">
    </Head>
    <AdminLayout>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-8 pt-[30px] px-6">
            <!-- card start -->
            <div class="pl-1  h-[110px] bg-blue-400 rounded-lg shadow-md">
                <div
                    class="flex relative w-full h-full overflow-hidden text-white py-2 px-4 bg-[#0e44bf] rounded-lg justify-between">
                    <div class="my-auto text-left z-20">
                        <p class="font-bold">EARNINGS (MONTHLY)</p>
                        <p class="text-lg">$40,000</p>
                    </div>
                    <div class="my-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 z-20 relative" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div class="absolute w-[40px] h-[40px] right-[5px] top-[5px] rounded-md  bg-blue-700  z-10">

                    </div>
                    <div class="absolute w-[40px] h-[40px] right-[25px] rounded-md top-[25px] bg-blue-600  z-10">

                    </div>
                </div>
            </div>
            <!--  Monthly card end  -->
            <!--  Annual card start -->
            <div class="pl-1 h-[110px] bg-fuchsia-400 rounded-lg shadow-md">
                <div
                    class="flex w-full h-full relative overflow-hidden py-2 px-4 bg-[#7f169c] text-white rounded-lg justify-between">
                    <div class="my-auto z-20">
                        <p class="font-bold">EARNINGS (ANNUAL)</p>
                        <p class="text-lg">$215,000</p>
                    </div>
                    <div class="my-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 relative z-20" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div class="absolute w-[40px] h-[40px] right-[5px] top-[5px] rounded-md  bg-fuchsia-700  z-10">

                    </div>
                    <div class="absolute w-[40px] h-[40px] right-[25px] rounded-md top-[25px] bg-fuchsia-600  z-10">

                    </div>
                </div>
            </div>
            <!--  Annual card end  -->

            <!--  Tasks card start  -->
            <div class="pl-1 h-[110px] bg-green-400 rounded-lg shadow-md">
                <div
                    class="flex w-full relative overflow-hidden h-full py-2 px-4 text-white bg-green-700 rounded-lg justify-between">
                    <div class="my-auto z-20">
                        <p class="font-bold">TASKS</p>
                        <p class="text-lg">50%</p>
                    </div>
                    <div class="my-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 z-20 relative" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                        </svg>
                    </div>


                    <div class="absolute w-[40px] h-[40px] right-[5px] top-[5px] rounded-md  bg-green-600  z-10">

                    </div>
                    <div class="absolute w-[40px] h-[40px] right-[25px] rounded-md top-[25px] bg-green-500  z-10">

                    </div>

                </div>
            </div>
            <!--  Tasks card end  -->

            <!--  Pending requests card start  -->
            <div class="pl-1  h-[110px] bg-rose-400 rounded-lg shadow-md">
                <div
                    class="flex w-full relative overflow-hidden h-full py-2 px-4 bg-rose-700 text-white rounded-lg justify-between">
                    <div class="my-auto z-20">
                        <p class="font-bold">PENDING REQUESTS</p>
                        <p class="text-lg">18</p>
                    </div>
                    <div class="my-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 relative z-20" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                        </svg>
                    </div>
                    <div class="absolute w-[40px] h-[40px] right-[5px] top-[5px] rounded-md  bg-rose-600  z-10">

                    </div>
                    <div class="absolute w-[40px] h-[40px] right-[25px] rounded-md top-[25px] bg-rose-500  z-10">

                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-4  px-6">
            <!-- card start -->
            <div class="pl-1  h-[110px] bg-blue-400 rounded-lg shadow-md">
                <div
                    class="flex relative w-full h-full overflow-hidden text-white py-2 px-4 bg-[#0e44bf] rounded-lg justify-between">
                    <div class="my-auto text-left z-20">
                        <p class="font-bold">EARNINGS (MONTHLY)</p>
                        <p class="text-lg">$40,000</p>
                    </div>
                    <div class="my-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 z-20 relative" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div class="absolute w-[40px] h-[40px] right-[5px] top-[5px] rounded-md  bg-blue-700  z-10">

                    </div>
                    <div class="absolute w-[40px] h-[40px] right-[25px] rounded-md top-[25px] bg-blue-600  z-10">

                    </div>
                </div>
            </div>
            <!--  Monthly card end  -->
            <!--  Annual card start -->
            <div class="pl-1 h-[110px] bg-fuchsia-400 rounded-lg shadow-md">
                <div
                    class="flex w-full h-full relative overflow-hidden py-2 px-4 bg-[#7f169c] text-white rounded-lg justify-between">
                    <div class="my-auto z-20">
                        <p class="font-bold">EARNINGS (ANNUAL)</p>
                        <p class="text-lg">$215,000</p>
                    </div>
                    <div class="my-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 relative z-20" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div class="absolute w-[40px] h-[40px] right-[5px] top-[5px] rounded-md  bg-fuchsia-700  z-10">

                    </div>
                    <div class="absolute w-[40px] h-[40px] right-[25px] rounded-md top-[25px] bg-fuchsia-600  z-10">

                    </div>
                </div>
            </div>
            <!--  Annual card end  -->

            <!--  Tasks card start  -->
            <div class="pl-1 h-[110px] bg-green-400 rounded-lg shadow-md">
                <div
                    class="flex w-full relative overflow-hidden h-full py-2 px-4 text-white bg-green-700 rounded-lg justify-between">
                    <div class="my-auto z-20">
                        <p class="font-bold">TASKS</p>
                        <p class="text-lg">50%</p>
                    </div>
                    <div class="my-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 z-20 relative" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                        </svg>
                    </div>


                    <div class="absolute w-[40px] h-[40px] right-[5px] top-[5px] rounded-md  bg-green-600  z-10">

                    </div>
                    <div class="absolute w-[40px] h-[40px] right-[25px] rounded-md top-[25px] bg-green-500  z-10">

                    </div>

                </div>
            </div>
            <!--  Tasks card end  -->

            <!--  Pending requests card start  -->
            <div class="pl-1  h-[110px] bg-rose-400 rounded-lg shadow-md">
                <div
                    class="flex w-full relative overflow-hidden h-full py-2 px-4 bg-rose-700 text-white rounded-lg justify-between">
                    <div class="my-auto z-20">
                        <p class="font-bold">PENDING REQUESTS</p>
                        <p class="text-lg">18</p>
                    </div>
                    <div class="my-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 relative z-20" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                        </svg>
                    </div>
                    <div class="absolute w-[40px] h-[40px] right-[5px] top-[5px] rounded-md  bg-rose-600  z-10">

                    </div>
                    <div class="absolute w-[40px] h-[40px] right-[25px] rounded-md top-[25px] bg-rose-500  z-10">

                    </div>
                </div>
            </div>
        </div>






        <!-- <div
            class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-96 mb-4"
        ></div>
        <div class="grid grid-cols-2 gap-4 mb-4">
            <div
                class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"
            ></div>
            <div
                class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"
            ></div>
            <div
                class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"
            ></div>
            <div
                class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"
            ></div>
        </div>
        <div
            class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-96 mb-4"
        ></div>
        <div class="grid grid-cols-2 gap-4">
            <div
                class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"
            ></div>
            <div
                class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"
            ></div>
            <div
                class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"
            ></div>
            <div
                class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"
            ></div>
        </div> -->
    </AdminLayout>
</template>
