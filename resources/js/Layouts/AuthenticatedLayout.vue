<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/vue3';

/* const showingNavigationDropdown = ref(false); */
/* import Sidebar from '/resources/js/components/Sidebar.vue'
const show = ref(false); */
const open = ref(false);
const dimmer = ref(true);
const right = ref(false);

const toggle = () => {
  open.value = !open.value;
};

</script>

<template>
 <div id="app">
    <!--Sidebar with Dimmer -->
    <div class="fixed inset-0 flex z-40">
      <!-- Sidebar -->
      <div
        class="absolute flex top-0 h-screen z-20"
        :class="[right ? 'right-0 flex-row' : 'left-0 flex-row-reverse']"
      >
        <!--Drawer -->
        <button
          @click.prevent="toggle()"
          class="w-12 h-48 p-1 my-auto rounded text-white bg-gray-600 text-center focus:outline-none hover:bg-gray-500 transition-color duration-300"
        >
          <span
            :class="[right ? '-rotate-90' : 'rotate-90']"
            class="block transform origin-center font-bold"
          >
            Drawer
          </span>
        </button>

        <!-- Sidebar Content -->
        <div
          ref="content"
          class="transition-all duration-700 bg-yellow-200 overflow-hidden flex items-center justify-center"
          :class="[open ? 'max-w-lg' : 'max-w-0']"
        >
          <div class="w-48 text-center font-bold text-xl">Sidebar</div>
          <slot></slot>
        </div>
      </div>

      <transition name="fade">
        <!-- Dimmer -->
        <div
          v-if="dimmer && open"
          @click="toggle()"
          class="flex-1 bg-gray-400 bg-opacity-75 active:outline-none z-10"
        />
      </transition>
    </div>

    <!-- Page Content -->
    <div
      class="absolute inset-1/2 rounded bg-green-500 w-1/2 h-1/2 transform -translate-x-1/2 -translate-y-1/2 flex justify-center items-center text-white"
    >
      Page Content
    </div>
  </div>
<!-- 
<button class=" bg-violet-500 py-2 px-4 text-white rounded-md hover:bg-violet-600"
   v-on:click="show=!show">
    Open Sidebar
</button>
<Sidebar :show="show" v-on:close="show = false" /> -->
    <!-- <div>
        <div class="min-h-screen bg-gray-100">
            <nav class="bg-white border-b border-gray-100"> -->
                <!-- Primary Navigation Menu -->
             <!--    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex"> -->
                            <!-- Logo -->
                           <!--  <div class="shrink-0 flex items-center">
                                <Link :href="route('dashboard')">
                                    <ApplicationLogo
                                        class="block h-9 w-auto fill-current text-gray-800"
                                    />
                                </Link>
                            </div> -->

                            <!-- Navigation Links -->
                         <!--    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                <NavLink :href="route('dashboard')" :active="route().current('dashboard')">
                                    Dashboard
                                </NavLink>
                            </div>
                        </div>

                        <div class="hidden sm:flex sm:items-center sm:ml-6"> -->
                            <!-- Settings Dropdown -->
                         <!--    <div class="ml-3 relative">
                                <Dropdown align="right" width="48">
                                    <template #trigger>
                                        <span class="inline-flex rounded-md">
                                            <button
                                                type="button"
                                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150"
                                            >
                                                {{ $page.props.auth.user.name }}

                                                <svg
                                                    class="ml-2 -mr-0.5 h-4 w-4"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20"
                                                    fill="currentColor"
                                                >
                                                    <path
                                                        fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"
                                                    />
                                                </svg>
                                            </button>
                                        </span>
                                    </template>

                                    <template #content>
                                        <DropdownLink :href="route('profile.edit')"> Profile </DropdownLink>
                                        <DropdownLink :href="route('logout')" method="post" as="button">
                                            Log Out
                                        </DropdownLink>
                                    </template>
                                </Dropdown>
                            </div>
                        </div> -->

                        <!-- Hamburger -->
                     <!--    <div class="-mr-2 flex items-center sm:hidden">
                            <button
                                @click="showingNavigationDropdown = !showingNavigationDropdown"
                                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
                            >
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path
                                        :class="{
                                            hidden: showingNavigationDropdown,
                                            'inline-flex': !showingNavigationDropdown,
                                        }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16"
                                    />
                                    <path
                                        :class="{
                                            hidden: !showingNavigationDropdown,
                                            'inline-flex': showingNavigationDropdown,
                                        }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"
                                    />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div> -->

                <!-- Responsive Navigation Menu -->
              <!--   <div
                    :class="{ block: showingNavigationDropdown, hidden: !showingNavigationDropdown }"
                    class="sm:hidden"
                >
                    <div class="pt-2 pb-3 space-y-1">
                        <ResponsiveNavLink :href="route('dashboard')" :active="route().current('dashboard')">
                            Dashboard
                        </ResponsiveNavLink>
                    </div> -->

                    <!-- Responsive Settings Options -->
             <!--        <div class="pt-4 pb-1 border-t border-gray-200">
                        <div class="px-4">
                            <div class="font-medium text-base text-gray-800">
                                {{ $page.props.auth.user.name }}
                            </div>
                            <div class="font-medium text-sm text-gray-500">{{ $page.props.auth.user.email }}</div>
                        </div>

                        <div class="mt-3 space-y-1">
                            <ResponsiveNavLink :href="route('profile.edit')"> Profile </ResponsiveNavLink>
                            <ResponsiveNavLink :href="route('logout')" method="post" as="button">
                                Log Out
                            </ResponsiveNavLink>
                        </div>
                    </div>
                </div>
            </nav> -->

            <!-- Page Heading -->
           <!--  <header class="bg-white shadow" v-if="$slots.header">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <slot name="header" />
                </div>
            </header> -->

            <!-- Page Content -->
       <!--      <main>
                <slot />
            </main>
        </div>
    </div> -->



</template>
<style>
html {
  background: #efefef;
}

.fade-enter-active,
.fade-leave-active {
  transition: opacity 1s ease-out;
}

.fade-enter,
.fade-leave-to {
  opacity: 0;
}
</style>