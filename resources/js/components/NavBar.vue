<template>
	<Disclosure as="nav" class="bg-Emerald-500">
		<div class="px-2 sm:px-6 lg:px-6">
			<div class="relative flex h-16 justify-between">
				<div class="flex flex-1 items-stretch">
					<div class="flex flex-shrink-0 items-center">
						<img class="h-16 w-auto lg:block dark:h-50" src="./../../img/eth-white.svg" alt="Your Company" />
					</div>
				</div>
				<div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <button @click="isOpen = !isOpen">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-6 h-6 text-white"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
                            />
                        </svg>
                    </button>
					<button type="button" class="rounded-full bg-Emerald-500 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
						<span class="sr-only">View notifications</span>
						<BellIcon class="h-6 w-6" aria-hidden="true" />
					</button>
					<!-- Profile dropdown -->
					<Menu as="div" class="relative ml-3">
						<div class="flex">
							<MenuButton class="flex bg-Emerald-500 text-sm outline-none">
								<span class="sr-only">Open user menu</span>
								<img :src="userPicture" class="h-8 w-8 rounded-full"  alt="" />
                                <p class="text-white pl-4 m-auto">{{ userInfos.name }}</p>
							</MenuButton>
						</div>
						<transition enter-active-class="transition ease-out duration-100" enter-from-class="transform opacity-0 scale-95" enter-to-class="transform opacity-100 scale-100" leave-active-class="transition ease-in duration-75" leave-from-class="transform opacity-100 scale-100" leave-to-class="transform opacity-0 scale-95">
							<MenuItems class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
								<MenuItem v-slot="{ active }">
									<a href="profile" :class="[active ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm text-gray-700']">Profile</a>
								</MenuItem>
								<MenuItem v-slot="{ active }">
									<a href="settings" :class="[active ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm text-gray-700']">Settings</a>
								</MenuItem>
								<MenuItem v-slot="{ active }">
									<a href="logout" @click="logout()" :class="[active ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm text-gray-700']">Sign out</a>
								</MenuItem>
							</MenuItems>
						</transition>
					</Menu>
                    <SunIcon v-if="isDark" class="w-6 h-6 ml-6 text-white cursor-pointer" @click="toggleDark()"/>
                    <MoonIcon v-else class="w-6 h-6 ml-6 text-white cursor-pointer"/>
				</div>
			</div>
		</div>
	</Disclosure>
</template>
<script setup>
	import { Disclosure, DisclosureButton, DisclosurePanel, Menu, MenuButton, MenuItem, MenuItems } from '@headlessui/vue'
	import { Bars3Icon, BellIcon, MoonIcon, SunIcon, XMarkIcon } from '@heroicons/vue/24/outline';
	import axios from 'axios';
	import { useRouter } from 'vue-router';
    import { ref } from "vue";
    import { useDark, useToggle } from '@vueuse/core';
    const isDark = useDark();
    const toggleDark = useToggle(isDark);

    const isOpen = ref(false);
    const props = defineProps(['userImage', 'userInfos']);
    const userInfos = JSON.parse(props.userInfos);
    const userPicture = props['userImage'];
</script>
