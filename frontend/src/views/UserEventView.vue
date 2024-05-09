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
          <th>Event Name</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(data, index) in datas" :key="index">
          <td>{{ index + 1 }}</td>
          <td>{{ data.username }}</td>
          <td>{{ data.group_user }}</td>
          <td>{{ data.event_name }}</td>
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
          username: 'user1',
          group_user: 'Reg-officer',
          event_name: 'ASUS SOLUTION DAY 2024',
          action: 'EDIT | HAPUS'
        },
        {
          username: 'user2',
          group_user: 'Reg-officer',
          event_name: 'ASUS SOLUTION DAY 2024',
          action: 'EDIT | HAPUS'
        }
      ]
    }
  }
}
</script>
