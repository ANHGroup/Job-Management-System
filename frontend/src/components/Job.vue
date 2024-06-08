<script setup>
import axios from 'axios';
import { ref, onMounted } from 'vue';

// Create reactive variables
const jobs = ref([]);

// Fetch data on component mount
onMounted(async () => {
  try {
    // Fetch data from the jobs API
    const jobsResponse = await axios.get("http://127.0.0.1:8000/api/jms_jobs");
    jobs.value = jobsResponse.data;
  } catch (error) {
    console.error("Failed to fetch data", error);
  }
});

</script>

<template>
  <div>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div v-for="job in jobs" :key="job.id" class="w-full bg-white shadow-md rounded-lg overflow-hidden mb-6">
          <div class="px-6 py-4">
            <h2 class="text-xl font-semibold text-gray-900">{{ job.title }}</h2>
            <p class="text-gray-600 mt-2">{{ job.description }}</p>
          </div>
          <div class="px-6 py-2 flex items-center">
            <div class="mr-4 flex items-center">
              <i class="fas fa-building pr-2"></i>
              <p class="text-gray-600">{{ job.company }}</p>
            </div>
            <div class="mr-4 flex items-center">
              <i class="fas fa-location-pin pr-2"></i>
              <p class="text-gray-600">{{ job.location }}</p>
            </div>
            <div class="mr-4 flex items-center">
              <i class="fas fa-money-bill-wave pr-2"></i>
              <p class="text-gray-600">{{ job.salary }} TK</p>
            </div>
          </div>
          <div class="flex justify-end m-3">
            <div class="flex">
              <a href="#" class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded inline-flex items-center">
                <i class="fas fa-trash"></i>
              </a>
              <a href="#" class="ml-1 bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded inline-flex items-center">
                <i class="fas fa-eye"></i>
              </a>
              <a href="#" class="ml-1 bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-4 border-b-4 border-green-700 hover:border-green-500 rounded inline-flex items-center">
                <i class="fas fa-sync-alt"></i>
              </a>
            </div>

          </div>
        </div>
      </div>
  </div>
</template>
