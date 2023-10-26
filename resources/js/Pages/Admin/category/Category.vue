<script setup>
import AdminLayout from "../inc/AdminLayout.vue";
import { Link, router, usePage } from '@inertiajs/vue3'
import { ref, watch } from "vue"
const props = defineProps({
    categories: Object,
    totalData: Number,
    filters: Array
});

const page = usePage();

const search = ref(props.filters.search);
const perPage = ref(5);

watch(search, (value) => {
    router.get("/admin/category/index", { search: value }, {
        preserveState: true,
        replace: true
    })
});

watch(perPage, (value) => {
    router.get("/admin/category/index", { perPage: value }, {
        preserveState: true,
        replace: true
    })
});


// for delete
const deleteCategory =  (id) => {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
             router.delete('/admin/delete/category/' + id, {
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
            })
        }
    })
}




</script>
<template>
    <AdminLayout>
        <section class="bg-white   shadow-lg border mb-2 py-[8px]">
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
        <section class="bg-gray-50 dark:bg-gray-900 p-3 pb-[40px] mb-[16px]">
            <div class="max-w-screen-xl">
                <!-- Start coding here -->
                <div class="bg-white dark:bg-gray-800 relative shadow-md rounded-sm overflow-hidden">
                    <div class="w-full text-white py-2 px-2 bg-blue-600">
                        <h1>Manage Category</h1>
                    </div>
                    <div
                        class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                        <div class="w-full md:w-1/2">
                            <form class="flex items-center">
                                <label for="simple-search" class="sr-only">Search</label>
                                <div class="relative w-full">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                            fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <input type="text" v-model="search" id="simple-search"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Search" required="" />
                                </div>
                            </form>
                        </div>
                        <div
                            class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                            <Link href="/admin/add/category/form" type="button"
                                class="flex items-center justify-center text-white rounded-sm bg-blue-700 hover:text-gray-900 hover:bg-white hover:border hover:border-blue-700   font-medium text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                            <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                            </svg>
                            Add Category
                            </Link>
                            <div class="flex items-center space-x-3 w-full md:w-auto">

                                <!-- result per page -->
                                <select name="perPage" v-model="perPage"
                                    class="px-[20px] py-[5px] focus:outline-none active:outline-nonee rounded-sm" id="">
                                    <option value="5" class="text-[14px] text-gray-900 text-center">5 Per Page</option>
                                    <option value="15" class="text-[14px] text-gray-900 text-center">15 Per Page</option>
                                    <option value="25" class="text-[14px] text-gray-900 text-center">25 Per Page</option>
                                </select>

                                <div id="filterDropdown"
                                    class="z-10 hidden w-48 p-3 bg-white rounded-lg shadow dark:bg-gray-700">
                                    <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white">
                                        Choose brand
                                    </h6>
                                    <ul class="space-y-2 text-sm" aria-labelledby="filterDropdownButton">
                                        <li class="flex items-center">
                                            <input id="apple" type="checkbox" value=""
                                                class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                                            <label for="apple"
                                                class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Apple
                                                (56)</label>
                                        </li>
                                        <li class="flex items-center">
                                            <input id="fitbit" type="checkbox" value=""
                                                class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                                            <label for="fitbit"
                                                class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Microsoft
                                                (16)</label>
                                        </li>
                                        <li class="flex items-center">
                                            <input id="razor" type="checkbox" value=""
                                                class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                                            <label for="razor"
                                                class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Razor
                                                (49)</label>
                                        </li>
                                        <li class="flex items-center">
                                            <input id="nikon" type="checkbox" value=""
                                                class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                                            <label for="nikon"
                                                class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Nikon
                                                (12)</label>
                                        </li>
                                        <li class="flex items-center">
                                            <input id="benq" type="checkbox" value=""
                                                class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                                            <label for="benq"
                                                class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">BenQ
                                                (74)</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-white bg-gray-800 uppercase  dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-4 py-3 font-bold text-[#fff] text-[14px]">
                                        SERIAL NO
                                    </th>
                                    <th scope="col" class="px-4 py-3 font-bold text-[#fff] text-[14px]">
                                        CATEGORY NAME
                                    </th>
                                    <th scope="col" class="px-4 py-3 font-bold text-[#fff] text-[14px]">
                                        CATEGORY SLUG
                                    </th>
                                    <th scope="col" class="px-4 py-3 font-bold text-[#fff] text-[14px]">
                                        CREATED AT
                                    </th>
                                    <th scope="col" class="px-4 py-3 font-bold text-[#fff] text-[14px]">
                                        UPDATED AT
                                    </th>
                                    <th scope="col" class="px-4 py-3 font-bold text-[#fff] text-[14px]">
                                        ACTIONS
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(categorie, key) in props.categories.data" :key="categorie.id"
                                    class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ key + 1 }}
                                    </th>
                                    <td class="px-4 py-3">{{ categorie.name }}</td>
                                    <td class="px-4 py-3">{{ categorie.category_slug }}</td>
                                    <td class="px-4 py-3 font-bold"> {{ categorie.created_at }}</td>
                                    <td class="px-4 py-3 font-bold"> {{ categorie.updated_at }}</td>
                                    <td class="px-4 py-3 flex items-center space-x-2 space-y-0">
                                        <Link :href="route('admin.edit.category.form',categorie.id)"
                                            class="bg-fuchsia-700 text-white hover:bg-fuchsia-900 px-1 py-1 rounded-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            class="w-4 h-4">
                                            <path
                                                d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z" />
                                            <path
                                                d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z" />
                                        </svg>
                                        </Link>
                                        <button @click="deleteCategory(categorie.id)"
                                            class="bg-rose-700 text-white hover:bg-rose-900 px-1 py-1 rounded-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                                class="w-4 h-4">
                                                <path fill-rule="evenodd"
                                                    d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <nav class="flex flex-col md:flex-row justify-between items-start md:items-center  md:space-y-0 p-4"
                        aria-label="Table navigation">
                        <span class="text-sm  text-gray-900 font-bold dark:text-gray-900">
                            Total Data :
                            <span class="font-semibold text-gray-900 dark:text-white">{{ props.totalData }}</span>
                        </span>
                        <div class="flex justify-end space-x-2">
                            <div v-for="(link, key) in props.categories.links" :key="key">
                                <div v-if="link.url == null" v-html="link.label"></div>
                                <Link v-else :href="link.url" v-html="link.label"
                                    :class="{ 'bg-blue-600   font-bold  text-white': link.active }"
                                    class="border hover:bg-blue-600 hover:border-blue-600 transition-all duration-200 ease-in-out hover:text-white border-gray-400 rounded-sm px-2 py-1" />
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </section>
    </AdminLayout>
</template>
