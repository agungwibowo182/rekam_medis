<template>
  <main>
    <h6>Select Client</h6>
    <select class="form-select form-select-sm mt-3">
      <option>QIMC</option>
      <option>Masif</option>
    </select>

    <br />
    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th>No</th>
          <th>Client Name</th>
          <th>Client Date</th>
          <th>Client Status</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(data, index) in datas" :key="index">
          <td>{{ index + 1 }}</td>
          <td>{{ data.client_name }}</td>
          <td>{{ data.client_date }}</td>
          <td>
            <a
              href="#"
              class="btn btn-sm btn-warning"
              data-bs-toggle="modal"
              data-bs-target="#kt_modal_create_app"
              id="kt_toolbar_primary_button"
              >ACTIVE</a
            >
          </td>
        </tr>
      </tbody>
    </table>
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
