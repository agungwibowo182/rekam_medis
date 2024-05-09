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
          <th>Username</th>
          <th>Group User</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(data, index) in datas" :key="index">
          <td>{{ index + 1 }}</td>
          <td>{{ data.username }}</td>
          <td>{{ data.group_user }}</td>
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
          username: 'SYSADMIN',
          group_user: '000000000000-000000000000000-0011001000',
          action: 'EDIT | HAPUS'
        },
        {
          username: 'qimc',
          group_user: '9eqaweadekld-sdklanlkdas1-dasdasj1',
          action: 'EDIT | HAPUS'
        },
        {
          username: 'user1',
          group_user: '09090890808ds-dasdnsaljlo-019280-29',
          action: 'EDIT | HAPUS'
        }
      ]
    }
  }
}
</script>
