<script setup>
import { Link } from '@inertiajs/vue3'
import { ref } from "vue"
import './dropdown'


const sub_category = ref(false);

const togggleSubCategory = () => {
  sub_category.value = !sub_category.value
}


</script>

<template>
  <aside
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform -translate-x-full bg-white  border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidenav" id="drawer-navigation">
    <div class="overflow-y-auto py-5 px-3 h-full bg-[#000] text-[#fff] dark:bg-gray-800">
      <form action="#" method="GET" class="md:hidden mb-2">
        <label for="sidebar-search" class="sr-only">Search</label>
        <div class="relative">
          <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
            <svg class="w-5 h-5 text-white dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z">
              </path>
            </svg>
          </div>
          <input type="text" name="search" id="sidebar-search"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
            placeholder="Search" />
        </div>
      </form>
      <ul class="space-y-2">
        <li>
          <Link href="/admin/dashboard"
            class="flex items-center p-2 text-white text-base font-medium   dark:text-white hover:bg-[#0e44bf] dark:hover:bg-gray-700 group">
          <svg aria-hidden="true"
            class="w-6 h-6 text-white transition duration-75 dark:text-gray-400 group-hover:[#fff] dark:group-hover:text-white"
            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
            <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
          </svg>
          <span class="ml-3 text-[15px]">Dashboard</span>
          </Link>
        </li>
        <li class="relative">
          <button type="button"
            class="flex items-center p-2 w-full text-white text-base font-medium   transition duration-75 group hover:bg-[#0e44bf] dark:text-white dark:hover:bg-[#0e44bf]"
            aria-controls="dropdown-pages" data-collapse-toggle="dropdown-pages">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M8.25 7.5V6.108c0-1.135.845-2.098 1.976-2.192.373-.03.748-.057 1.123-.08M15.75 18H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08M15.75 18.75v-1.875a3.375 3.375 0 00-3.375-3.375h-1.5a1.125 1.125 0 01-1.125-1.125v-1.5A3.375 3.375 0 006.375 7.5H5.25m11.9-3.664A2.251 2.251 0 0015 2.25h-1.5a2.251 2.251 0 00-2.15 1.586m5.8 0c.065.21.1.433.1.664v.75h-6V4.5c0-.231.035-.454.1-.664M6.75 7.5H4.875c-.621 0-1.125.504-1.125 1.125v12c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V16.5a9 9 0 00-9-9z" />
            </svg>

            <span class="flex-1 ml-3  text-left whitespace-nowrap text-[15px]">Category</span>
            <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
          <ul id="dropdown-pages"
            class="hidden relative py-2  bg-[#1d1f20]
             before:w-[2px] before:content['']  before:top-0 before:left-[18px] before:absolute before:bottom-0 before:bg-[#044890] transition-all ease-in-out duration-500">
            <li class="relative">
              <Link href="/admin/category/index" class="flex items-center  text-white p-2 pl-11 w-full text-[15px] text-base font-[100]   transition duration-75 group hover:text-[#0e44bf] dark:text-white dark:hover:bg-[#0e44bf] before:content[''] before:w-[18px]
                   before:top-[18px] before:left-[20px] before:absolute before:border before:border-[#044890] before:inline-block
                  ">Category</Link>
            </li>
            <li class="relative">
              <Link href="/admin/add/category/form"
                class="flex  items-center text-white p-2 pl-11 w-full text-[15px] text-base font-[100]  rounded-lg transition duration-75 group hover:text-[#0e44bf] dark:text-white dark:hover:bg-[#0e44bf] before:content[''] before:w-[18px]
                   before:top-[18px] before:left-[20px] before:absolute before:border before:border-[#044890] before:inline-block">Add Category</Link>
            </li>
          </ul>

        </li>

        <li class="relative">
          <button type="button" id="sub_category" @click="togggleSubCategory"
            class="flex items-center p-2 w-full text-white text-base font-medium   transition duration-75 group hover:bg-[#0e44bf] dark:text-white dark:hover:bg-[#0e44bf]">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M15.666 3.888A2.25 2.25 0 0013.5 2.25h-3c-1.03 0-1.9.693-2.166 1.638m7.332 0c.055.194.084.4.084.612v0a.75.75 0 01-.75.75H9a.75.75 0 01-.75-.75v0c0-.212.03-.418.084-.612m7.332 0c.646.049 1.288.11 1.927.184 1.1.128 1.907 1.077 1.907 2.185V19.5a2.25 2.25 0 01-2.25 2.25H6.75A2.25 2.25 0 014.5 19.5V6.257c0-1.108.806-2.057 1.907-2.185a48.208 48.208 0 011.927-.184" />
            </svg>

            <span class="flex-1 ml-3  text-left whitespace-nowrap text-[15px]">Subcategory</span>
            <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
          <ul id="sub_category_dropdowns" v-show="sub_category"
            class="relative py-2  bg-[#1d1f20]
             before:w-[2px] before:content['']  before:top-0 before:left-[18px] before:absolute before:bottom-0 before:bg-[#044890] transition-all ease-in-out duration-500">
            <li class="relative">
              <Link href="/admin/category/index" class="flex items-center  text-white p-2 pl-11 w-full text-[15px] text-base font-[100]   transition duration-75 group hover:text-[#0e44bf] dark:text-white dark:hover:bg-[#0e44bf] before:content[''] before:w-[18px]
                   before:top-[18px] before:left-[20px] before:absolute before:border before:border-[#044890] before:inline-block
                  ">Subcategory</Link>
            </li>
            <li class="relative">
              <Link href="/admin/add/category/form"
                class="flex  items-center text-white p-2 pl-11 w-full text-[15px] text-base font-[100]  rounded-lg transition duration-75 group hover:text-[#0e44bf] dark:text-white dark:hover:bg-[#0e44bf] before:content[''] before:w-[18px]
                   before:top-[18px] before:left-[20px] before:absolute before:border before:border-[#044890] before:inline-block">Add Subategory</Link>
            </li>
          </ul>

        </li>
      </ul>


    </div>

  </aside>
</template>