<template>
  <main>
    <a
      href="#"
      class="btn btn-sm btn-primary"
      data-bs-toggle="modal"
      data-bs-target="#kt_modal_create_app"
      id="kt_toolbar_primary_button"
      >Add New</a
    >
    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th>No</th>
          <th>Client Name</th>
          <th>Client Telp</th>
          <th>Client Email</th>
          <th>Client Address</th>
          <th>Client Group</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(data, index) in datas" :key="index">
          <td>{{ index + 1 }}</td>
          <td>{{ data.client_name }}</td>
          <td>{{ data.client_tlp }}</td>
          <td>{{ data.client_email }}</td>
          <td>{{ data.client_address }}</td>
          <td>{{ data.client_group }}</td>
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
              >HAPUS</a
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
          client_name: 'QIMC',
          client_tlp: '081239098272',
          client_email: 'qimc@gmail.com',
          client_address: 'Jl Jendral sudirman Districk 8',
          client_group: 'Jl Jendral sudirman Districk 8',
          action: 'edit|hapus'
        }
      ]
    }
  }
}
</script>
