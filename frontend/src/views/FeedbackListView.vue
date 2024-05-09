<template>
  <main>
    <h6>Select Event</h6>
    <select class="form-select form-select-sm mt-3">
      <option>ASUS SOLUTION 2024</option>
      <option>DANAMAS INSAN EMPLOYEE</option>
    </select>

    <br />
    <a
      href="#"
      class="btn btn-sm btn-primary"
      data-bs-toggle="modal"
      data-bs-target="#kt_modal_create_app"
      id="kt_toolbar_primary_button"
      >Export data</a
    >
    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th>No</th>
          <th>Barcode ID</th>
          <th>Customer Name</th>
          <th>Company Name</th>
          <th>Email</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(data, index) in datas" :key="index">
          <td>{{ index + 1 }}</td>
          <td>{{ data.barcode_id }}</td>
          <td>{{ data.customer_name }}</td>
          <td>{{ data.company_name }}</td>
          <td>{{ data.email }}</td>
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
          barcode_id: 'H2DKIFJOSD',
          customer_name: 'Agung Wibowo',
          company_name: 'Microsot',
          email: 'agung@microsoft.com'
        }
      ]
    }
  }
}
</script>
