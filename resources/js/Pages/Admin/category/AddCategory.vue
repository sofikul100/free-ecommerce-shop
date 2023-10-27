<script setup>
import AdminLayout from "../inc/AdminLayout.vue";
import {Link, usePage,Head} from "@inertiajs/vue3";
import { router, useForm } from "@inertiajs/vue3";
import { reactive } from "vue";


const form = useForm({
    name: ''
})

defineProps({
    errors: Object
})

const page = usePage();

const addCategory = async () => {

    await router.post('/admin/add/category', form, {
        onFinish: () => {
            if (page.props.flash.success) {
                Swal.fire({
                    toast: true,
                    icon: 'success',
                    position: 'top-end',
                    timer: 3000,
                    showConfirmButton: false,
                    timerProgressBar: true,
                    title: page.props.flash.success
                });
            }

        }
    });
}







</script>
<template>
    <Head>
        <title>Add-Category</title>
        <meta name="description" content="Your page description">
    </Head>
    <AdminLayout>
        <section class="bg-white shadow-lg border mb-2 py-[8px]">
            <div class="hidden sm:flex items-center justify-between px-2">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-10 h-10 text-blue-600 font-bold">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 01-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 011.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 00-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 01-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 00-3.375-3.375h-1.5a1.125 1.125 0 01-1.125-1.125v-1.5a3.375 3.375 0 00-3.375-3.375H9.75" />
                    </svg>
                    <div class="flex-col ml-[5px] mt-[2px]">
                        <h1 class="font-bold tracking-widest text-[18px] text-blue-600">
                            Category
                        </h1>
                        <p class="text-[14px] tracking-widest font-medium">
                            Category Features
                        </p>
                    </div>
                </div>
                <div class="flex items-center space-x-[8px] bg-gray-600 rounded-sm text-blue-600 px-6 py-2">
                    <div class="flex items-center space-x-[2px]">
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                class="w-4 h-4 text-white">
                                <path fill-rule="evenodd"
                                    d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                        <span class="text-[14px] font-medium text-white tracking-widest">Dashboard >></span>
                    </div>
                    <div class="flex items-center space-x-[2px]">
                        <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 01-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 011.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 00-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 01-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 00-3.375-3.375h-1.5a1.125 1.125 0 01-1.125-1.125v-1.5a3.375 3.375 0 00-3.375-3.375H9.75" />
                            </svg>
                        </span>
                        <span class="text-[14px] font-medium tracking-widest">Category</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-gray-50 dark:bg-gray-900 p-3 pb-[40px]">
            <div class="max-w-screen-xl">
                <!-- Start coding here -->
                <div class="bg-white dark:bg-gray-800 relative shadow-md rounded-sm overflow-hidden">
                    <div class="w-full flex justify-between items-center text-white py-2 px-2 bg-blue-600">
                        <div>
                            <h1>Add New Category</h1>
                        </div>
                        <div>
                            <Link href="/admin/category/index"
                                class="bg-white text-black py-1 px-8 tracking-widest rounded-sm hover:bg-gray-700 hover:text-white font-medium transition-all duration-500 ease-in-out">

                            Back
                            </Link>
                        </div>
                    </div>
                    <div class="flex-col space-y-3 md:space-y-0 md:space-x-4 p-4">
                        <form @submit.prevent="addCategory">
                            <div>
                                <div class="relative z-0 w-full mb-6 group">
                                    <input type="text" name="floating_email" id="floating_email" v-model="form.name"
                                        :class="` ${errors.name ? 'border-rose-500' : ''} block py-2.5 px-0 w-full md:w-[50%] text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer`"
                                        placeholder=" " required />
                                    <p class="text-rose-500 text-[14px] font-medium" v-if="errors.name">
                                        {{ errors.name }}
                                    </p>
                                    <label for="floating_email"
                                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Category
                                        Name</label>
                                </div>
                            </div>
                            <button type="submit"
                                class="text-white flex items-center bg-blue-700 hover:bg-blue-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-sm text-sm w-[30%] sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        class="w-4 h-4">
                                        <path
                                            d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                                    </svg>
                                </span>
                                Add Now
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </AdminLayout>
</template>
