<template>
  <main>
    <h6>Select Client</h6>
    <select class="form-select form-select-sm mt-3">
      <option>ASUS SOLUTION DAY 2024</option>
      <option>Fujistu Employee 2019</option>
    </select>

    <br />
    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th>No</th>
          <th>Barcode ID</th>
          <th>Customer Name</th>
          <th>Company Name</th>
          <th>Email</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(data, index) in datas" :key="index">
          <td>{{ index + 1 }}</td>
          <td>{{ data.barcode_id }}</td>
          <td>{{ data.customer_name }}</td>
          <td>{{ data.company_name }}</td>
          <td>{{ data.email }}</td>
          <td>
            <a
              href="#"
              class="btn btn-sm btn-primary"
              data-bs-toggle="modal"
              data-bs-target="#kt_modal_create_app"
              id="kt_toolbar_primary_button"
              >EDIT</a
            >
            <a
              href="#"
              class="btn btn-sm btn-danger"
              data-bs-toggle="modal"
              data-bs-target="#kt_modal_create_app"
              id="kt_toolbar_primary_button"
              >DELETE</a
            >
            <a
              href="#"
              class="btn btn-sm btn-warning"
              data-bs-toggle="modal"
              data-bs-target="#kt_modal_create_app"
              id="kt_toolbar_primary_button"
              >PRINT</a
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
          barcode_id: 'HN15KCGHH1',
          customer_name: 'Yohana Melda',
          company_name: 'PT Icon Teknologi',
          email: 'yohana@icon.com',
          action: 'EDIT | DELETE | PRINT'
        },
        {
          barcode_id: 'HN15OCGHN2',
          customer_name: 'Agung Mulyono',
          company_name: 'PT Danamas Insan',
          email: 'agung@danamas.com',
          action: 'EDIT | DELETE | PRINT'
        }
      ]
    }
  }
}
</script>
