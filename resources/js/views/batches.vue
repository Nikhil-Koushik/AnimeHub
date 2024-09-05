<template>
  <div class="">
    <h1>Batches</h1>
    <div v-for="(batch, index) in batches" :key="index">
      {{ batch.batchName }}
      <div v-for="(day, ind) in batch.batchDays['dates']" :key="ind">
        {{day.date}}, {{ day.title }}, {{ day.content }}
        <!-- <table>
          <thead>
            <tr>
              <th>Date</th>
              <th>Title</th>
              <th>Content</th>
              <th>Zoom</th>
              <th>Doc</th>
            </tr>
          </thead>
          <tbody>
            <tr></tr>
          </tbody>
        </table> -->
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      batches: [],
    };
  },
  mounted() {
    this.fetchBatches();
  },
  methods: {
    async fetchBatches() {
      try {
        const response = await fetch("/batch");
        this.data = await response.json();
        this.batches = this.data[0].batchArray;
        console.log(this.batches);
      } catch (err) {
        console.log(err);
      }
    },
  },
};
</script>

<style>
</style>