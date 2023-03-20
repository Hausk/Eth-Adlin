<template>
        <div>
                <label for="picture" class="block text-sm font-medium text-gray-700">Picture</label>
                <div class="mt-1 flex items-center">
                        <div class="flex-shrink-0 h-16 w-16">
                                <img v-if="previewUrl" :src="previewUrl" alt="" class="h-16 w-16 rounded-full">
                                <div v-else class="h-16 w-16 bg-gray-100 rounded-full"></div>
                        </div>
                        <div class="ml-4 flex">
                                <div class="flex text-sm">
                                        <label for="picture" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                <span>Change</span>
                                                <input id="picture" name="picture" type="file" class="sr-only" @change="onFileSelected">
                                        </label>
                                        <p class="pl-1">or drag and drop</p>
                                </div>
                        </div>
                </div>
        </div>
</template>
<script>
        export default {
                data() {
                	return {
				previewUrl: null
			}
        	},
		methods: {
			onFileSelected(event) {
				const file = event.target.files[0]
				if (!file) {
					this.previewUrl = null
					return
				}
				const reader = new FileReader()
				reader.onload = (event) => {
					this.previewUrl = event.target.result
				}
				reader.readAsDataURL(file)
			}
		}
	}
</script>
