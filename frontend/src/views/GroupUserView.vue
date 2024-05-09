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
          <th>Group ID</th>
          <th>Group Name</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(data, index) in datas" :key="index">
          <td>{{ index + 1 }}</td>
          <td>{{ data.group_id }}</td>
          <td>{{ data.group_name }}</td>
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
          group_id: '87dsdsknsdksds8789776',
          group_name: 'Client Event',
          action: 'EDIT | HAPUS'
        },
        {
          group_id: '88787987698690dsdads',
          group_name: 'Administrator',
          action: 'EDIT | HAPUS'
        },
        {
          group_id: '78389979790708dsadd',
          group_name: 'Reg Officer',
          action: 'EDIT | HAPUS'
        }
      ]
    }
  }
}
</script>
