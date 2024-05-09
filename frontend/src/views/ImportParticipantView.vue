<template>
  <main>
    <h6>Choose Event</h6>
    <select class="form-select form-select-sm mt-3">
      <option>ASUS SOLUTION 2024</option>
      <option>Danamas Insan</option>
    </select>
  </main>
</template>
<script>
export default {
  data() {
    return {
      datas: [
        {
          client_name: 'Oracle Cloud Forum 2024',
          client_date: '17-04-2024',
          client_status: 'Active'
        },
        {
          client_name: 'Fujitsu Word Tour 2019',
          client_date: '17-04-2024',
          client_status: 'Non Active'
        }
      ]
    }
  }
}
</script>
