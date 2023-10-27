<script setup>
import Checkbox from "@/Components/Checkbox.vue";
import GuestLayout from "@/Layouts/GuestLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, Link, useForm, usePage, Head } from "@inertiajs/vue3";
import { router } from "@inertiajs/vue3";
import VtrilProgress from "vtril-progress";







VtrilProgress.init({
    delay: 250,
    color: "#0049ff",
    includeCSS: true,
    showSpinner: true,
});

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
    errors: Object,
});
const form = useForm({
    email: "",
    password: "",
    remember: false,
});

const page = usePage();

const submit = () => {
    form.post(route("admin.login.post"), {
        onFinish: () => {
            form.reset("password")
            Swal.fire({
                toast: true,
                icon: 'success',
                position: 'top-end',
                timer: 3000,
                showConfirmButton: false,
                timerProgressBar: true,
                title: page.props.flash.success
            });
        },
    });
};
</script>

<template>
    <GuestLayout>

        <Head title="Login" />

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <form @submit.prevent="submit">


            <div v-if="$page.props.flash.error" class="text-[14px] bg-rose-500 mb-2 rounded-sm py-2 px-2 text-white">
                {{ $page.props.flash.error ? $page.props.flash.error : '' }}
            </div>
            <div>
                <InputLabel for="email" value="Email" />

                <TextInput id="email" type="email" :class="`mt-1 block w-full ${errors.email ? 'border-rose-500' : ''
                    } `" v-model="form.email" placeholder="Enter your email address" autofocus
                    autocomplete="username" />
                <p class="text-rose-500 text-[14px] font-medium" v-if="errors.email">
                    {{ errors.email }}
                </p>
            </div>

            <div class="mt-4">
                <InputLabel for="password" value="Password" />

                <TextInput id="password" type="password" :class="`mt-1 block w-full ${errors.password ? 'border-rose-500' : ''
                    } `" v-model="form.password" placeholder="........." autocomplete="current-password" />

                <p class="text-rose-500 text-[14px] font-medium" v-if="errors.password">
                    {{ errors.password }}
                </p>
            </div>

            <div class="block mt-4">
                <label class="flex items-center">
                    <Checkbox name="remember" v-model:checked="form.remember" />
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">Remember me</span>
                </label>
            </div>

            <div class="flex items-center justify-start mt-4">
                <Link v-if="canResetPassword" :href="route('password.request')"
                    class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                Forgot your password?
                </Link>

                <PrimaryButton class="" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Log in
                </PrimaryButton>
            </div>
        </form>
    </GuestLayout>
</template>
