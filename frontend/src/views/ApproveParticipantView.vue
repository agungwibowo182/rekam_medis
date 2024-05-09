<template>
  <main>
    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th>No</th>
          <th>Select All</th>
          <th>Customer Name</th>
          <th>Company</th>
          <th>Contact</th>
          <th>Email</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(data, index) in datas" :key="index">
          <td>{{ index + 1 }}</td>
          <td>{{ data.select_all }}</td>
          <td>{{ data.customer_name }}</td>
          <td>{{ data.company_name }}</td>
          <td>{{ data.contact_name }}</td>
          <td>{{ data.email }}</td>
          <td></td>
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
          select_all: '',
          customer_name: 'Yohana Melda',
          company_name: 'PT Icon Teknologi',
          contact_name: '08129878728',
          email: 'yohana@icon.com',
          action: 'EDIT | DELETE | PRINT'
        },
        {
          select_all: '',
          customer_name: 'Agung Mulyono',
          company_name: 'PT Danamas Insan',
          contact_name: '08129878728',
          email: 'agung@danamas.com',
          action: 'EDIT | DELETE | PRINT'
        }
      ]
    }
  }
}
</script>
